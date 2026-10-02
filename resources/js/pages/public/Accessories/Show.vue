<script setup lang="ts">
import { Head, router } from '@inertiajs/vue3';
import { computed, ref } from 'vue';
import Footer from '@/components/home/Footer.vue';
import Navbar from '@/components/home/Navbar.vue';

interface Product {
    id: number;
    nombre: string;
    slug: string;
    descripcion: string | null;
    precio: string;
    sku: string;
    imagen: string | null;
    activo: boolean;
    category: {
        id: number;
        nombre: string;
        slug: string;
    };
    inventory: {
        cantidad: number;
        stock_minimo: number;
    };
}

const props = defineProps<{
    product: Product;
}>();

const quantity = ref(1);

const maxStock = computed(() => props.product.inventory.cantidad);

const increaseQuantity = () => {
    if (quantity.value < maxStock.value) {
        quantity.value++;
    }
};

const decreaseQuantity = () => {
    if (quantity.value > 1) {
        quantity.value--;
    }
};

const addToCart = () => {
    if (maxStock.value <= 0) {
        return;
    }

    router.post(`/cart/${props.product.id}`, {
        cantidad: quantity.value,
    });
};
</script>

<template>
    <Head :title="product.nombre" />

    <Navbar />

    <main class="min-h-screen bg-zinc-950 pt-24 text-white">
        <!-- Hero -->
        <section class="relative overflow-hidden">
            <div
                class="pointer-events-none absolute top-1/2 left-1/2 h-[550px] w-[550px] -translate-x-1/2 -translate-y-1/2 rounded-full bg-emerald-500/10 blur-[140px]"
            ></div>

            <div class="relative mx-auto max-w-7xl px-6 py-12">
                <!-- Navigation -->
                <div class="flex items-center justify-between">
                    <button
                        type="button"
                        @click="router.visit('/accesorios')"
                        class="text-sm tracking-[0.2em] text-zinc-500 uppercase transition hover:text-emerald-500"
                    >
                        ← Accesorios
                    </button>

                    <span class="font-mono text-xs text-zinc-600">
                        {{ product.sku }}
                    </span>
                </div>

                <!-- Product -->
                <div
                    class="grid min-h-[75vh] items-center gap-12 py-16 lg:grid-cols-2"
                >
                    <!-- Info -->
                    <div>
                        <p
                            class="text-sm font-semibold tracking-[0.35em] text-emerald-500 uppercase"
                        >
                            {{ product.category.nombre }}
                        </p>

                        <h1
                            class="mt-4 text-5xl font-black tracking-tight uppercase md:text-7xl"
                        >
                            {{ product.nombre }}
                        </h1>

                        <p
                            v-if="product.descripcion"
                            class="mt-6 max-w-xl text-lg leading-relaxed text-zinc-400"
                        >
                            {{ product.descripcion }}
                        </p>

                        <div class="mt-10">
                            <p class="text-4xl font-black">
                                ₡{{
                                    Number(product.precio).toLocaleString(
                                        'es-CR',
                                    )
                                }}
                            </p>

                            <div class="mt-3 flex items-center gap-3">
                                <span
                                    class="h-2 w-2"
                                    :class="
                                        maxStock > 0
                                            ? 'bg-emerald-500'
                                            : 'bg-red-500'
                                    "
                                ></span>

                                <span
                                    class="text-sm tracking-widest uppercase"
                                    :class="
                                        maxStock > 0
                                            ? 'text-zinc-500'
                                            : 'text-red-400'
                                    "
                                >
                                    {{
                                        maxStock > 0
                                            ? `${maxStock} unidades disponibles`
                                            : 'Agotado'
                                    }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Image -->
                    <div class="relative flex items-center justify-center">
                        <div
                            class="absolute h-[420px] w-[420px] rounded-full bg-emerald-500/10 blur-3xl"
                        ></div>

                        <img
                            :src="
                                product.imagen
                                    ? `/storage/${product.imagen}`
                                    : '/images/hero-bike.webp'
                            "
                            :alt="product.nombre"
                            class="relative max-h-[520px] w-full object-contain drop-shadow-2xl"
                        />
                    </div>
                </div>
            </div>
        </section>

        <!-- Product information -->
        <section class="border-t border-zinc-900 bg-black py-24">
            <div class="mx-auto max-w-7xl px-6">
                <div class="mb-14">
                    <p
                        class="font-mono text-xs tracking-[0.35em] text-emerald-500"
                    >
                        01 / PRODUCT INFORMATION
                    </p>

                    <h2
                        class="mt-3 text-4xl font-black tracking-tight uppercase md:text-5xl"
                    >
                        Detalles del producto
                    </h2>
                </div>

                <div
                    class="grid border-t border-l border-zinc-800 sm:grid-cols-2 lg:grid-cols-4"
                >
                    <div class="border-r border-b border-zinc-800 p-8">
                        <p
                            class="font-mono text-[10px] tracking-[0.3em] text-zinc-600 uppercase"
                        >
                            Categoría
                        </p>

                        <p class="mt-6 text-lg font-bold uppercase">
                            {{ product.category.nombre }}
                        </p>
                    </div>

                    <div class="border-r border-b border-zinc-800 p-8">
                        <p
                            class="font-mono text-[10px] tracking-[0.3em] text-zinc-600 uppercase"
                        >
                            SKU
                        </p>

                        <p class="mt-6 font-mono text-lg font-bold">
                            {{ product.sku }}
                        </p>
                    </div>

                    <div class="border-r border-b border-zinc-800 p-8">
                        <p
                            class="font-mono text-[10px] tracking-[0.3em] text-zinc-600 uppercase"
                        >
                            Disponibilidad
                        </p>

                        <p class="mt-6 text-lg font-bold">
                            {{ product.inventory.cantidad }}
                        </p>
                    </div>

                    <div class="border-r border-b border-zinc-800 p-8">
                        <p
                            class="font-mono text-[10px] tracking-[0.3em] text-zinc-600 uppercase"
                        >
                            Estado
                        </p>

                        <div class="mt-6 flex items-center gap-3">
                            <span
                                class="h-2 w-2"
                                :class="
                                    maxStock > 0
                                        ? 'bg-emerald-500'
                                        : 'bg-red-500'
                                "
                            ></span>

                            <span
                                class="text-sm font-bold tracking-wider uppercase"
                                :class="
                                    maxStock > 0
                                        ? 'text-emerald-500'
                                        : 'text-red-400'
                                "
                            >
                                {{ maxStock > 0 ? 'Disponible' : 'Agotado' }}
                            </span>
                        </div>
                    </div>
                </div>

                <div
                    v-if="product.descripcion"
                    class="mt-10 max-w-4xl border-l-2 border-emerald-500 pl-6"
                >
                    <p class="text-lg leading-relaxed text-zinc-400">
                        {{ product.descripcion }}
                    </p>
                </div>
            </div>
        </section>

        <!-- Purchase -->
        <section class="border-t border-zinc-900 bg-zinc-950 py-24">
            <div class="mx-auto max-w-7xl px-6">
                <div class="mb-14">
                    <p
                        class="font-mono text-xs tracking-[0.35em] text-emerald-500"
                    >
                        02 / GET YOUR GEAR
                    </p>

                    <h2
                        class="mt-3 text-4xl font-black tracking-tight uppercase md:text-5xl"
                    >
                        Equipa tu recorrido.
                    </h2>
                </div>

                <div
                    class="grid border border-zinc-800 lg:grid-cols-[1fr_0.7fr]"
                >
                    <!-- Product -->
                    <div
                        class="border-b border-zinc-800 p-8 md:p-12 lg:border-r lg:border-b-0"
                    >
                        <p
                            class="font-mono text-xs tracking-[0.25em] text-zinc-600 uppercase"
                        >
                            Producto seleccionado
                        </p>

                        <h3
                            class="mt-5 text-3xl font-black uppercase md:text-4xl"
                        >
                            {{ product.nombre }}
                        </h3>

                        <p
                            class="mt-4 max-w-xl text-sm leading-relaxed text-zinc-500"
                        >
                            Seleccioná la cantidad que querés y agregá el
                            producto a tu carrito.
                        </p>
                    </div>

                    <!-- Controls -->
                    <div class="flex flex-col justify-between p-8 md:p-12">
                        <div>
                            <p
                                class="font-mono text-xs tracking-[0.25em] text-zinc-600 uppercase"
                            >
                                Precio
                            </p>

                            <p class="mt-4 text-4xl font-black md:text-5xl">
                                ₡{{
                                    Number(product.precio).toLocaleString(
                                        'es-CR',
                                    )
                                }}
                            </p>
                        </div>

                        <div class="mt-12">
                            <p
                                class="font-mono text-xs tracking-[0.25em] text-zinc-600 uppercase"
                            >
                                Cantidad
                            </p>

                            <div
                                class="mt-4 flex w-fit items-center border border-zinc-800"
                            >
                                <button
                                    type="button"
                                    :disabled="quantity <= 1 || maxStock <= 0"
                                    @click="decreaseQuantity"
                                    class="flex h-12 w-12 items-center justify-center text-xl text-zinc-500 transition hover:bg-zinc-900 hover:text-white disabled:cursor-not-allowed disabled:opacity-30"
                                >
                                    −
                                </button>

                                <span
                                    class="flex h-12 w-14 items-center justify-center border-x border-zinc-800 font-mono"
                                >
                                    {{ quantity }}
                                </span>

                                <button
                                    type="button"
                                    :disabled="
                                        quantity >= maxStock || maxStock <= 0
                                    "
                                    @click="increaseQuantity"
                                    class="flex h-12 w-12 items-center justify-center text-xl text-zinc-500 transition hover:bg-zinc-900 hover:text-white disabled:cursor-not-allowed disabled:opacity-30"
                                >
                                    +
                                </button>
                            </div>
                        </div>

                        <button
                            type="button"
                            :disabled="maxStock <= 0"
                            @click="addToCart"
                            class="mt-12 w-full bg-emerald-500 px-6 py-4 text-sm font-black tracking-[0.15em] text-zinc-950 uppercase transition hover:bg-emerald-400 disabled:cursor-not-allowed disabled:bg-zinc-800 disabled:text-zinc-600"
                        >
                            {{
                                maxStock > 0
                                    ? 'Agregar al carrito'
                                    : 'Producto agotado'
                            }}
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <Footer />
</template>
