<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\AddProduct;
use RealRashid\SweetAlert\Facades\Alert;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $login_id = $request->session()->get('login_id');
        if($login_id)
        {
            $cart_item_count = Cart::with('addproduct')->where([['user_id','=', $login_id,],['cart_status','=','Pending']])->count();
            if($cart_item_count==0)
            {
                Alert::error('Sorry', 'The cart is empety');
                return redirect('/');
            }
            $cart_view = Cart::with('addproduct')->where([['user_id','=', $login_id,],['cart_status','=','Pending']])->get();
            $data = compact('cart_view','login_id','cart_item_count');
            return view('cart.index')->with($data);
        }
        else
        {
            return redirect('/customer/sign-in');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,Cart $cart, $id)
    {
        $quantityvalue = $request['qtybutton'];

        $login_id = $request->session()->get('login_id');

        if(!is_null($login_id))
        {
            // $product = Cart::find($id)->value('product_id');
            $myField = Cart::where('product_id', $id)->first();



            // echo '<pre>';
            // print_r($myField);
            // die;

            if(!is_null($myField))
            {

                $quantity =  $myField->product_quantity;
                $addquantity = $quantity+$quantityvalue;

                 $myField->user_id = $login_id;
                 $myField->product_id = $id;
                 $myField->product_quantity = $addquantity;

                 $myField->save();
                return redirect('/');
            }
            else
            {
                $cartitem = new Cart;
                $cartitem->user_id = $login_id;
                $cartitem->product_id = $id;
                $cartitem->product_quantity = $quantityvalue;

                $cartitem->save();
                return redirect('/');
            }

        }
        else
        {
            return redirect('customer/sign-in');
        }
    }
    public function cartquantity(Request $request,Cart $cart)
    {

        $prod_id = $request->post('prod_id');
        $inc_btn = $request->post('inc_btn');
    }
    public function cartconfirm(Request $request,Cart $cart, $id)
    {
        $cart_confirm = Cart::where("user_id","=",$id)->get();
        foreach ($cart_confirm as $user)
            {
                // var_dump($user->cart_status);
                $user->cart_status = "Confirm";
                $user->save();

            }
            return redirect('customer/checkout');
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
    public function show(Request $request,Cart $cart, $id)
    {



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
    public function destroy(Request $request,Cart $cart, $id)
    {
        // echo $id;
        $cart_item_del = Cart::find($id);
        $cart_item_del->delete();
        return redirect('/customer/cart');
    }


    public function test()
    {
        $data = Cart::with('addproduct')->first();
        // $data = AddProduct::with('cart')->first();
        // dd( $data->product_id->product_name);
        dd($data->toArray());


    }

}
