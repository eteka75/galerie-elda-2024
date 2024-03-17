<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Famille;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryAll = Famille::get();
        $category = $categoryAll->toArray();
        return view('backend.category.index')->with('categories', $category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create');
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
            'NOM' => 'string|required',
            'Ifusociete' => 'string|nullable',
            'CodeFamille' => 'string|nullable',
        ]);

        $data = $request->all();

        // Check if the file exists in the request
        if ($request->hasFile('imgPathLink')) {
            $image = $request->file('imgPathLink');

            // Define the directory where you want to store the image
            $directory = 'storage/elda/categorie';
            if (!Storage::exists($directory)) {
                Storage::makeDirectory($directory);
            }
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
        $status = Famille::create($data);

        if ($status) {
            request()->session()->flash('success', 'Categorie ajoutée avec succès');
        } else {
            request()->session()->flash('error', 'Une erreur s\'est produite, veuillez réessayer !');
        }

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $category = Famille::findOrFail($id);
        return view('backend.category.edit')->with('category', $category);
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
        $category = Famille::findOrFail($id);
        $this->validate($request, [
            'NOM' => 'string|required',
            'Ifusociete' => 'string|nullable',
            'CodeFamille' => 'string|nullable',
        ]);

        // Get the image from the request
        $image = $request->file('imgPathLink');

        // Convert category object to array
        $categoryArray = $category->toArray();

        // Get all request data
        $data = $request->all();

        // Check if a new image is uploaded
        if ($image != null) {
            // Define the directory where you want to store the image
            $directory = '/Elda/PishonSoftImageArticle/categorie';
            if (!Storage::exists($directory)) {
                Storage::makeDirectory($directory);
            }
            // Generate a unique filename for the image
            $filename = uniqid() .'.' . $image->getClientOriginalExtension();            

            // Move the uploaded file to the specified directory
            $image->move(public_path($directory), $filename);

            // Set the image path in the data array
            $data['imgPathLink'] = $directory . '/' . $filename;
        } else {
            // If no new image is uploaded, use the existing image path
            $data['imgPathLink'] = $categoryArray['imgPathLink'];
        }

        // Update the category with the new data
        $status = $category->fill($data)->save();

        // Check if the update was successful
        if ($status) {
            request()->session()->flash('success', 'Categorie mise à jour avec succès');
        } else {
            request()->session()->flash('error', 'Une erreur s\'est produite, veuillez réessayer !');
        }

        // Redirect back to the category index page
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Famille::findOrFail($id);
        $status = $category->delete();

        if ($status) {
            request()->session()->flash('success', 'Categorie supprimée avec succès');
        } else {
            request()->session()->flash('error', 'Une erreur s\'est produite, veuillez réessayer !');
        }
        return redirect()->route('category.index');
    }
}
