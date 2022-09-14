<?php

namespace App\Http\Controllers;

use App\Models\AddProduct;
use Illuminate\Http\Request;

class AddProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AddProduct $addProduct)
    {
            // $product_edit = AddProduct::find($id);
            // if(!is_null($product_edit))
            // {
            //     $data = compact('product_edit');
            //     return view('adminpanel.add-product')->with($data);
            // }

            return view('adminpanel.add-product');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

            $request->validate([
                'product_name'=> 'required',
                'product_category'=> 'required',
                'product_tag'=> 'required',
                'product_type'=> 'required',
                'product_stock'=> 'required',
                'product_price'=> 'required',
                'product_price_off'=> 'numeric|between:0,50.00',
                'product_description'=> 'required',
                'product_image'=> 'required|image'
             ]);
             $file= null;
             if(request()->hasFile('product_image'))
             {
                 // $file = $request->file('product_image')->store('product');
                 $file = $request->file('product_image');
                 $filename=time().'.'.$file->getClientOriginalExtension();
                 $file->move('images/add-product', $filename);
             }
             // dd($file);


             $add_product = new AddProduct;
             $add_product->product_name = $request['product_name'];
             $add_product->product_category = $request['product_category'];
             $add_product->product_tag = $request['product_tag'];
             $add_product->product_type = $request['product_type'];
             $add_product->product_stock = $request['product_stock'];
             $add_product->product_price = $request['product_price'];
             $add_product->product_price_off = $request['product_price_off'];
             $add_product->product_other_info = $request['product_other_info'];
             $add_product->product_description = $request['product_description'];
             $add_product->product_image = $filename;

             // echo '<pre>';
             // print_r($file);
             // die;
             $product= $add_product->save();

             if($product)
             {
                 return back()->with('productadd','Product Add Successfully');
             }
             else
             {
                 return back()->with('productfail','Opps: Error');
             }


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
     * @param  \App\Models\AddProduct  $addProduct
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, AddProduct $addProduct)
    {
        $searchkey = $request['search'] ?? " ";

        if($searchkey!="")
        {
            $displayproduct = AddProduct::where('product_name','LIKE',"%$searchkey%")->paginate(5);

        }
        else
        {
            $displayproduct = AddProduct::paginate(5);
        }

        $data = compact('displayproduct','searchkey');
        return view('adminpanel.product-view')->with($data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AddProduct  $addProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(AddProduct $addProduct, $id)
    {
        $product_edit = AddProduct::find($id);
        $data = compact('product_edit');
        return view('adminpanel.edit-product')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AddProduct  $addProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddProduct $addProduct,$id)
    {
        $product_update = AddProduct::find($id);
        if(!is_null($product_update))
        {

             $file= null;
             if(request()->hasFile('product_image'))
             {
                 // $file = $request->file('product_image')->store('product');
                 $file = $request->file('product_image');
                 $filename=time().'.'.$file->getClientOriginalExtension();
                 $file->move('images/add-product', $filename);
             }
             else
             {
                $filename = $product_update->product_image;
             }
            //  dd($filename);
            $product_update->product_name = $request['product_name'];
            $product_update->product_category = $request['product_category'];
            $product_update->product_tag = $request['product_tag'];
            $product_update->product_type = $request['product_type'];
            $product_update->product_stock = $request['product_stock'];
            $product_update->product_price = $request['product_price'];
            $product_update->product_price_off = $request['product_price_off'];
            $product_update->product_other_info = $request['product_other_info'];
            $product_update->product_description = $request['product_description'];
            $product_update->product_image = $filename;

            // echo '<pre>';
            // print_r($product_update->all());
            // die;
            $product= $product_update->save();

            if($product)
            {
                return redirect('admin/products-view');
            }
            else
            {
                return back()->with('productfail','Opps: Error');
            }

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AddProduct  $addProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddProduct $addProduct, $id)
    {
        $product_id= AddProduct::find($id);

        if(!is_null($product_id))
        {
            $product_id->delete();
            return redirect('/admin/products-view');
        }
    }
}
