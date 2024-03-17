<?php

namespace App\Http\Controllers;

use App\Api;
use App\Models\Choisir;
use App\Models\Famille;
use App\Models\Nouvelle;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Publicite;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

class WelcomePageController extends Controller
{
    public function index()
    {
        /*$slider= Api::withToken()->get('https://elda-api.onrender.com/sliders?order_by_id=ASC&nb=10');
        $sliderAll = ($slider->json() && isset($slider->json()['data']))? $slider->json()['data'] :[];
        //dd($sliderAll);
        //article
        $articles = Api::withToken()->get('https://elda-api.onrender.com/articles?nb_elements=6');
        $articleAll =($articles->json() && isset($articles->json()['data']))? $articles->json()['data'] :[];;
        
        //recommandation
        $response = Api::withToken()->get('https://elda-api.onrender.com/populaires?nb_elements=6');
        $articleRecommandes = ($response->json() && isset($response->json()['data']))? $response->json()['data'] :[];
        
        //Catégories
        $response = Api::withToken()->get('https://elda-api.onrender.com/familles?nb_elements=4');
        $categories = ($response->json() && isset($response->json()['data']))? $response->json()['data'] :[];*/
        $limitSlide=15;
        $limitCat=6;
        $limitProduct=10;
        $limitRecom=12;
        $limitPub=8;
        $limitPourq=3;
        $sliderAll= Nouvelle::inRandomOrder()->limit($limitSlide)->get()->toArray();//->get()->toArray();
        $articleAll= Product::with('Infos')->inRandomOrder()->limit($limitProduct)->get()->toArray();
        $categories= Famille::inRandomOrder()->limit($limitCat)->get()->toArray();
        $articleRecommandes= Product::with('Infos')->inRandomOrder()->limit($limitRecom)->get()->toArray();
        $allPubs = Publicite::limit($limitPub)->get()->toArray();
        
        $pourquois = Choisir::limit($limitPourq)->get()->toArray();
        
        $colors = [1=>'success',2=> 'muted',3=>'primary'];
        $cmpt=1;
        foreach ($pourquois as &$item) {              
            $item['color'] = $colors[$cmpt];
            if($cmpt>=3){$cmpt=1;}
            $cmpt++;
        }
        


                
        return view('welcome')->with([
            'sliders' => $sliderAll,
            'products' => $articleAll,
            'publicites' => $allPubs,
            'pourquois' => $pourquois,
            'productsArticles' => $articleRecommandes,
            'categories' => $categories,
        ]);
    }   
}