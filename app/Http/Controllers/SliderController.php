<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider_view = Slider::all();
        $data = compact('slider_view');

        return view('slider.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'slider_title' => 'required',
            'slider_text' => 'required',
            'slider_picture' => 'required'
        ]);
        $file= null;
        if(request()->hasFile('slider_picture'))
        {
            // $file = $request->file('product_image')->store('product');
            $file = $request->file('slider_picture');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $file->move('images/slider', $filename);
        }
        // dd($file);
        // echo '<pre>';
        // print_r($request->all());

        $slider_data = new Slider;
        $slider_data->slider_title = $request['slider_title'];
        $slider_data->slider_text = $request['slider_text'];
        $slider_data->slider_image = $filename;

        $save_data = $slider_data->save();
        if($save_data)
        {
            return back()->with('slideradd','Slider Add Successfully');
        }
        else
        {
            return back()->with('sliderfail','Opps Something is wrong');

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function softdelete(Slider $slider, $id)
    {
        $slide_delete = Slider::find($id);

        if(!is_null($slide_delete))
        {
            $slide_delete->delete();
            return back();
        }
        else
        {

        }
    }

    public function destroy(Slider $slider)
    {
        //
    }
}
