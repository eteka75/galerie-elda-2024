<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Fournisseur;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    //

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fournisseur=Fournisseur::get();
        $fournisseur = $fournisseur->toArray();
        return view('backend.fournisseur.index')->with('fournisseurs',$fournisseur);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.fournisseur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request, [
            'Fournisseur' => 'required|string|max:150', // Adjust max length based on your database schema
            'IFU' => 'nullable|string|max:50',
            'TEL' => 'nullable|string|max:50',
            'Adresse' => 'nullable|string|max:150',
            'Ifusociete' => 'nullable|numeric', // Assuming Ifusociete is a numeric field
            'CpteGal' => 'nullable|string|max:10',
        ]);

        $data=$request->all();
        $status=Fournisseur::create($data);
        
        if($status){
            request()->session()->flash('success','Fournisseur ajouté avec succes');
        }
        else{
            request()->session()->flash('error','Une erreur s\'est produite, veuillez réessayer !');
        }
        return redirect()->route('fournisseur.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fournisseur=Fournisseur::findOrFail($id);;
        if($fournisseur){
            return view('backend.fournisseur.edit')->with('fournisseur',$fournisseur);
        }
        else{
            return view('backend.fournisseur.index')->with('error','Fournisseur non trouvé');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fournisseur=Fournisseur::findOrFail($id);
        $this->validate($request,[
            'Fournisseur' => 'required|string|max:150', // Adjust max length based on your database schema
            'idfournisseur' => 'nullable|string|max:10',
            'IFU' => 'nullable|string|max:50',
            'TEL' => 'nullable|string|max:50',
            'Adresse' => 'nullable|string|max:150',
            'Ifusociete' => 'nullable|numeric', // Assuming Ifusociete is a numeric field
            'CpteGal' => 'nullable|string|max:10',
        ]);
        $data=$request->all();
        
        $status=$fournisseur->fill($data)->save();
        if($status){
            request()->session()->flash('success','Fournisseur mis à jour avec succès');
        }
        else{
            request()->session()->flash('error','Une erreur s\'est produite, veuillez réessayer !');
        }
        return redirect()->route('fournisseur.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fournisseur=Fournisseur::findOrFail($id);
        if($fournisseur){
            $status=$fournisseur->delete();
            if($status){
                request()->session()->flash('success','Fournisseur supprimé avec succes');
            }
            else{
                request()->session()->flash('error','Une erreur s\'est produite, veuillez réessayer !');
            }
            return redirect()->route('fournisseur.index');
        }
        else{
            request()->session()->flash('error','Fournisseur non trouvé');
            return redirect()->back();
        }
    }

    public function fournisseurStore(Request $request){
        // return $request->all();
        $fournisseur=Fournisseur::where('idfournisseur',$request->idfournisseur)->first();
        if(!$fournisseur){
            request()->session()->flash('error','Invalid fournisseur id, Please try again');
            return back();
        }
    }

}
