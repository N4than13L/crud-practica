<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importando el Modelo
use App\Models\Product;

class ProductsController extends Controller
{

    public function index(Product $products)
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Inicializando el modelo como objeto (de productos).
        $product = new Product();

        // Agregando productos 
        $product->title = $request->title;
        $product->country = $request->country;
        $product->price = $request->price;

        $product->save();

        return redirect()->route('productos.index');
    }

    public function edit($id)
    {
        $product = Product::find($id);

        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->update($request->all());

        return redirect()->route('productos.index');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('productos.index');
    }
}
