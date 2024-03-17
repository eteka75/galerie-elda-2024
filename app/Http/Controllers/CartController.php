<?php

namespace App\Http\Controllers;

use App\Api;
use Illuminate\Http\Request;
use App\Product;
use Cart;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{

    public function index()
    {
        $carts = Session::get('cart', []);
        return view('cart')->with([
            'carts' => $carts,
        ]);
    }

    public function deleteCart()
    {
        Session::forget('cart');
        $carts = [];
        return view('cart')->with([
            'carts' => $carts,
        ]);
    }

    public function destroy($code)
    {
        $cart = Session::get('cart', []);

        if (isset($cart[$code])) {
            unset($cart[$code]);
            Session::put('cart', $cart);
        }
        session()->flash('success', 'L\'article a été bien supprimé de votre panier.');
        return back();
    }

    public function addToFavorites(Request $request)
    {
        $this->validate($request, [
			'id' => 'required|min:1|max:50',
			'code' => 'required|min:1|max:50',
			'name' => 'required|min:1|max:50',
			'price' => 'required|min:1|max:50',
			'code_manuelle' => 'min:0|max:250',
			'image' => 'required|min:4|max:500',
        ]);
        $product=$request->only(["id","code","name","price","image","code_manuelle"]);
        $product['qty']=1;

        $cart = Session::get('fav', []);
        $lien_msg="Consulter <a href=".route('favorites.show')."> mes favoris</a>";
        if (isset($cart[$request->input('code')])) {
            return redirect()->back()->with('warning', 'L\'article sélectionné existe déjà dans vos favoris. '.$lien_msg);
        } 
        $cart[$request->input('code')] = $product;
        Session::put('fav', $cart);
        
        return redirect()->back()->with('success', 'L\'article a été ajouté à vos favoris. '.$lien_msg);
    }
    public function favorites(){
        $carts = Session::get('fav', []);
        return view('favorites',compact('carts'));
    }
    public function removeToFavorites($code){
        $cart = Session::get('fav', []);

        if (isset($cart[$code])) {
            unset($cart[$code]);
            Session::put('fav', $cart);
        }
       return redirect()->back()->with('success', 'L\'article a été bien supprimé de vos favoris.');
    }
}