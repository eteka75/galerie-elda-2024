<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client=Client::get();
        $client = $client->toArray();
        return view('backend.client.index')->with('clients',$client);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'CLIENT' => 'required|string|max:150', // Adjust max length based on your database schema
            'ifu' => 'nullable|string|max:50',
            'TEL' => 'nullable|string|max:50',
            'adresse' => 'nullable|string|max:150',
            'Ifusociete' => 'nullable|numeric', // Assuming Ifusociete is a numeric field
            'totaldette' => 'nullable|numeric', // Assuming Ifusociete is a numeric field
            'totalRemb' => 'nullable|numeric', // Assuming Ifusociete is a numeric field
            'Solde' => 'nullable|numeric', // Assuming Ifusociete is a numeric field
            'email' => 'required|string|max:150', // Adjust max length based on your database schema
            'CpteGal' => 'nullable|string|max:10',
        ]);

        
        $data=$request->all();
    
        $status=Client::create($data);
         
        if($status){
            request()->session()->flash('success','Client crée avec succes');
        }
        else{
            request()->session()->flash('error','Une erreur s\'est produite, veuillez réessayer !');
        }
        return redirect()->route('client.index');
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
        $client=Client::findOrFail($id);
        if($client){
            return view('backend.client.edit')->with('client',$client);
        }
        else{
            return view('backend.client.index')->with('error','Client not found');
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
        $client=Client::findOrFail($id);
        $this->validate($request,[
            'CLIENT' => 'required|string|max:150', // Adjust max length based on your database schema
            'ifu' => 'nullable|string|max:50',
            'TEL' => 'nullable|string|max:50',
            'adresse' => 'nullable|string|max:150',
            'Ifusociete' => 'nullable|numeric', // Assuming Ifusociete is a numeric field
            'totaldette' => 'nullable|numeric', // Assuming Ifusociete is a numeric field
            'totalRemb' => 'nullable|numeric', // Assuming Ifusociete is a numeric field
            'Solde' => 'nullable|numeric', // Assuming Ifusociete is a numeric field
            'email' => 'required|string|max:150', // Adjust max length based on your database schema
            'CpteGal' => 'nullable|string|max:10',
        ]);

        $data=$request->all();

        
        $status=$client->fill($data)->save();
        
        if($status){
            request()->session()->flash('success','Client mis à jour avec succès');
        }
        else{
            request()->session()->flash('error','Une erreur s\'est produite, veuillez réessayer !');
        }
        return redirect()->route('client.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client=Client::findOrFail($id);
        if($client){
            $status=$client->delete();
            if($status){
                request()->session()->flash('success','Client supprimé avec succès');
            }
            else{
                request()->session()->flash('error','Une erreur s\'est produite, veuillez réessayer !');
            }
            return redirect()->route('client.index');
        }
        else{
            request()->session()->flash('error','Client non trouvé');
            return redirect()->back();
        }
    }

    public function clientStore(Request $request){
        // return $request->all();
        $client=Client::where('IDClient',$request->IDClient)->first();
        // dd($client);
        if(!$client){
            request()->session()->flash('error','Invalid client id, Please try again');
            return back();
        }
    }

}
