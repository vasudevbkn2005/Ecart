<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function index(){
        $data= Product::all();
        return view('product',['products'=>$data]);   
    }
    function detail($id){
        $data= Product::find($id);
        return view('detail',['product'=>$data]);
    }
    function search(Request $request)
    {
        // return $request->input();
       $data=Product::where('name','like','%'. $request->input('query').'%')->get();
    //    dd($data);
       return view('search',['products'=>$data]);
    }
    function add(Request $request){
        if($request->session()->has('user')){
            $cart=new Cart;
            $cart->user_id= $request->session()->get('user')['id'];
            $cart->product_id=$request->product_id;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }
}
