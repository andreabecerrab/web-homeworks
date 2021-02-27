<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instruction;
use App\Product;

class InstructionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructions = Instruction::all();
        return view('instructions.index', ['instructions' => $instructions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product)
    {
        return view('instructions.create');
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
        $instruction = new Instruction();
        $instruction -> product_id = $arr['id'];
        $instruction -> instruction = $arr['instruction'];
        $instruction -> save();

        return redirect()->route('instructions.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Instruction $instruction)
    {
        $product = Product::find($instruction -> product_id)->name;
        return view('instructions.show', ['instruction' => $instruction, 'product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Instruction $instruction)
    {
        return view('instructions.edit', ['instruction' => $instruction]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instruction $instruction)
    {
        $arr = $request->input();
        $instruction -> instruction= $arr['instruction'];
        $instruction->save();
        return redirect()->route('instructions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instruction $instruction)
    {
        $instruction->delete();
        return redirect()->route('instructions.index');
    }
}
