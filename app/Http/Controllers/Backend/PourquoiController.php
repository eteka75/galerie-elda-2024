<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Choisir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PourquoiController extends Controller
{
    public function index()
    {
        $pourquois = Choisir::all();
        $pourquois = $pourquois->toArray();

        return view('backend.pourquoi.index')->with('pourquois', $pourquois);
    }

    public function create()
    {
        return view('backend.pourquoi.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'titre' => 'required',
            'description' => 'required',
        ]);

        $pourquoi = new Choisir();
        $pourquoi->titre = $request->titre;
        $pourquoi->description = $request->description;
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $directory = 'storage/elda/pourquoi';
            if (!Storage::exists($directory)) {
                Storage::makeDirectory($directory);
            }
            $filename = uniqid() .'.' . $file->getClientOriginalExtension();            

            $file->move(public_path($directory), $filename);

            $pourquoi->photo = $directory . '/' . $filename;
            $pourquoi->save();
        }

        request()->session()->flash('success', 'Créer avec succès!');
        return redirect()->route('pourquois.index');
    }

    public function edit($id)
    {
        $why = Choisir::findOrFail($id);
        foreach ($why->getAttributes() as $attribute => $value) {
            $data[$attribute] = $value;
        }

        $why = $data;
        return view('backend.pourquoi.edit',compact('why'));
    }

    public function update(Request $request, $id)
    {
        $pourquoi = Choisir::findOrFail($id);

        $this->validate($request,[
            'titre' => 'required',
            'description' => 'required'
        ]);

        $pourquoi->update($request->all());
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $directory = 'storage/elda/pourquoi';
            if (!Storage::exists($directory)) {
                Storage::makeDirectory($directory);
            }
            $filename = uniqid() .'.' . $image->getClientOriginalExtension();            

            $image->move(public_path($directory), $filename);

            $pourquoi->photo = $directory . '/' . $filename;
            $pourquoi->save();
        }

        request()->session()->flash('success','Mise à jour éffectuée avec succès!');
        return redirect()->route('pourquois.index');
    }

    public function destroy($id)
    {
        $pourquoi = Choisir::findOrFail($id);
        $pourquoi->delete();
        request()->session()->flash('success','Suppression éffectuée avec succès!');
        return redirect()->route('pourquois.index');
    }

}
