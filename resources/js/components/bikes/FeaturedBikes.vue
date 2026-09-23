<script setup lang="ts">
interface Product {
    id: number
    nombre: string
    descripcion: string | null
    precio: string
    imagen: string | null
    category: {
        nombre: string
    }
}
import { Link } from '@inertiajs/vue3'

defineProps<{
    products: Product[]
}>()
</script>

<template>
    <section class="relative overflow-hidden px-6 py-20">

        <div class="relative z-10 mx-auto max-w-7xl">

            <!-- Encabezado -->
            <div class="mb-10 flex items-end justify-between gap-6">

                <div>
                    <p
                        class="text-xs font-semibold uppercase tracking-[0.3em] text-emerald-500"
                    >
                        DirtFlow X / Selección
                    </p>

                    <h2 class="mt-2 text-4xl font-black tracking-tight">
                        Más vendidas
                    </h2>

                    <p class="mt-3 max-w-xl text-zinc-400">
                        Las máquinas que más están llamando la atención.
                    </p>
                </div>

                <span class="hidden text-sm text-zinc-600 md:block">
                    Actualización automática
                </span>

            </div>

            <!-- Destacadas -->
            <div class="grid gap-6 lg:grid-cols-2">

                <!-- Principal -->
                <article
                    v-if="products[0]"
                    class="group relative min-h-[480px] overflow-hidden border border-zinc-800 bg-zinc-900"
                >

                    <div
                        class="pointer-events-none absolute -right-20 -top-20 h-72 w-72 rounded-full bg-emerald-500/10 blur-3xl transition duration-500 group-hover:bg-emerald-500/20"
                    ></div>

                    <div class="relative flex h-72 items-center justify-center bg-zinc-950 p-10">

                        <img
                            :src="products[0].imagen
                                ? `/storage/${products[0].imagen}`
                                : '/images/hero-bike.webp'"
                            :alt="products[0].nombre"
                            class="h-full w-full object-contain transition duration-500 group-hover:scale-105"
                        />

                    </div>

                    <div class="p-7">

                        <p class="text-xs font-semibold uppercase tracking-wider text-emerald-500">
                            {{ products[0].category.nombre }}
                        </p>

                        <h3 class="mt-2 text-2xl font-black">
                            {{ products[0].nombre }}
                        </h3>

                        <div class="mt-6 flex items-center justify-between gap-4">

                            <span class="text-xl font-black">
                                ₡{{ Number(products[0].precio).toLocaleString('es-CR') }}
                            </span>

                            <a
                                href="/bikes/trek-slash"
                                class="border border-zinc-700 px-5 py-2 text-sm font-semibold transition hover:border-emerald-500 hover:text-emerald-500"
                            >
                                Ver detalles
                            </a>

                        </div>

                    </div>

                </article>

                <!-- Secundarias -->
                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-1">

                    <article
                        v-for="product in products.slice(1, 3)"
                        :key="product.id"
                        class="group flex min-h-[220px] overflow-hidden border border-zinc-800 bg-zinc-900"
                    >

                        <div class="relative flex w-2/5 items-center justify-center bg-zinc-950 p-5">

                            <div
                                class="pointer-events-none absolute h-28 w-28 rounded-full bg-emerald-500/10 blur-2xl"
                            ></div>

                            <img
                                :src="product.imagen
                                    ? `/storage/${product.imagen}`
                                    : '/images/hero-bike.webp'"
                                :alt="product.nombre"
                                class="relative h-full w-full object-contain transition duration-500 group-hover:scale-105"
                            />

                        </div>

                        <div class="flex flex-1 flex-col justify-between p-6">

                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-emerald-500">
                                    {{ product.category.nombre }}
                                </p>

                                <h3 class="mt-2 text-lg font-bold">
                                    {{ product.nombre }}
                                </h3>
                            </div>

                            <div class="mt-5 flex items-center justify-between gap-3">

                                <span class="text-lg font-black">
                                    ₡{{ Number(product.precio).toLocaleString('es-CR') }}
                                </span>

                                <a
                                    href="#"
                                    class="text-sm font-semibold text-zinc-400 transition hover:text-emerald-500"
                                >
                                    Ver →
                                </a>

                            </div>

                        </div>

                    </article>

                </div>

            </div>

        </div>

    </section>
</template>