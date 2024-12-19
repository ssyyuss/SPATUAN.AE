<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Resources\ReviewResource;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LihatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api'); // Pastikan pengguna sudah terautentikasi
        $this->middleware('role:admin')->only(['store', 'update', 'destroy']); // Hanya admin yang bisa CRUD produk
    }

    public function index(Request $request)
    {
        $query = Review::query();

        // Filter
        if ($request->has('category')) {
            $query->where('category', $request->category);
        }

        // Sorting
        if ($request->has('sort_by')) {
            $query->orderBy($request->sort_by, $request->get('sort_order', 'asc'));
        }

        // Pagination
        $products = $query->paginate(10); // 10 produk per halaman

        return ReviewResource::collection($products);
    }

    public function store(Request $request)
    {
        $product = Review::create($request->all());
        return new ReviewResource($product);
    }

    public function update(Request $request, $id)
{
    $product = Review::find($id);

    if (!$product) {
        return response()->json(['message' => 'Product not found'], 404);
    }   

    $product->update($request->all());
    
    return response()->json($product, 200);
}

    public function destroy($id)
    {
        $product = Review::findOrFail($id);
        $product->delete();
        return response()->json(['message' => 'Product deleted']);
    }

    
}