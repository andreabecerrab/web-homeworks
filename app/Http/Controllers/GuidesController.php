<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guide;
use App\Product;
use App\GuidesProduct;

class GuidesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guides = Guide::all();
        return view('guides.index', ['guides' => $guides]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('guides.create',['products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arr = $request->input();
        $guide = new Guide();
        $guide -> name= $arr['name'];
        $guide -> type = $arr['type'];
        $guide -> description = $arr['description'];
        $guide -> save();

        $product = Product::find($request->get('products'));
        $guide->products()->attach($product);


        return redirect()->route('guides.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Guide $guide)
    {
        return view('guides.show', ['guide' => $guide]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Guide $guide)
    {
        $products = Product::all();
        return view('guides.edit', ['guide' => $guide, 'products' => $products]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guide $guide)
    {
        $arr = $request->input();
        $guide -> name= $arr['name'];
        $guide -> type = $arr['type'];
        $guide -> description = $arr['description'];
        $guide->save();

        $product = Product::find($request->get('products'));
        $guide->products()->sync($product);


        return redirect()->route('guides.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guide $guide)
    {
        $guide->delete();
        return redirect()->route('guides.index');
    }
}
