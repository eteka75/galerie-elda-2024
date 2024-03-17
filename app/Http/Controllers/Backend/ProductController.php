<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Famille;

use App\Models\SProduct;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::getAllProduct();

        $products = $products->toArray();
//dd($products);
        return view('backend.product.index')->with('products', $products);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Famille::all();
        return view('backend.product.create', compact('categories'));
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
            'PRODUIT' => 'required|string',
            'NOM' => 'required|string',
            'QteTappro' => 'nullable|numeric',
            'stock' => 'nullable|numeric',
            'NumeroOpportunite' => 'nullable|numeric',
            'CodeManuel' => 'required|max:100',
            'PrixOpportunite' => 'nullable|numeric',
            'Description' => 'nullable|string',
            'prix' => 'numeric|nullable',
            'design' => 'string|nullable|max:100',
            'prixachat' => 'numeric|nullable',
            'codebare' => 'integer|nullable',
            'Ifusociete' => 'string|nullable|max:100',
        ]);

        DB::beginTransaction();

        $data = $request->all();
        if ($request->hasFile('imgPathLink')) {
            $image = $request->file('imgPathLink');
            $directory = 'storage/elda/produits';
            if (!Storage::exists($directory)) {
                Storage::makeDirectory($directory);
            }
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();

            // Move the uploaded file to the specified directory
            $image->move(public_path($directory), $filename);
            $data['imgPath'] = $filename;
            // Set the image path in the data array
            $data['imgPathLink'] = $directory . '/' . $filename;
        } else {
            $data['imgPathLink'] = null;
        }

        $data['ID'] = Famille::where('NOM', $request->NOM)->first()->ID;

        $data2['idfamille'] =  Famille::where('NOM', $request->NOM)->first()->ID;


        $lastProduct = Product::orderBy('CODEPRODUIT', 'desc')->first();


        if ($lastProduct) {
            $lastCode = $lastProduct->CODEPRODUIT;
            $lastNumber = intval(substr($lastCode, 1));
            
            $nextNumber = $lastNumber + 1;
            $nextCode = 'P' . str_pad($nextNumber, 8, '0', STR_PAD_LEFT);
            $nextCodeS = 'S' . str_pad($nextNumber, 8, '0', STR_PAD_LEFT);
            $data['CODEPRODUIT'] = $nextCode;
            $data2['CODE_Sousproduit'] = $nextCodeS;
        } else {
            $nextCode = 'P00000001';
            $nextCodeS = 'S00000001';
            $data['CODEPRODUIT'] = $nextCode;
            $data2['CODE_Sousproduit'] = $nextCodeS;
        }

        if (!$lastProduct || !$lastProduct->CodeManuel) {
            $nextCodeManuel = 'J802-8-1';
            $data['CodeManuel'] = $nextCodeManuel;
            $data2['CodeManuel'] = $nextCodeManuel;
        } else {
            preg_match('/\d+$/', $lastProduct->CodeManuel, $matches);
            $lastNumericPart = intval($matches[0]);

            $nextNumericPart = $lastNumericPart + 1;

            $nextCodeManuel = 'J802-81-' . $nextNumericPart;
            $data['CodeManuel'] = $nextCodeManuel;
            $data2['CodeManuel'] = $nextCodeManuel;
        }

        dd($data['CODEPRODUIT']);
        $data2['prix']  = $request->prix;
        $data2['design'] = $request->design;
        $data2['prixachat']  = $request->prixachat;
        $data2['codebarre'] = $request->codebarre;
        $data2['PrixOpportunite'] = $request->PrixOpportunite;
        $data2['NOM'] = $data['NOM'];
        $data2['CODEPRODUIT'] = $data['CODEPRODUIT'];
        $data2['FamilleProd'] = $data['NOM'];

        $status = Product::create($data);
        $status2 = SProduct::create($data2);
        DB::commit();
        if ($status && $status2) {
            request()->session()->flash('success', 'Article ajoutée avec succès');
        } else {
            request()->session()->flash('error', 'Une erreur s\'est produite, veuillez réessayer !');
        }

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();

        $product = Product::findOrFail($id);
        $status = $product->delete();

        $sproduct = SProduct::findOrFail($id);
        $status2 = $sproduct->delete();


        DB::commit();

        if ($status && $status2) {
            request()->session()->flash('success', 'Article supprimée avec succès');
        } else {
            request()->session()->flash('error', 'Une erreur s\'est produite, veuillez réessayer !');
        }
        return redirect()->route('product.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $product = Product::with('Infos')->findOrFail($id);
        $categories = Famille::all();

        $prix=isset($product['Infos'],$product['Infos']['prix'])? ($product['Infos']['prix']):'';
       
        $product->prix=$prix;

        return view('backend.product.edit', compact('product', 'categories'));
    }



    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $this->validate($request, [
            'PRODUIT' => 'required|string',
            'NOM' => 'required|string',
            'QteTappro' => 'nullable|numeric',
            'stock' => 'nullable|numeric',
            'NumeroOpportunite' => 'nullable|numeric',
            'CodeManuel' => 'required|max:100',
            'PrixOpportunite' => 'nullable|numeric',
            'Description' => 'nullable|string',
            'prix' => 'numeric|nullable',
            'CODE_Sousproduit' => 'string|nullable|max:50',
            'design' => 'string|nullable|max:100',
            'prixachat' => 'numeric|nullable',
            'codebare' => 'integer|nullable',
            'Ifusociete' => 'string|nullable|max:100',
        ]);

        try {
            DB::beginTransaction();

            // Retrieve the product from the database
            $product = Product::findOrFail($id);

            // Update the product data
            $product->update($request->all());

            // Handle file upload if an image is provided
            if ($request->hasFile('imgPathLink')) {
                $image = $request->file('imgPathLink');

                // Define the directory where you want to store the image
                $directory = 'storage/elda/produits';
                if (!Storage::exists($directory)) {
                    Storage::makeDirectory($directory);
                }
                // Generate a unique filename for the image
                $filename = uniqid() .'.' . $image->getClientOriginalExtension();

                // Move the uploaded file to the specified directory
                $image->move(public_path($directory), $filename);

                // Set the image path in the product data
                $product->imgPath = $filename;
                $product->imgPathLink = $directory . '/' . $filename;

                // Save the updated product data
                $product->save();
            }

            // Retrieve the associated SProduct data and update it
            $sproduct = SProduct::where('CODEPRODUIT', $product->CODEPRODUIT)->first();
            if ($sproduct) {
                $sproduct->update([
                    'prix' => $request->prix,
                    'design' => $request->design,
                    'prixachat' => $request->prixachat,
                    'codebarre' => $request->codebarre,
                    'NOM' => $product->NOM,
                    'FamilleProd' => $product->NOM,
                ]);
            }

            DB::commit();

            request()->session()->flash('success', 'Article mis à jour avec succès');
            return redirect()->route('product.index');
        } catch (\Exception $e) {
            DB::rollback();
            request()->session()->flash('error', 'Une erreur s\'est produite lors de la mise à jour du produit. Veuillez réessayer !');
            return redirect()->back();
        }
    }
}
