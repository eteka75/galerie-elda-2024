<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Confidentialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConfidentialiteController extends Controller
{
    public function index()
    {
        $confidentialites = Confidentialite::get()->toArray();

        return view('backend.confidentialites.index')->with('confidentialites', $confidentialites);
    }


    public function create()
    {
        return view('backend.confidentialites.create');
    }


    public function store(Request $request)
    {
        $confidentialite = new Confidentialite();
        $confidentialite->titre = $request->filled('titre') ? $request->titre : 'N/A';
        $confidentialite->paragraphe = $request->filled('paragraphe') ? $request->paragraphe : 'N/A';

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $directory = 'storage/elda/confidentialites';
            if (!Storage::exists($directory)) {
                Storage::makeDirectory($directory);
            }
            $filename = uniqid() .'.' . $file->getClientOriginalExtension();

            
            $file->move(public_path($directory), $filename);

            $confidentialite->photo =  $directory . '/' . $filename;
        } else {
            $confidentialite->photo = 'null';
        }

        $confidentialite->save();
        request()->session()->flash('success', 'Enregistrement effectué avec succès!');
        return redirect()->route('confidentialites.index');
    }

    public function edit($id)
    {
        $confidentialite = Confidentialite::findOrFail($id);
        /*foreach ($confidentialite->getAttributes() as $attribute => $value) {
            $data[$attribute] = $value;
        }*/

        //$confidentialite = $data;
        return view('backend.confidentialites.edit',compact('confidentialite'));
    }

    public function update(Request $request, $id)
    {
        $apropo = Confidentialite::findOrFail($id);

        $apropo->update($request->all());
        $sup=$request->input("sup");
        
        if($sup=="1"){
            $apropo->photo = null;
            $apropo->save();
        }
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $directory = 'storage/elda/confidentialites';
            if (!Storage::exists($directory)) {
                Storage::makeDirectory($directory);
            }
            $filename = uniqid() . '_' . $image->getClientOriginalName();
            $image->move(public_path($directory), $filename);
            $apropo->photo = $directory . '/' . $filename;
            $apropo->save();
        }


        request()->session()->flash('success','Mise à jour éffectuée avec succès!');
        return redirect()->route('confidentialites.index');

    }

    public function destroy($id)
    {
        $apropo = Confidentialite::findOrFail($id);
        $apropo->delete();
        request()->session()->flash('success','Suppression éffectuée avec succès!');
        return redirect()->route('confidentialites.index');
    }

}
