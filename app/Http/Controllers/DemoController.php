<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    function BrandAction(Request $request){
      $brand =  Brand::create($request->input());
      return $brand;
    }
}
