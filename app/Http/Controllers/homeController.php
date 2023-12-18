<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
//    function home()
//    {
//        return view('layouts.app');
//    }
    public function display()
    {
        $products=  DB::table('products')
            ->get();

        return view("pages.home")->with('products',$products);


    }
    function addProduct()
    {
        return view('pages.addProduct');
    }

    function update()
    {
        return view('pages.update');
    }

    function  delete($id)
    {

        DB::table('products')->where('id','=',$id)->delete();
        return redirect()->route('home');
    }

    function sell()
    {
        return view('pages.sellProduct');
    }

    function store(Request $request)
    {
//      validate the form data
        $request->validate([
            'product_name' => 'required|string',
            'product_price' => 'required|numeric',
            'product_quantity' => 'required|integer',
        ]);

//        insert form data
        DB::table('products')->insert(
            [
               'product_name'=> $request->input('product_name'),
                'price'=> $request->input('product_price'),
                'quantity'=> $request->input('product_quantity')
            ]
        );

        return redirect()->route('home');
    }

    function updateProduct()
    {

    }

}
