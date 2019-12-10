<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductsController extends Controller
{   
    public function index()
    {
        $products = Db::table('products')
        ->select("product_name", "product_category", "product_description", "product_price", "product_picture")
        ->get();
        return view('all-products')->with('products', $products);
    }
    public function burgers()
    {
        $products = Db::table('products')
        ->where("product_category", "Burgers")
        ->get();
        return view('burgers')->with('products', $products);
    }
    public function breakfast()
    {
        $products = Db::table('products')
        ->where("product_category", "Breakfast")
        ->get();
        return view('breakfasts')->with('products', $products);
    }
    public function ricemeals()
    {
        $products = Db::table('products')
        ->where("product_category", "Rice Meals")
        ->get();
        return view('ricemeals')->with('products', $products);
    }
    public function pasta()
    {
        $products = Db::table('products')
        ->where("product_category", "Pasta")
        ->get();
        return view('pasta')->with('products', $products);
    }
    public function sadwiches()
    {
        $products = Db::table('products')
        ->where("product_category", "Sandwiches")
        ->get();
        return view('sadwiches')->with('products', $products);
    }
    public function desserts()
    {
        $products = Db::table('products')
        ->where("product_category", "Desserts")
        ->get();
        return view('desserts')->with('products', $products);
    }
    public function chicken()
    {
        $products = Db::table('products')
        ->where("product_category", "Chicken")
        ->get();
        return view('chicken')->with('products', $products);
    }
    public function bundle(){
        $products = Db::table('products')
        ->where("product_category", "Bundles")
        ->get();
        return view('bundles')->with('products', $products);
    }
}
