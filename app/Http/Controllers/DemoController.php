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

    function RetrievingAll(Request $request){
        $brands = Brand::all();
        return $brands;

    }

    function RetrievingSingle(Request $request){
        // $brands = Brand::first();
        $brands = Brand::find(6);
        return $brands;
    }

    function RetrievingPluck(Request $request){
        $product = Product::pluck('price', 'title');
        return $product;
    }

    function Aggregate(Request $request){
        // $products = Product::sum('price');
        // $products = Product::avg('price');
        // $products = Product::count('price');
        // $products = Product::max('price');
        $products = Product::min('price');
        return $products;

    }

    function SelectClause(Request $request){
        // $products = Product::select('title', 'price','discount','stock')->get();
        $products = Product::select('title')->distinct()->get();
        return $products;

    }

    function WhereClauses(Request $request){
        // $products = Product::where('price', '=', '2000')->get();
        // $products = Product::where('price', '!=', '2000')->get();
        // $products = Product::where('title', 'LIKE', '%NEW%')->get();
        // $products = Product::where('title', 'NOT LIKE', '%shoe%')->get();
        // $products = Product::whereBetween('price', [1,400])->get();
        // $products = Product::whereNotBetween('price', [1,400])->get();
        // $products = Product::whereIn('price', [1,120])->get();
        // $products = Product::whereNotIn('price', [1,120])->get();
        // $products = Product::whereNull('price')->get();
        // $products = Product::whereNotNull('price')->get();
        // $products = Product::whereDate('created_at', '2023-02-19')->get();
        // $products = Product::whereMonth('created_at', '02')->get();
        // $products = Product::whereYear('created_at', '2023')->get();
        // $products = Product::whereTime('created_at', '20:08:12')->get();
        $products = Product::whereColumn('updated_at','>', 'created_at')->get();
        return $products;

    }

    function OrderingGroupingLimit(Request $request){
        // $products = Product::orderBy('price', 'desc')->get();
        // $products = Product::orderBy('price', 'asc')->get();

        // $products = Product::inRandomOrder()->get();
        // $products = Product::latest()->get();
        // $products = Product::oldest()->get();
        // $products = Product::groupBy('price')->having('price', '>', 3000)->get();
        $products = Product::skip(10)->take(1)->get();
        return $products;

    }

    function Paginate(Request  $request){
        // $products = Product::simplePaginate(2);
        $products = Product::paginate(
            $perPage=10,
            $columns = ['*'],
            $pageName = 'ItemNumber'
        );
        return $products;

    }
}
