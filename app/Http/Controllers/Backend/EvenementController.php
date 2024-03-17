<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Evenement;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    //

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evenement=Evenement::get();
        $evenement = $evenement->toArray();
        return view('backend.evenement.index')->with('evenements',$evenement);
    }


}
