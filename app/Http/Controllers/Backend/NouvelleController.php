<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Nouvelle;
use Illuminate\Http\Request;

class NouvelleController extends Controller
{
    //

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nouvelle = Nouvelle::get();
        $nouvelle = $nouvelle->toArray();
        //dd($nouvelle);
        return view('backend.nouvelle.index')->with('nouvelles', $nouvelle);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.nouvelle.create');
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
            'LibelleImage' => 'string|required|max:250',
            'Ifusociete' => 'string|nullable|max:250',
            'description' => 'string|nullable|max:100000',
            'lien' => 'nullable|url|max:250',
        ]);

        $data = $request->all();

        // Check if the file exists in the request
        if ($request->hasFile('imgPathLink')) {
            $image = $request->file('imgPathLink');

            // Define the directory where you want to store the image
            $directory = 'storage/elda/sliders';

            // Generate a unique filename for the image
            $filename = uniqid() .'.' . $image->getClientOriginalExtension();            


            // Move the uploaded file to the specified directory
            $image->move(public_path($directory), $filename);

            // Set the image path in the data array
            $data['imgPathLink'] = $directory . '/' . $filename;
        } else {
            $data['imgPathLink'] = null;
        }

        // Create the model instance
        $status = Nouvelle::create($data);

        if ($status) {
            request()->session()->flash('success', 'Slider ajouté avec succès');
        } else {
            request()->session()->flash('error', 'Une erreur s\'est produite, veuillez réessayer !');
        }

        return redirect()->route('sliders.index');
    }

    public function edit(Request $request, $id)
    {
        $nouvelle = Nouvelle::findOrFail($id);
        foreach ($nouvelle->getAttributes() as $attribute => $value) {
            $data[$attribute] = $value;
        }

        $nouvelle = $data;
        //dd($nouvelle);
        return view('backend.nouvelle.edit', compact('nouvelle'));
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
        $nouvelle = Nouvelle::findOrFail($id);
        $this->validate($request,[
            'LibelleImage' => 'string|required|max:250',
            'Ifusociete' => 'string|nullable|max:250',
            'description' => 'string|nullable|max:100000',
            'lien' => 'nullable|url|max:250',
        ]);
        $data=$request->except("imgPathLink");
            //dd($data);
        //$data['imgPathLink']=''
        $nouvelle->update($data);
        if ($request->hasFile('imgPathLink')) {
            $image = $request->file('imgPathLink');
            $directory = 'storage/elda/sliders/';
            $filename = uniqid() .'.' . $image->getClientOriginalExtension();            

            $image->move(public_path($directory), $filename);

            $nouvelle->imgPathLink = $directory  . $filename;
            $nouvelle->save();
        }
        
       
        request()->session()->flash('success','Slider mise à jour avec succès!');
        return redirect()->route('sliders.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Nouvelle::findOrFail($id);
        $status = $slider->delete();

        if ($status) {
            request()->session()->flash('success', 'Slider supprimé avec succès');
        } else {
            request()->session()->flash('error', 'Une erreur s\'est produite, veuillez réessayer !');
        }
        return redirect()->route('sliders.index');
    }
}
