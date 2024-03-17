<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Condition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConditionController extends Controller
{
    public function index()
    {
        $conditions = Condition::get();
        $conditions = $conditions->toArray();
        return view('backend.conditions.index')->with('conditions', $conditions);
    }


    public function create()
    {
        return view('backend.conditions.create');
    }


    public function store(Request $request)
    {
        
        $conditions = new Condition();
        $conditions->titre = $request->filled('titre') ? $request->titre : 'N/A';
        $conditions->paragraphe = $request->filled('paragraphe') ? $request->paragraphe : 'N/A';

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $directory = 'storage/elda/conditions';
            if (!Storage::exists($directory)) {
                Storage::makeDirectory($directory);
            }
            $filename = uniqid() .'.' . $image->getClientOriginalExtension();            

            $file->move(public_path($directory), $filename);

            $conditions->photo =  $directory . '/' . $filename;
        } else {
            $conditions->photo = null;
        }

        $conditions->save();
        request()->session()->flash('success', 'Enregistrement effectué avec succès!');
        return redirect()->route('conditions.index');
    }

    public function edit($id)
    {
        $condition = Condition::findOrFail($id);
        /*foreach ($condition->getAttributes() as $attribute => $value) {
            $data[$attribute] = $value;
        }*/

       // $condition = $data;
        return view('backend.conditions.edit',compact('condition'));
    }

    public function update(Request $request, $id)
    {
        $apropo = Condition::findOrFail($id);

        $apropo->update($request->all());
        $sup=$request->input("sup");
        
        if($sup=="1"){
            $apropo->photo = null;
            $apropo->save();
        }
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $directory = 'storage/elda/conditions';
            if (!Storage::exists($directory)) {
                Storage::makeDirectory($directory);
            }
            $filename = uniqid() .'.' . $image->getClientOriginalExtension();            

            $image->move(public_path($directory), $filename);
            $apropo->photo = $directory . '/' . $filename;
            $apropo->save();
        }


        request()->session()->flash('success','Mise à jour éffectuée avec succès!');
        return redirect()->route('conditions.index');

    }

    public function destroy($id)
    {
        $apropo = Condition::findOrFail($id);
        $apropo->delete();
        request()->session()->flash('success','Suppression éffectuée avec succès!');
        return redirect()->route('conditions.index');
    }

}
