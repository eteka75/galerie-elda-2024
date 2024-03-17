<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Publicite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PubliciteController extends Controller
{
    public function index()
    {
        $publicite = Publicite::get();
        $publicite = $publicite->toArray();

        //dd($publicite);
        return view('backend.publicite.index')->with('publicites',$publicite);
    }

    public function create()
    {
        return view('backend.publicite.create');
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
            'Description' => 'required',
        ]);

        $publicite = new Publicite();
        $publicite->Description = $request->Description;

        if($request->hasFile('imgPathLink')){
            $file = $request->file('imgPathLink');
            $directory = 'storage/elda/publicites/';
            if (!Storage::exists($directory)) {
                Storage::makeDirectory($directory);
            }
            $filename = uniqid() .'.' . $file->getClientOriginalExtension();            

            $file->move($directory, $filename);

            $publicite->imgPathLink =  $directory . $filename;
            $publicite->save();

            request()->session()->flash('success', 'La publicité a été créer avec succès!');
            return redirect()->route('publicites.index');
        }else{
            $publicite->imgPathLink = 'null';
            $publicite->save();
            request()->session()->flash('success', 'La publicié a été enregistrer sans photo!');
            return redirect()->route('publicites.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
/*    public function show($id)
    {
    }
*/
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publicite = Publicite::findOrFail($id);
        foreach ($publicite->getAttributes() as $attribute => $value) {
            $data[$attribute] = $value;
        }

        $publicite = $data;
        return view('backend.publicite.edit',compact('publicite'));
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
        $publicite = Publicite::findOrFail($id);
        $this->validate($request,[
            'Description' => 'required'
        ]);
        $publicite->update($request->all());
        if ($request->hasFile('imgPathLink')) {            
            $file = $request->file('imgPathLink');
            $directory = 'storage/elda/publicites/';
            if (!Storage::exists($directory)) {
                Storage::makeDirectory($directory);
            }
            $filename = uniqid() .'.' . $file->getClientOriginalExtension();            

            $file->move($directory, $filename);

            $publicite->imgPathLink =  $directory . $filename;
            $publicite->save();
        }

        request()->session()->flash('success','La publicité a été mise à jour avec succès!');
        return redirect()->route('publicites.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publicite = Publicite::findOrFail($id);
        $publicite->delete();
        request()->session()->flash('success','La publicité a été supprimée avec succès!');
        return redirect()->route('publicites.index');
    }

}
