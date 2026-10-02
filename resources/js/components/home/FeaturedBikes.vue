<script setup lang="ts">
interface FeaturedBike {
    id: number;
    nombre: string;
    slug: string;
    descripcion: string | null;
    precio: string;
    sku: string;
    imagen: string | null;
    activo: boolean;
    destacado: boolean;
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

defineProps<{
    products: FeaturedBike[];
}>();
</script>

<template>
    <section class="bg-zinc-900 px-6 py-24 text-white">
        <div class="mx-auto max-w-7xl">
            <!-- Header -->
            <div class="mb-12">
                <p
                    class="mb-3 text-sm font-semibold tracking-[0.3em] text-emerald-500 uppercase"
                >
                    Nuestra selección
                </p>

                <h2 class="text-4xl font-black tracking-tight md:text-5xl">
                    Bicicletas destacadas
                </h2>

                <p class="mt-4 max-w-2xl text-zinc-400">
                    Máquinas diseñadas para dominar cada sendero, desde las
                    bajadas más agresivas hasta los recorridos más técnicos.
                </p>
            </div>

            <!-- Cards -->
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                <article
                    v-for="product in products"
                    :key="product.id"
                    class="group overflow-hidden border border-zinc-800 bg-zinc-950 transition duration-300 hover:-translate-y-1 hover:border-emerald-500/50"
                >
                    <div
                        class="relative flex h-72 items-center justify-center overflow-hidden bg-zinc-950 p-8"
                    >
                        <div
                            class="pointer-events-none absolute h-40 w-40 rounded-full bg-emerald-500/10 blur-3xl transition duration-500 group-hover:bg-emerald-500/20"
                        ></div>

                        <img
                            :src="product.imagen || '/images/hero-bike.webp'"
                            :alt="product.nombre"
                            class="relative z-10 h-full w-full object-contain transition duration-500 group-hover:scale-105"
                        />
                    </div>

                    <div class="p-6">
                        <p
                            class="text-xs font-semibold tracking-wider text-emerald-500 uppercase"
                        >
                            {{ product.category.nombre }}
                        </p>

                        <h3 class="mt-3 text-2xl font-bold">
                            {{ product.nombre }}
                        </h3>

                        <p class="mt-3 text-sm leading-relaxed text-zinc-400">
                            {{ product.descripcion }}
                        </p>

                        <div
                            class="mt-6 flex items-center justify-between gap-4"
                        >
                            <span class="text-xl font-black">
                                ₡{{
                                    Number(product.precio).toLocaleString(
                                        'es-CR',
                                    )
                                }}
                            </span>

                            <a
                                :href="`/bikes/${product.slug}`"
                                class="border border-zinc-700 px-4 py-2 text-sm font-semibold transition hover:border-emerald-500 hover:text-emerald-500"
                            >
                                Ver bicicleta
                            </a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Catalog CTA -->
            <div class="mt-12 text-center">
                <a
                    href="/bikes"
                    class="inline-flex border border-zinc-700 px-6 py-3 text-sm font-semibold transition hover:border-emerald-500 hover:text-emerald-500"
                >
                    Ver todas las bicicletas
                </a>
            </div>
        </div>
    </section>
</template>
