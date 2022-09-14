<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddProduct;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $query = AddProduct::query();
        echo $sorting = $request->sorting;
        if($request->ajax())
        {
            $sortingdata = $query->where([['product_tag','=','Sale']])->get();
            dd( $sortingdata);
            return response()->json(['sortingdata'=>$sortingdata]);
        }
        $all_product =$query->get();
        $data = compact('all_product');
        return view('product/index')->with($data);
    }
    public function productdetails(Request $request, AddProduct $addProduct, $id)
    {

        $single_product= AddProduct::find($id);
        $like_product = AddProduct::where([['product_tag','=','Sale']])->orwhere([['product_tag','=','Both']])->get();
        // dd($like_product);
        $data = compact('single_product','like_product');
        return view('product/productdetails')->with($data);
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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
