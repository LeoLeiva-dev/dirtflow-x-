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
        return $this->catalog($request, 'bicicletas', 'public/Bikes/Index');
    }

    public function accessories(Request $request): Response
    {
        return $this->catalog($request, 'accesorios', 'public/Accessories/Index');
    }

    private function catalog(
        Request $request,
        string $rootSlug,
        string $view,
    ): Response {
        $rootCategory = Category::where('slug', $rootSlug)->firstOrFail();

        $categoryIds = $this->getCategoryIds($rootCategory);

        $query = Product::with(['category', 'inventory'])
            ->where('activo', true)
            ->whereIn('category_id', $categoryIds);

        if ($request->filled('category')) {
            $category = Category::where('slug', $request->category)
                ->whereIn('id', $categoryIds)
                ->first();

            if ($category) {
                $query->where('category_id', $category->id);
            }
        }

        $products = $query->get();

        return Inertia::render($view, [
            'products' => $products,
        ]);
    }

    private function getCategoryIds(Category $category): array
    {
        $ids = [$category->id];

        $children = Category::where('parent_id', $category->id)->get();

        foreach ($children as $child) {
            $ids = array_merge($ids, $this->getCategoryIds($child));
        }

        return $ids;
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
