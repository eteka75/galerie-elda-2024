<?php

namespace App\Http\Controllers;

use App\Api;
use App\Models\Famille;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class ShopController extends Controller
{


    public function index(Request $request)
    {
        $categoryName = $request->get('name');
        $keyword = $request->get('category');
        $querystringArray=["name"=>$categoryName,'category'=>$keyword];
        $perPage=12;
        if (!empty($keyword)) {
            $products=Product::where('ID',$keyword)->paginate($perPage);
        } else {
            $products=Product::paginate($perPage);;
        }
        if(!empty($categoryName)){
            $products->appends($querystringArray);  
        }


       // dd($paginator);
        //$response =  Api::withToken()->get('https://elda-api.onrender.com/familles');
        $categories =  Famille::get();
        return view('shop')->with([
            'products' => $products,
            'categories' => $categories,
            'categoryName' => $categoryName ?? "Articles",
            'tagName' => $tagName ?? null
        ]);
    }
    public function getCategorie()
    {
        $nb_limit=12;
        $categories =Famille::paginate($nb_limit);
        return view('categorie')->with([
            'categories' => $categories,
        ]);
    }
    public function show($code)
    {
        //Porduit à visualiser
        $nbProduits=12;
        $product= Product::with('Infos')->where('imgPathLink','!=',null)->where('CODEPRODUIT',$code)->firstOrFail();//->toArray();
        $products= Product::with('Infos')->where('imgPathLink','!=',null)->inRandomOrder()->limit($nbProduits)->get()->toArray();
        if ($product) {
            $cookieName = 'ps_' . $product->CODEPRODUIT;
            if (!Cookie::has($cookieName)) {
                $new = ((int)($product->vues)) + 1;
                Product::where('CODEPRODUIT',$code)->update(['vues' => $new]);
                //$product->update(['vues' => 12]);
                Cookie::queue($cookieName, true, 60 * 24 * 7); // Set the cookie for 7 days
            }
        }
        return view('product')->with([
            'product' => $product->toArray(),
            'products' => $products,
        ]);
    }

    public function search(Request $request)
    {

        $nbProduits=12;
        $this->validate($request,['search'=>'min:1|max:20']);
        $query = trim($request->input('search'));
       
       /*
       'NOM',
        'QteTappro',
        'stock',
        'NumeroOpportunite',
        'PrixOpportunite',
        'Description','imgPathLink','CodeManuel','CODEPRODUIT','imgPath'*/
        $products=null;
        if(!empty($query)){
        $products=Product::with('Infos')->where('imgPathLink','!=',null)
        ->where('PRODUIT','LIKE',"%$query%")
        ->orWhere('NOM','LIKE',"%$query%")
        ->orWhere('NumeroOpportunite','LIKE',"%$query%")
        ->orWhere('PrixOpportunite','LIKE',"%$query%")
        ->orWhere('CodeManuel','LIKE',"%$query%")
        ->orWhere('CODEPRODUIT','LIKE',"%$query%")
        ->orWhere('Description','LIKE',"%$query%")
        ->paginate($nbProduits);
            $products->appends(['search'=>$query]);  
        }
        return view('search')->with([
            'products' => $products,
            'query' => $query
        ]);
    }

    public function addToCart(Request $request)
    {
        $code = $request->input('code');
        $response =  Api::withToken()->get('https://elda-api.onrender.com/articles?CODEPRODUIT=' . $code);
        $product =  ($response->json() && isset($response->json()['data']))? $response->json()['data'] :[];
        //dd($productCode, $response, $product);

       // $cart = $request->session()->forget('cart');
        $cart = Session::get('cart', []);
        $lien_msg="Consulter <a href=".route('cart.index')."> mon panier </a>";

        if (isset($cart[$request->input('code')])) {
            return redirect()->route('cart.index')->with('warning', 'L\'article sélectionné existe déjà dans votre panier.<br/>'.$lien_msg);
        } else {
            $cart[$request->input('code')] = [
                'id' => $product[0]['ID'],
                'name' => $product[0]['NOM'],
                'price' => $product[0]['prix'],
                'image' => $product[0]['imgPathLink'],
                'code' => $product[0]['CODEPRODUIT'],
                'codeManuel' => $product[0]['CodeManuel'],
                'qty' => 1
            ];
        }
        Session::put('cart', $cart);

        //dd($product, $cart);
        return redirect()->back()->with('success', 'L\'article a été ajouté avec succès à votre panier. <br/>'.$lien_msg);
    }

    public function purchaseIdeas(){
        return view('purchase-ideas');
    }
    public function freeDelivery(){
        return view('free-delivery');
    }
    public function promotions(Request $request){
        $p=intval($request->input('page'));
        $page=($p>0 && $p<100)?$p:12;//12 si page non valide [1,100]
        $nbElements = 12;

        $response =  Api::withToken()->get('https://elda-api.onrender.com/promotions?page='.$page.'&nb_elements='.$nbElements);
        $products = ($response->json() && isset($response->json()['data']))? $response->json()['data'] :[];
        
        $collection = new Collection($products);

        $perPage = 12;
        $currentPage = request()->get('page', 1);

        $paginatedItems = $collection->slice(($currentPage - 1) * $perPage)->take($perPage);

        $paginator = new LengthAwarePaginator(
            $paginatedItems,
            $collection->count(),
            $perPage,
            $currentPage,
            [
                'path' => url()->current(),
                'query' => request()->query(),
            ]
        );
        //dd($products);
        return view('promotions')->with([
            'products' => $paginator,
        ]);
    }
    
    public function bestSellers(){
        $response =  Api::withToken()->get('https://elda-api.onrender.com/populaires');
        $products = ($response->json() && isset($response->json()['data']))? $response->json()['data'] :[];
        
        $collection = new Collection($products);

        $perPage = 12;
        $currentPage = request()->get('page', 1);

        $paginatedItems = $collection->slice(($currentPage - 1) * $perPage)->take($perPage);

        $paginator = new LengthAwarePaginator(
            $paginatedItems,
            $collection->count(),
            $perPage,
            $currentPage,
            [
                'path' => url()->current(),
                'query' => request()->query(),
            ]
        );
        
        return view('best-sellers')->with([
            'products' => $paginator,
        ]);
    }
    
   
}