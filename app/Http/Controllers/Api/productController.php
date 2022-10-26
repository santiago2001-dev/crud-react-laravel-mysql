<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\product as ModelsProduct;

class productController extends Controller
{
    
    public function index()
    {
        $product = ModelsProduct::all();
        return $product;
    }

    public function store(Request $request)
    {
        $product = new ModelsProduct();
        $product->description =$request->description;
        $product->price =$request->price;
        $product->stock =$request->stock;
        $product->save();
        return json_encode(['msg'=>'regiastro eliminado de forma correcta']);
    }

  
    public function show($id)
    {
        $product = ModelsProduct::find($id);
        return $product;
    }

   
    public function update(Request $request, $id)
    {
        $description=$request->input('description');
        $price=$request ->input('price');
        $stock=$request->input('stock');
        ModelsProduct::where('id',$id)->update(
            [
                'description'=>$description,
                'price'=>$price,
                'stock'=>$stock
            ]
            );
            return json_encode(['msg'=>'registro actualizado correctamente']);
    }


    public function destroy($id)
    {
      $product =  ModelsProduct::destroy($id);
        return json_encode(['msg'=>'registro eliminado correctamente']);
    }
}
