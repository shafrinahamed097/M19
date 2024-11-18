<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    function BrandInsert(Request $request){
      $brand =  Brand::create($request->input());
      return $brand;
    }

    function BrandUpdate(Request $request){
        $brand = Brand::where('id', $request->id)
        ->update($request->input());
        return $brand;
    }

    
    function UpdateOrCreate(Request $request){
        $brand = Brand::updateOrCreate(
            ['brandName'=>$request->brandName],
            $request->input()
        );
        return $brand;
    }

    function BrandDelete(Request $request){
        return Brand::where('id', '=', $request->id)->delete();

    }

    function IncrementDecrement(Request $request){
        // $products = Product::where('id',1)->increment('price',100);
        $products = Product::where('id',1)->decrement('price',100);
        return $products;

    }
}
