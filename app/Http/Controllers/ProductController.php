<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public  function  index(){
        $context = ['products' => Product::all()];
        return view('index', $context);
    }

    public function detail(Product $product) {
        return view('detail', ['product' => $product]);
    }










    public  function  create(){
        $products=[
            ['name'=>'product_1','price'=>1000,'description'=>'desc1'],
            ['name'=>'product_2','price'=>2000,'description'=>'desc2'],
            ['name'=>'product_3','price'=>3000,'description'=>'desc3','available'=>0],
            ['name'=>'product_4','price'=>4000,'description'=>'desc4'],
            ['name'=>'product_5','price'=>5000,'description'=>'desc5'],
            ['name'=>'product_6','price'=>6000,'description'=>'desc6','available'=>0]
        ];
        foreach ($products as $product){
            Product::create($product);
        }
        dd('created');
    }
}
