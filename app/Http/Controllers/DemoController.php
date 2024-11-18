<?php

namespace App\Http\Controllers;
use App\Models\Brand;
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
}
