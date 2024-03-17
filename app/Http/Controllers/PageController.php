<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Api;
use App\Models\Apropos;
use App\Models\Condition;
use App\Models\Confidentialite;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    /**
     * Page A propos de Galerie Elda
     */
    public function about(){
        $apropos =Apropos::get();
        return view('pages.about')->with([
            'apropos' => $apropos]);
    }

    /**
     * Page de contact
     */
    public function contact(){
        return view('pages.contact');
    }

    public function storeMessage(Request $request){
        $this->validate($request,[
            'nom_prenom'=>"required|min:3|max:180",
            'email'=>"required|email:rfc,dns|min:3|max:150",
            'objet'=>"required|min:2|max:50",
            'message'=>"required|min:5|max:10000",
            'telephone'=>"nullable|max:50",
        ]);
        $name = $request->input('nom_prenom');
        $email = $request->input('email');
        $subject = $request->input('objet');
        $tel = $request->input('telephone');
        $message = $request->input('message');

        $infosContact = [
            "adresse" => "",
            "Nom" => $name,
            "Prenom" => "",
            "email" => $email,
            "objet" => $subject,
            "TEL" => $tel,
            "message" => $message,
        ];

        //dd($infosContact);

        //$response = Api::withToken()->post('https://elda-api.onrender.com/contact', $infosContact);
        
        $save=Contact::create($infosContact);
       // if ($response->status() === 200) {
          /*  Mail::raw($message, function ($message) use ($name, $email, $subject) {
                $message->to($email)
                        ->subject($subject)
                        ->from('ejuvencio05@gmail.com', $name)
                        ->replyTo('ejuvencio05@gmail.com', 'Galerie Elda');
            });*/
            if($save){

                return view('pages.response')->with([
                    'success' => "true"
                ]);
            }
       // } 
        
        return back();//->withInput();
    }
    
    /**
     * Page d'informations sur les moyens de paiements autorisés
     */
    public function securePayment(){
        return view('pages.secure-payment');
    }

    /**
     * Page d'informations sur potilique de confidentialités 
     * - données receuillies et usages de ces données
     * - politique de retours
     * - politique de livraisons
     * - etc
     */
    public function privacyPolicy(){
        $datas = Confidentialite::get();
        return view('pages.privacy-policy',compact('datas'));
    }
    /**
     * Page d'informations sur les conditions d'utilisations du site
     * - condiftions à remplir
     * - information à savoir sur la boutique et sur les produits
     * - etc
     */
    public function terms(){
        $datas = Condition::get();
        return view('pages.terms',compact('datas'));
    }
     /**
     * Page des réponses aux questions que peut se poser le client
     */
    public function faq(){
        return view('pages.faq');
    }
     /**
     * Page des réponses aux questions que peut se poser le client
     */
    public function ourShop(){
        return view('pages.our-shop');
    }
    
}