<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
<<<<<<< HEAD
use App\Instruction;
=======
use App\Guide;
use App\GuidesProduct;
>>>>>>> 9edffdd04eb0259a2ebce6594a4564b7f74b4efc

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guides = Guide::all();
        return view('products.create', ['guides' => $guides]);
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
        $product = new Product();
        $product -> name= $arr['name'];
        $product -> category = $arr['category'];
        $product -> origin = $arr['origin'];
        $product -> description = $arr['description'];
        $product -> save();

<<<<<<< HEAD
        $instruction = new Instruction();
        $instruction->instruction = $arr['instruction'];

        $product->instructions()->save($instruction);

=======
        $guides = Guide::all();
        foreach ($guides as $item){
            if (isset($_POST[$item->name])) {
                $guideProduct = new GuidesProduct();
                $guideProduct -> product_id = $product -> id;
                $guideProduct -> guide_id = $item -> id;
                $guideProduct -> save();
            }
        }
>>>>>>> 9edffdd04eb0259a2ebce6594a4564b7f74b4efc
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {   
        return view('products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $arr = $request->input();
        $product -> name= $arr['name'];
        $product -> category = $arr['category'];
        $product -> origin = $arr['origin'];
        $product -> description = $arr['description'];

        if($product -> instructions != null){
            $product -> instructions -> instruction = $arr['instruction'];
        }else{
            $instruction = new Instruction();
            $instruction->instruction = $arr['instruction'];
            $product->instructions()->save($instruction);
        }



        $product->push();
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
