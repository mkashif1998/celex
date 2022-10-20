<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddProduct;
use App\Models\ProductReview;
use App\Models\LoginRegister;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filterdata = $request->post('sorting');
        if($filterdata != "")
        {
            if($filterdata == 0)
            {
                $search_product = AddProduct::all();
                return response()->json(['search_product'=>$search_product]);
            }
            if($filterdata == 1)
            {
                $search_product = AddProduct::orderBy('product_name')->get();
                return response()->json(['search_product'=>$search_product]);
            }
            else if($filterdata == 2)
            {
                $search_product = AddProduct::orderByDesc('product_name')->get();
                return response()->json(['search_product'=>$search_product]);
            }
            else if($filterdata == 3)
            {
                $search_product = AddProduct::orderBy('product_price','asc')->get();
                return response()->json(['search_product'=>$search_product]);
            }
            else if($filterdata == 4)
            {
                $search_product = AddProduct::orderBy('product_price','desc')->get();
                return response()->json(['search_product'=>$search_product]);
            }
            else
            {
                $search_product = AddProduct::all();
                return response()->json(['search_product'=>$search_product]);
            }

        }
        else
        {
            $all_product = AddProduct::all();
            $total_product = AddProduct::count();
        }



        $data = compact('all_product','total_product');
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
    public function productfeedback(Request $request, AddProduct $addProduct,LoginRegister $loginRegister, $id)
    {
        $user_id = $request->session()->get('login_id');
        if($user_id)
        {
            $user = LoginRegister::find($user_id);
            if($user)
            {
               

            }
            else
            {

            }
        }
        else
        {
            echo 'login error';
        }

        // $rating_star = $request['ratingstr'];
        // $rating_star = $request['feedback_comment'];

        // print_r($rating_star);
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
