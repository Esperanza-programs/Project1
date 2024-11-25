<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $title = "Laravel Lesson";
        $name = "Tam";
        // return view('index', compact('title'))->with('name', $name);
        $myphone = [
            'name' => 'iPhone 16',
            'year' => 2024,
            'isFav' => true
        ];
        // return view('index',[
        //     'myphone' => $myphone
        // ]);
        print_r(route('products'));
        return view('index');
    }

    public function detail($productName, $id){
        return "product's name = ".$productName.
                "<br>product's id = ".$id;
        // $phones = [
        //     'samsung' => 'Samsung',
        //     'iphone' => 'iPhone 15'
        // ];
        // return view('index', [
        //     'product'=> $phones[$productName] ?? 'Unknown Product!',
        // ]);

    }
}
