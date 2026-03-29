<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * List all active products.
     */
    public function index(): View
    {
        $products = Product::active()->orderBy('sort_order')->get();

        return view('products.index', compact('products'));
    }

    /**
     * Show a single product by slug.
     */
    public function show(string $slug): View
    {
        $product = Product::active()->where('slug', $slug)->firstOrFail();

        return view('products.show', compact('product'));
    }
}
