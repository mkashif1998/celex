<?php

namespace App\Http\Controllers;

use App\Models\AddProduct;
use App\Models\Slider;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, AddProduct $addProduct)
    {
        $search = $request['search'] ?? "";

        if($search != "")
        {
            $single_product = AddProduct::where('product_name','LIKE',"%$search%")->first();
            if($single_product)
            {
                $data = compact('single_product');
                $like_product = AddProduct::where([['product_tag','=','Sale']])->orwhere([['product_tag','=','Both']])->get();

                $data = compact('single_product','like_product');
                return view('product/productdetails')->with($data);
            }
            else
            {

                Alert::error('Opps', 'The Product is Not Found');
                $featureitem = AddProduct::where('product_type','=','Features Products')->get();

                $newarrivalitem = AddProduct::where('product_type','=','New Arrivals')->get();
                $bestselleritem = AddProduct::where('product_type','=','Best Sellers')->get();
                $onsaleitem = AddProduct::where('product_type','=','On Sales')->get();
                $saleitem = AddProduct::where('product_type','=','Sale Items')->get();

                $data= Compact('featureitem','newarrivalitem','onsaleitem','saleitem','bestselleritem');
                return view('home/index')->with($data);
                }
        }
        else
        {
            $slider_data = Slider::all();

            $featureitem = AddProduct::where('product_type','=','Features Products')->get();
            $newarrivalitem = AddProduct::where('product_type','=','New Arrivals')->get();
            $bestselleritem = AddProduct::where('product_type','=','Best Sellers')->get();
            $onsaleitem = AddProduct::where('product_type','=','On Sales')->get();
            $saleitem = AddProduct::where('product_type','=','Sale Items')->get();

            $data= Compact('featureitem','newarrivalitem','onsaleitem','saleitem','bestselleritem','slider_data');
            return view('home/index')->with($data);
        }

    }

    public function ajax(Request $request, AddProduct $addProduct)
    {

        $product = AddProduct::all();
        $data = [];

        foreach($product as $item)
        {
            $data[] = $item['product_name'];
            $data[] = $item['product_price'];
        }
        return $data;
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

    }

    public function test(Request $request)
    {

        $singledata = $request->session()->get('login_id');

        $singledata = $request->session()->put('key','value');

        $singledata = $request->session()->flash('key','value');

        $session_data = $request->session()->all();

        echo '<pre>';
        print_r($session_data);

        // $session_data = $request->session()->forget();
        $session_data = $request->session()->forget('login_id');

    }
}
