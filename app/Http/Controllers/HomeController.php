<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    public function index(): Response
    {
        $bikesCategory = Category::where('slug', 'bicicletas')->firstOrFail();

        $categoryIds = $this->getCategoryIds($bikesCategory);

        $featuredBikes = Product::with(['category', 'inventory'])
            ->where('activo', true)
            ->where('destacado', true)
            ->whereIn('category_id', $categoryIds)
            ->get();

        return Inertia::render('public/Home', [
            'featuredBikes' => $featuredBikes,
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
}
