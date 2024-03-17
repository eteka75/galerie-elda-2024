<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Apropos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AproposController extends Controller
{
    public function index()
    {
        $apropos = Apropos::get();
        $apropos = $apropos->toArray();

        return view('backend.apropos.index')->with('apropos', $apropos);
    }


    public function create()
    {
        return view('backend.apropos.create');
    }


    public function store(Request $request)
    {
        $apropos = new Apropos();
        $apropos->titre = $request->filled('titre') ? $request->titre : 'N/A';
        $apropos->paragraphe = $request->filled('paragraphe') ? $request->paragraphe : 'N/A';

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $directory = 'storage/elda/apropos';
            if (!Storage::exists($directory)) {
                Storage::makeDirectory($directory);
            }
            $filename = uniqid() .'.' . $file->getClientOriginalExtension();

            $file->move(public_path($directory), $filename);

            $apropos->photo =  $directory . '/' . $filename;
        } else {
            $apropos->photo = 'null';
        }

        $apropos->save();
        request()->session()->flash('success', 'Enregistrement effectué avec succès!');
        return redirect()->route('apropos.index');
    }

    public function edit($id)
    {
        $apropo = Apropos::findOrFail($id);
        foreach ($apropo->getAttributes() as $attribute => $value) {
            $data[$attribute] = $value;
        }

        $apropo = $data;
        return view('backend.apropos.edit',compact('apropo'));
    }

    public function update(Request $request, $id)
    {
        $apropo = Apropos::findOrFail($id);

        $apropo->update($request->all());
        $sup=$request->input("sup");
        
        if($sup=="1"){
            $apropo->photo = null;
            $apropo->save();
        }
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $directory = 'storage/elda/apropos';
            if (!Storage::exists($directory)) {
                Storage::makeDirectory($directory);
            }
            $filename = uniqid() . '_' . $image->getClientOriginalName();
            $image->move(public_path($directory), $filename);
            $apropo->photo = $directory . '/' . $filename;
            $apropo->save();
        }


        request()->session()->flash('success','Mise à jour éffectuée avec succès!');
        return redirect()->route('apropos.index');

    }

    public function destroy($id)
    {
        $apropo = Apropos::findOrFail($id);
        $apropo->delete();
        request()->session()->flash('success','Suppression éffectuée avec succès!');
        return redirect()->route('apropos.index');
    }

}
