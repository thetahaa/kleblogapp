<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;

use function Pest\Laravel\json;

class ProductController extends Controller
{
    

    public function index(Request $request)
    {
        $token = session('token');
        if (!$token) {
            return redirect('/')->with('error', 'Lütfen giriş yapınız.');
        }

        // API'den ürün verilerini alıyoruz
        $response = Http::timeout(1000)->withToken($token)->get('http://api_nginx/api/products');
        $products = $response->json();
        $productsData = isset($products['data']) ? $products['data'] : [];

        // Sayfa başına gösterilecek ürün sayısı
        $perPage = 8;

        // Mevcut sayfa numarasını alıyoruz
        $currentPage = $request->input('page', 1); // Sayfa numarasını request parametresinden alıyoruz.

        // Ürünleri sayfalıyoruz
        $currentPageProducts = array_slice($productsData, ($currentPage - 1) * $perPage, $perPage);

        // LengthAwarePaginator oluşturuyoruz
        $productsPaginated = new LengthAwarePaginator(
            $currentPageProducts,
            count($productsData),
            $perPage,
            $currentPage,
            ['path' => LengthAwarePaginator::resolveCurrentPath(), 'query' => $request->query()]
        );

        // Sayfa numarasını Blade'a gönderiyoruz
        return view('product.index', [
            'products' => $productsPaginated,
            'page' => $currentPage  // Sayfa numarasını buradan Blade'a geçiyoruz
        ]);
    }



    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'product_name' => 'required|string|max:255',
        //     'product_price' => 'required|numeric|max:999999|min:1',
        //     'description' => 'required|string|max:1000',
        // ], [
        //     'product_price.max' => 'Fiyat 6 haneliden fazla olamaz.',
        // ]);

        $response = Http::withToken(session('token'))->post('http://api_nginx/api/products', [
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'description' => $request->description,
        ]);

        if ($response->successful()) {
            return redirect()->route('product.index')->with('status', 'Ürün Başarıyla Eklendi!');
        }

        return back()->withErrors(['error' => 'Ürün bulunamadı veya API isteği başarısız oldu.']);
        
    }

    public function show($id)
    {
        $response = Http::timeout(1000)->withToken(session('token'))->get("http://api_nginx/api/products/".$id);
        if ($response->successful()) {
            $product = $response->json();
            return view('product.show', [
                'product' => $product['data']
            ]);
        }

        return back()->withErrors(['error' => 'Ürün bulunamadı veya API isteği başarısız oldu.']);
    }

    public function edit($id)
    {
       
        $response = Http::timeout(1000)->withToken(session('token'))->get("http://api_nginx/api/products/".$id);
        if ($response->successful()) {
            $product = $response->json();
            return view('product.edit', [
                'product' => $product['data']
            ]);
        }
        return back()->withErrors(['error' => 'Ürün bulunamadı veya API isteği başarısız oldu.']);
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'product_name' => 'required|string|max:255',
        //     'product_price' => 'required|numeric|max:999999|min:1', // 6 haneli kısıtlama
        //     'description' => 'required|string|max:1000',
        // ], [
        //     'product_price.max' => 'Fiyat 6 haneliden fazla olamaz.', // Özel hata mesajı
        // ]);

        $response = Http::withToken(session('token'))->put("http://api_nginx/api/products/{$id}", [
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'description' => $request->description,
        ]);

        if ($response->successful()) {
            return redirect()->route('product.index')->with('status', 'Ürün Başarıyla Güncellendi.');
        }

        return redirect('/product')->with('status', 'Ürün Başarıyla Güncellendi');
    }

    public function destroy(Request $request, $id)
    {
        $response = Http::withToken(session('token'))->delete("http://api_nginx/api/products/{$id}");

        if ($response->successful()) {
            return redirect()->route('product.index')->with('status', 'Ürün Başarıyla Silindi.');
        }

        return back()->withErrors(['error' => 'Ürün silinemedi.']);

        // $product->delete();
        // return redirect('/product')->with('status', 'Ürün Başarıyla Silindi');
    }
}
