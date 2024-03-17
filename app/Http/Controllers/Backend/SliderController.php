<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliderAll=Slider::get();
        $slider = $sliderAll->toArray();
        return view('backend.slider.index')->with('sliders',$slider);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'Description'=>'string|required',
        ]);

        $image = $request->file('LibelleImage');
        $data= $request->all();

        if($image != null) {
            $base64Image = base64_encode(file_get_contents($image));
            $data['LibelleImage'] = $base64Image;
        } else {
            $data['LibelleImage'] = null;
        }
        
        $status=Slider::create($data);

        if($status){
            request()->session()->flash('success','Bannière ajoutée avec succès');
        }
        else{
            request()->session()->flash('error','Une erreur s\'est produite, veuillez réessayer !');
        }
        return redirect()->route('slider.index');


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
        
        $slider=Slider::findOrFail($id);
        return view('backend.slider.edit')->with('slider',$slider);
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
        $slider=Slider::findOrFail($id);
        $this->validate($request,[
            'Description'=>'string|required',
        ]);
        $image = $request->file('LibelleImage');
        $sliderArray = $slider->toArray();
        $data= $request->all();
        if($image != null) {
            $base64Image = base64_encode(file_get_contents($image));
            $data['LibelleImage'] = $base64Image;
        } else {
            $data['LibelleImage'] = $sliderArray['LibelleImage'];
        }
    
        $status=$slider->fill($data)->save();
        if($status){
            request()->session()->flash('success','Bannière mise à jour avec succès');
        }
        else{
            request()->session()->flash('error','Une erreur s\'est produite, veuillez réessayer !');
        }
        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider=Slider::findOrFail($id);
        $status=$slider->delete();
        
        if($status){
            request()->session()->flash('success','Bannière supprimée avec succès');
        }
        else{
            request()->session()->flash('error','Une erreur s\'est produite, veuillez réessayer !');
        }
        return redirect()->route('slider.index');
    }
}
