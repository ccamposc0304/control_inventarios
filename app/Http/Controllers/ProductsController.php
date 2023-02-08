<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Product;

use Illuminate\Support\Facades\Auth;



class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view("products.index",["products" => $products]);//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product;
        return view("products.create",["product" => $product]);//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Esto es como un insert
        $product = new Product;

        $product->prov_item_id = $request->prov_item_id;
        $product->title = $request->title;
        $product->pricing = $request->pricing;
        $product->user_id = Auth::user()->id;

       if ($product->save()) {
        return redirect("/products");
       }else{
        return view("/products.create");
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);//
        return view('products.show',['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view("products.edit",["product" => $product]);//
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
        // esto es una funcion que sirve para buscar un articulo por su id, es como un select
        $product = Product::find($id);

        $product->prov_item_id = $request->prov_item_id;
        $product->title = $request->title;
        $product->pricing = $request->pricing;
        $product->user_id = Auth::user()->id;

       if ($product->save()) {
        //si lo guarda, redirecciona a la pagina de mantenimiento de articulos
        return redirect("/products");
       }else{
        //si no guarda, se queda en la pantalla de edición de articulos
        return view("/products.edit",["product" => $product]);
       }//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        //Esta funcion es el equivalente a un delete al articulo con base a su id
        Product::destroy($id);

        return redirect ('/products');

    }

}
