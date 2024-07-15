<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;



class HomeController extends Controller
{

    // Metodo per visualizzare la pagina di benvenuto
    public function welcome()
    {
        return view('welcome');
    }
    public function index()
    {
        $products = Product::all();
        return view('home', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product.show', compact('product'));
    }
}
