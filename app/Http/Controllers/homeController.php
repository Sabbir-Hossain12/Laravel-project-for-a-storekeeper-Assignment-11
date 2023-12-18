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

    function  delete()
    {
        return redirect()->route('home');
    }
}
