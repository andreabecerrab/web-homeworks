<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use App\Product;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::all();
        $products= Product::all();
        return view('recipes.index', [
            'recipes' => $recipes,
            'products'=> $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $recipes = Recipe::all();
        $products= Product::all();
       
        return view('recipes.create', [
            'recipes' => $recipes,
            'products'=> $products
        ]);

     
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
        $recipe = new Recipe();
        $recipe->name = $arr['name'];
        
        //$recipe->product_id = $arr['products[]'];
        $recipe->ingredients = $arr['ingredients'];
        $recipe->body = $arr['body'];
        $recipe->save();
        
        $product = Product::find($request->get('products'));
        $recipe->products()->attach($product);
        
        return redirect()-> route('recipes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        return view('recipes.show', ['recipe' => $recipe]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        $products= Product::all();

        return view('recipes.edit', [
            'recipe' => $recipe,
            'products'=> $products
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        $arr = $request->input();
        $recipe->name = $arr['name'];
        $recipe->product_id = $arr['product_id'];
        $recipe->ingredients = $arr['ingredients'];
        $recipe->body = $arr['body'];
        $recipe->save();

        // $product= Product::find($request->get('products'))
        // $recipe->products()->sync($product);

        return redirect()->route('recipes.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $recipe= Recipe::find($id);
        $recipe->delete();
        return redirect()->route('recipes.index');
    }
}
