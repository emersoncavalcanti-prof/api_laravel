<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Product::all();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        Product::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Product::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request,$id)
    {
        $data = $request->all();
       
        $product = Product::find($id);

        if(!$product){
            return response()->json(['message' => 'Produto não encontrado'], Response::HTTP_NOT_FOUND);
        }
        
        $response = $product->update($data);
        
        if(!$response){
            return response()->json(['message' => 'Erro ao atualizar'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response()->json(['message' => 'Produto atualizado com sucesso'], Response::HTTP_OK);
    
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
    }
}
