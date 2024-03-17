<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{

    public function index(Request $request)
    {

        $carts = Session::get('cart', []);
        $tabPriceInputs = json_decode($request->input('tabPriceInput'));
        $sommeTotal = json_decode($request->input('totalPriceInput'));

        //dd($tabPriceInputs, $sommeTotal);


        $result = [];

        foreach ($carts as $index => $cart) {
            $price = $cart['price'];

            if (isset($tabPriceInputs[0]) && $tabPriceInputs[0] != 0) {
                $result[] = $tabPriceInputs[0] / $price;
            } else {
                $result[] = null;
            }
            array_shift($tabPriceInputs);
        }

        return view('checkout')->with([
            'carts' => $carts,
            'result' => $result,
            'sommeTotal' => $sommeTotal,
            'success' => "false"
        ]);
    }

    public function store(Request $request)
    {
        $carts = Session::get('cart', []);

        $dataCommande = [
            "generales" => [
                "montantHT" => $request->input('totalPrice'),
                "montantTTC" => $request->input('totalPrice'),
                "tva" => "0",
                "signature" => "",
                "signatureavoir" => "",
                "compteur" => "",
                "compteuravoir" => "",
                "compteurtotalavoir" => "",
                "net" => $request->input('totalPrice'),
                "MCFNUM" => "",
                "etiquette" => "",
                "modedereglement" => "",
                "QRVENTE" => "",
                "QRAVOIRE" => "",
                "CLIENT" => $request->input('name'),
                "RefAvoir" => "",
                "typ" => "",
                "remise" => 0,
                "Ifusociete" => 0,
                "reliquat" => 0,
                "MontantHTBouD" => 0,
                "MontantHTA" => 0,
                "LibelleBouD" => "",
                "libelleTVA" => "",
                "IfuClient" => "",
                "telclient" => $request->input('phone'),
                "city" => $request->input('city'),
                "email" => $request->input('email'),
                "pays" => $request->input('pays'),
                "postal_code" => $request->input('postal_code'),
                "address" => $request->input('address')
            ],
            "lignesCommandes" => []
        ];

        $tableau = json_decode($request->input('carts'), true);
        $quantities = json_decode($request->input('quantities'), true);

        $i = 0;
        foreach ($tableau as $item) {
            $ligneCommande = [
                "CODEPRODUIT" => $item['code'],
                "CLIENT" => $request->input('name'),
                "montant" => $item['price'],
                "Tva" => 0,
                "Designa" => $item['name'],
                "QTE_ZONE" => "",
                "Ifusociete" => "",
                "TauxRemise" => 0,
                "MontantRemise" => 0,
                "CodeManuel" => $item['codeManuel'],
                "TypeFacture" => "",
                "QteCmd" => $quantities[$i],
                "MontantLigneTTC" => $item['price'] * $quantities[$i]
            ];

            $dataCommande['lignesCommandes'][] = json_encode($ligneCommande);
            $i++;
        }

        $response = Http::post('https://elda-api.onrender.com/articles/checkout/', $dataCommande);

        if ($response->status()) {
            return view('checkout')->with([
                'carts' => $carts,
                'result' => $quantities,
                'sommeTotal' => $request->input('totalPrice'),
                'success' => "true"
            ]);
        } else {
            return view('checkout')->with([
                'carts' => $carts,
                'result' => $quantities,
                'sommeTotal' => $request->input('totalPrice'),
                'success' => "false"
            ]);
        }
    }
}