<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function get()
    {
        return csrf_token();
        return Products::get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->validate([
            'product_name' => 'required|max:255',
            'product_price' => 'required|max:255',
            'product_desc' => 'required',
        ]);
        try {
            Products::create($data);
            return response()->json("Data is Create Successfully", 200);
        } catch (\Throwable $th) {
            return response()->json("Data is Not Create Successfully", 200);
            //throw $th;
        }
    }

    public function show(Products $products)
    {
        return $products->first();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        $data = [
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'product_desc' => $request->product_desc,
        ];
        $products->update($data);
        return response()->json("Data is Updated Successfully", 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        $products->delete();
        return response()->json("Data is Updated Successfully", 200);
    }
}
