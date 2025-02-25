<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{

    // public function showProductForm()
    // {
    //     return view('product.index');
    // }

    public function index(Request $request)
    {   
        $products = Product::all();  // Tüm ürünleri al
        if ($products->count() > 0)
        {
            // return ProductResource::collection($products);
            return response()->json([
                'data' => $products->map(function ($product){
                    return [
                        'id' => $product->id,
                        'product_name' => $product->product_name,
                        'product_price' => $product->product_price,
                        'description' => $product->description
                    ];
                }),
                'status' => true,
                'message' => 'success'
            ]);
        }
        else{
            return response()->json(['message' => 'Ürün mevcut değil'], 200);
        }

        return($products->json());



    }

    public function create()
    {
        // return view('product.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'product_name' => 'required|string|max:255',
            'product_price' => 'required|numeric|max:999999|min:1',
            'description' => 'required|string|max:1000',
        ], [
            'product_price.max' => 'Fiyat 6 haneliden fazla olamaz.',
        ]);

        if ($validator->fails())
        {
            return response()->json([
                'message' => 'Tüm alanlar zorunludur',
                'error' => $validator->messages(),
            ], 422);
        }

        $product = Product::create([
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'description' => $request->description,
        ]);

        return response()->json([
            'message' => 'Ürün Başarıyla Oluşturuldu',
            'data' => new ProductResource($product)
        ],200);
    }

    public function show(Product $product)
    {
        return new ProductResource($product);

        // return view('product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        // return view('product.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validator = Validator::make($request->all(),[
            'product_name' => 'required|string|max:255',
            'product_price' => 'required|numeric|max:999999|min:1',
            'description' => 'required|string|max:1000',
        ], [
            'product_price.max' => 'Fiyat 6 haneliden fazla olamaz.',
        ]);

        if ($validator->fails())
        {
            return response()->json([
                'message' => 'Tüm alanlar zorunludur',
                'error' => $validator->messages(),
            ], 422);
        }

        $product -> update([
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'description' => $request->description,
        ]);

        return response()->json([
            'message' => 'Ürün Başarıyla Güncellendi',
            'data' => new ProductResource($product)
        ],200);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json([
            'message' => 'Ürün Başarıyla Silindi',
        ],200);
    }
}
