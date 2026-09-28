<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class CartController extends Controller
{
    public function index(Request $request): Response
    {
        if ($request->user()) {
            $cart = Cart::firstOrCreate([
                'user_id' => $request->user()->id,
            ]);
        } else {
            $sessionId = $request->session()->getId();

            $cart = Cart::firstOrCreate([
                'session_id' => $sessionId,
            ]);
        }

        $cart->load('items.product');

        return Inertia::render('public/Cart', [
            'cart' => $cart,
        ]);
    }

    public function add(Request $request, int $productId): RedirectResponse
    {
        $validated = $request->validate([
            'cantidad' => ['required', 'integer', 'min:1'],
        ]);

        $product = Product::with('inventory')
            ->where('activo', true)
            ->findOrFail($productId);

        if (! $product->inventory) {
            return back()->withErrors([
                'cantidad' => 'Este producto no tiene inventario disponible.',
            ]);
        }

        if ($request->user()) {
            $cart = Cart::firstOrCreate([
                'user_id' => $request->user()->id,
            ]);
        } else {
            $cart = Cart::firstOrCreate([
                'session_id' => $request->session()->getId(),
            ]);
        }

        /** @var CartItem|null $item */
        $item = CartItem::where('cart_id', $cart->id)
            ->where('product_id', $product->id)
            ->first();

        $currentQuantity = 0;

        if ($item) {
            $currentQuantity = (int) $item->getAttribute('cantidad');
        }

        $newQuantity = $currentQuantity + $validated['cantidad'];

        $availableStock = (int) $product->inventory->getAttribute('cantidad');

        if ($newQuantity > $availableStock) {
            return back()->withErrors([
                'cantidad' => "Solo hay {$availableStock} unidades disponibles.",
            ]);
        }

        if ($item) {
            $item->update([
                'cantidad' => $newQuantity,
            ]);
        } else {
            $cart->items()->create([
                'product_id' => $product->id,
                'cantidad' => $validated['cantidad'],
            ]);
        }

        return back();
    }
}
