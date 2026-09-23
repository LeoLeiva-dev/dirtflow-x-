<template>
    <Head title="Bicicletas" />
    <navbar />

    <div class="relative min-h-screen overflow-hidden bg-zinc-950 text-white">

        <AmbientBackground />


        <!-- Encabezado -->
        <section class="relative overflow-hidden px-6 py-24">

            <div class="relative mx-auto max-w-7xl">
                <p class="text-sm font-semibold uppercase tracking-[0.3em] text-emerald-500">
                    DirtFlow X / Catalog
                </p>

                <h1 class="mt-3 text-5xl font-black tracking-tight md:text-6xl">
                    Encuentra tu próxima máquina.
                </h1>

                <p class="mt-5 max-w-2xl text-lg leading-relaxed text-zinc-400">
                    Explora bicicletas diseñadas para dominar el trail,
                    conquistar descensos y recorrer kilómetros.
                </p>
            </div>
        </section>

            <SectionDivider />

           <FeaturedBikes :products="products" />

           <SectionDivider />

        <!-- Catálogo -->
        <section class="relative overflow-hidden px-6 py-16">

            <div class="relative z-10 mx-auto max-w-7xl">

                <div class="grid gap-10 lg:grid-cols-[240px_1fr]">

                    <!-- Sidebar -->
                    <aside class="h-fit border border-zinc-800 bg-zinc-900/50 p-6">

                        <div>
                            <p class="text-xs font-semibold uppercase tracking-[0.25em] text-emerald-500">
                                Explorar
                            </p>

                            <h2 class="mt-2 text-xl font-bold">
                                Categorías
                            </h2>
                        </div>

                        <div class="mt-6 space-y-6">

                            <div>

                                <p class="mb-3 text-sm font-semibold text-zinc-300">
                                    Modalidad
                                </p>

                                <div class="space-y-2 text-sm text-zinc-400">

                                    <button
                                        @click="router.get('/bikes')"
                                        :class="[
                                            'block w-full text-left transition',
                                            currentCategory() === null
                                                ? 'text-emerald-500'
                                                : 'text-zinc-400 hover:text-emerald-500'
                                        ]"
                                    >
                                        Todos
                                    </button>

                                    <button
                                        @click="filterByCategory('mtb')"
                                        :class="[
                                            'block w-full text-left transition',
                                            currentCategory() === 'mtb'
                                                ? 'text-emerald-500'
                                                : 'text-zinc-400 hover:text-emerald-500'
                                        ]"
                                    >
                                        MTB
                                    </button>

                                    <button
                                        @click="filterByCategory('ruta')"
                                        :class="[
                                            'block w-full text-left transition',
                                            currentCategory() === 'ruta'
                                                ? 'text-emerald-500'
                                                : 'text-zinc-400 hover:text-emerald-500'
                                        ]"
                                    >
                                        Ruta
                                    </button>

                                </div>
                            </div>

                            <div class="border-t border-zinc-800 pt-6">

                                <p class="mb-3 text-sm font-semibold text-zinc-300">
                                    Tipo
                                </p>

                                <div class="space-y-2 text-sm text-zinc-400">

                                    <button
                                        @click="filterByCategory('trail')"
                                        :class="[
                                            'block w-full text-left transition',
                                            currentCategory() === 'trail'
                                                ? 'text-emerald-500'
                                                : 'text-zinc-400 hover:text-emerald-500'
                                        ]"
                                    >
                                        Trail
                                    </button>

                                    <button
                                        @click="filterByCategory('enduro')"
                                        :class="[
                                            'block w-full text-left transition',
                                            currentCategory() === 'enduro'
                                                ? 'text-emerald-500'
                                                : 'text-zinc-400 hover:text-emerald-500'
                                        ]"
                                    >
                                        Enduro
                                    </button>

                                    <button
                                        @click="filterByCategory('downhill')"
                                        :class="[
                                            'block w-full text-left transition',
                                            currentCategory() === 'downhill'
                                                ? 'text-emerald-500'
                                                : 'text-zinc-400 hover:text-emerald-500'
                                        ]"
                                    >
                                        Downhill
                                    </button>

                                    <button
                                        @click="filterByCategory('performance')"
                                        :class="[
                                            'block w-full text-left transition',
                                            currentCategory() === 'performance'
                                                ? 'text-emerald-500'
                                                : 'text-zinc-400 hover:text-emerald-500'
                                        ]"
                                    >
                                        Performance
                                    </button>

                                    <button
                                        @click="filterByCategory('endurance')"
                                        :class="[
                                            'block w-full text-left transition',
                                            currentCategory() === 'endurance'
                                                ? 'text-emerald-500'
                                                : 'text-zinc-400 hover:text-emerald-500'
                                        ]"
                                    >
                                        Endurance
                                    </button>

                                </div>

                            </div>

                        </div>

                    </aside>

                    <!-- Productos -->
                    <div>

                        <div class="mb-8 flex items-end justify-between">
                            <div>
                                <p class="text-sm text-zinc-500">
                                    Nuestra selección
                                </p>

                                <h2 class="mt-1 text-3xl font-black">
                                    Bicicletas
                                </h2>
                            </div>

                            <span class="text-sm text-zinc-500">
                                {{ products.length }} modelos
                            </span>
                        </div>

                        <div class="grid gap-6 sm:grid-cols-2 xl:grid-cols-3">

                            <article
                                v-for="product in products"
                                :key="product.id"
                                class="group overflow-hidden border border-zinc-800 bg-zinc-900 transition duration-300 hover:-translate-y-1 hover:border-emerald-500/50"
                            >
                                <div class="relative flex h-64 items-center justify-center overflow-hidden bg-zinc-950 p-8">

                                    <div
                                        class="pointer-events-none absolute h-40 w-40 rounded-full bg-emerald-500/10 blur-3xl transition duration-500 group-hover:bg-emerald-500/20"
                                    ></div>

                                    <img
                                        :src="product.imagen
                                            ? `/storage/${product.imagen}`
                                            : '/images/hero-bike.webp'"
                                        :alt="product.nombre"
                                        class="relative h-full w-full object-contain transition duration-500 group-hover:scale-105"
                                    />

                                </div>

                                <div class="p-6">

                                    <div class="flex items-center justify-between gap-4">

                                        <p class="text-xs font-semibold uppercase tracking-wider text-emerald-500">
                                            {{ product.category.nombre }}
                                        </p>

                                        <span
                                            v-if="product.inventory.cantidad > 0"
                                            class="text-xs text-zinc-500"
                                        >
                                            {{ product.inventory.cantidad }} disponibles
                                        </span>

                                    </div>

                                    <h2 class="mt-3 text-xl font-bold">
                                        {{ product.nombre }}
                                    </h2>

                                    <p class="mt-3 line-clamp-2 text-sm leading-relaxed text-zinc-400">
                                        {{ product.descripcion }}
                                    </p>

                                    <div class="mt-6 flex items-center justify-between gap-4">

                                        <span class="text-xl font-black">
                                            ₡{{ Number(product.precio).toLocaleString('es-CR') }}
                                        </span>

                                        <a
                                            href="#"
                                            class="border border-zinc-700 px-4 py-2 text-sm font-semibold transition hover:border-emerald-500 hover:text-emerald-500"
                                        >
                                            Ver detalles
                                        </a>

                                    </div>

                                </div>
                            </article>
                        </div>

                    </div>

                </div>

            </div>
        </section>

        <SectionDivider />

    </div>
 <Footer />

</template>

<script setup lang="ts">
import { Head, router } from '@inertiajs/vue3'
import AmbientBackground from '@/components/AmbientBackground.vue'
import FeaturedBikes from '@/components/bikes/FeaturedBikes.vue'
import Footer from '@/components/home/Footer.vue'
import Navbar from '@/components/home/Navbar.vue'
import SectionDivider from '@/components/SectionDivider.vue'
interface Product {
    id: number
    nombre: string
    slug: string
    descripcion: string | null
    precio: string
    sku: string
    imagen: string | null
    activo: boolean
    category: {
        id: number
        nombre: string
    }
    inventory: {
        cantidad: number
        stock_minimo: number
    }
}

defineProps<{
    products: Product[]
}>()

const filterByCategory = (slug: string) => {
    router.get('/bikes', {
        category: slug,
    })
}

const currentCategory = () => {
    return new URLSearchParams(window.location.search).get('category')
}

</script>