<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class BikeController extends Controller
{
    public function index(Request $request): Response
    {
        $query = Product::with(['category', 'inventory'])
            ->where('activo', true);

        if ($request->filled('category')) {

            $category = Category::with('children')
                ->where('slug', $request->category)
                ->first();

            if ($category) {

                $categoryIds = $category->children
                    ->pluck('id')
                    ->push($category->id);

                $query->whereIn('category_id', $categoryIds);
            }
        }

        $products = $query->get();

        return Inertia::render('public/Bikes/Index', [
            'products' => $products,
        ]);
    }

    public function show(string $slug): Response
    {
        $product = Product::with(['category', 'inventory'])
            ->where('slug', $slug)
            ->where('activo', true)
            ->firstOrFail();

        return Inertia::render('public/Bikes/Show', [
            'product' => $product,
        ]);
    }
}
