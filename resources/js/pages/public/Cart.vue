<script setup lang="ts">
interface Product {
    id: number;
    nombre: string;
    precio: string;
    imagen: string | null;
}

interface CartItem {
    id: number;
    cantidad: number;
    product: Product;
}

interface Cart {
    id: number;
    items: CartItem[];
}

defineProps<{
    cart: Cart;
}>();
</script>

<template>
    <div class="min-h-screen bg-zinc-950 text-white">
        <div class="mx-auto max-w-6xl px-6 py-24">
            <!-- Header -->
            <div class="mb-12">
                <p
                    class="text-xs font-semibold tracking-[0.3em] text-emerald-500 uppercase"
                >
                    DirtFlow X / Cart
                </p>

                <h1 class="mt-3 text-5xl font-black tracking-tight">
                    Tu selección
                </h1>

                <p class="mt-4 max-w-xl text-zinc-500">
                    Las máquinas que elegiste para tu próximo ride.
                </p>
            </div>

            <!-- Empty cart -->
            <div
                v-if="cart.items.length === 0"
                class="border border-zinc-800 bg-zinc-900/40 px-8 py-20 text-center"
            >
                <p class="text-sm tracking-[0.2em] text-zinc-600 uppercase">
                    Cart / 00
                </p>

                <h2 class="mt-4 text-2xl font-bold">
                    Tu carrito está vacío
                </h2>

                <p class="mx-auto mt-3 max-w-md text-zinc-500">
                    Todavía no has seleccionado ninguna máquina.
                </p>

                <a
                    href="/bikes"
                    class="mt-8 inline-flex border border-emerald-500 px-6 py-3 text-sm font-semibold text-emerald-500 transition hover:bg-emerald-500 hover:text-black"
                >
                    Explorar bicicletas
                </a>
            </div>

            <!-- Cart -->
            <div v-else class="grid gap-8 lg:grid-cols-[1fr_360px]">
                <!-- Items -->
                <div class="space-y-4">
                    <article
                        v-for="item in cart.items"
                        :key="item.id"
                        class="flex gap-6 border border-zinc-800 bg-zinc-900/60 p-5"
                    >
                        <div
                            class="flex h-32 w-32 shrink-0 items-center justify-center overflow-hidden bg-zinc-950"
                        >
                            <img
                                v-if="item.product.imagen"
                                :src="item.product.imagen"
                                :alt="item.product.nombre"
                                class="h-full w-full object-cover"
                            />

                            <span
                                v-else
                                class="text-xs tracking-widest text-zinc-700 uppercase"
                            >
                                DirtFlow
                            </span>
                        </div>

                        <div class="flex flex-1 flex-col justify-between">
                            <div>
                                <p
                                    class="text-xs tracking-[0.2em] text-emerald-500 uppercase"
                                >
                                    Machine
                                </p>

                                <h2 class="mt-1 text-xl font-bold">
                                    {{ item.product.nombre }}
                                </h2>
                            </div>

                            <div
                                class="flex items-end justify-between gap-4"
                            >
                                <div>
                                    <p class="text-xs text-zinc-600">
                                        Cantidad
                                    </p>

                                    <p class="font-semibold">
                                        {{ item.cantidad }}
                                    </p>
                                </div>

                                <p class="text-lg font-bold">
                                    ₡{{ item.product.precio }}
                                </p>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Summary -->
                <aside
                    class="h-fit border border-zinc-800 bg-zinc-900/60 p-6"
                >
                    <p
                        class="text-xs font-semibold tracking-[0.25em] text-zinc-500 uppercase"
                    >
                        Order summary
                    </p>

                    <div
                        class="mt-6 flex items-center justify-between border-b border-zinc-800 pb-4"
                    >
                        <span class="text-zinc-500">Productos</span>

                        <span class="font-semibold">
                            {{ cart.items.length }}
                        </span>
                    </div>

                    <div
                        class="mt-4 flex items-center justify-between text-lg"
                    >
                        <span>Total</span>

                        <span class="font-black text-emerald-500">
                            Próximamente
                        </span>
                    </div>

                    <button
                        disabled
                        class="mt-8 w-full cursor-not-allowed border border-zinc-800 px-5 py-3 text-sm font-semibold text-zinc-700"
                    >
                        Proceder al checkout
                    </button>

                    <a
                        href="/bikes"
                        class="mt-4 block text-center text-sm text-zinc-500 transition hover:text-emerald-500"
                    >
                        ← Seguir comprando
                    </a>
                </aside>
            </div>
        </div>
    </div>
</template>