<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductsController extends Controller
{   
    public function index()
    {
        $products = Db::table('products')
        ->select("id", "product_name", "product_category", "product_description", "product_price", "product_picture")
        ->get();
        return view('all-products')->with('products', $products);
    }
    public function burgers()
    {
        $products = Db::table('products')
        ->where("product_category", "Burgers")
        ->select("id", "product_name", "product_category",  "product_description", "product_price", "product_picture")
        ->get();
        return view('burgers')->with('products', $products);
    }
    public function breakfast()
    {
        $products = Db::table('products')
        ->where("product_category", "Breakfast")
        ->select("id", "product_name", "product_category",  "product_description", "product_price", "product_picture")
        ->get();
        return view('breakfasts')->with('products', $products);
    }
    public function ricemeals()
    {
        $products = Db::table('products')
        ->where("product_category", "Rice Meals")
        ->select("id", "product_name", "product_category",  "product_description", "product_price", "product_picture")
        ->get();
        return view('ricemeals')->with('products', $products);
    }
    public function pasta()
    {
        $products = Db::table('products')
        ->where("product_category", "Pasta")
        ->select("id", "product_name", "product_category",  "product_description", "product_price", "product_picture")
        ->get();
        return view('pasta')->with('products', $products);
    }
    public function sadwiches()
    {
        $products = Db::table('products')
        ->where("product_category", "Sandwiches")
        ->select("id", "product_name", "product_category",  "product_description", "product_price", "product_picture")
        ->get();
        return view('sandwiches')->with('products', $products);
    }
    public function desserts()
    {
        $products = Db::table('products')
        ->where("product_category", "Desserts")
        ->select("id", "product_name", "product_category",  "product_description", "product_price", "product_picture")
        ->get();
        return view('desserts')->with('products', $products);
    }
    public function chicken()
    {
        $products = Db::table('products')
        ->where("product_category", "Chicken")
        ->select("id", "product_name", "product_category",  "product_description", "product_price", "product_picture")
        ->get();
        return view('chicken')->with('products', $products);
    }
    public function bundle(){
        $products = Db::table('products')
        ->where("product_category", "Bundles")
        ->select("id", "product_name", "product_category",  "product_description", "product_price", "product_picture")
        ->get();
        return view('bundles')->with('products', $products);
    }
    public function show($productid){
        $products = Db::table('products')
        ->where("id", $productid)
        ->select("id", "product_name", "product_category",  "product_description", "product_price", "product_picture")
        ->get();
        return view('order')->with('products', $products);
    }
}
