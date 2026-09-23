<script setup lang="ts">
import { Head, router } from '@inertiajs/vue3'

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
    product: Product
}>()
</script>

<template>
    <Head :title="product.nombre" />

    <div class="min-h-screen bg-zinc-950 text-white">

        <!-- Hero -->
        <section class="relative min-h-screen overflow-hidden">

            <!-- Background glow -->
            <div
                class="pointer-events-none absolute left-1/2 top-1/2 h-[600px] w-[600px] -translate-x-1/2 -translate-y-1/2 rounded-full bg-emerald-500/10 blur-[140px]"
            ></div>

            <div class="relative z-10 mx-auto max-w-7xl px-6 py-10">

                <!-- Top bar -->
                <div class="flex items-center justify-between">
                    <button
                        @click="router.visit('/bikes')"
                        class="text-sm uppercase tracking-[0.2em] text-zinc-500 transition hover:text-emerald-500"
                    >
                        ← Catálogo
                    </button>

                    <span class="font-mono text-xs text-zinc-600">
                        {{ product.sku }}
                    </span>
                </div>

                <!-- Product -->
                <div class="grid min-h-[80vh] items-center gap-12 lg:grid-cols-2">

                    <!-- Info -->
                    <div>

                        <p
                            class="text-sm font-semibold uppercase tracking-[0.35em] text-emerald-500"
                        >
                            {{ product.category.nombre }}
                        </p>

                        <h1
                            class="mt-4 text-6xl font-black uppercase tracking-tight md:text-7xl"
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
                                ₡{{ Number(product.precio).toLocaleString('es-CR') }}
                            </p>

                            <p
                                v-if="product.inventory.cantidad > 0"
                                class="mt-2 text-sm uppercase tracking-widest text-zinc-500"
                            >
                                {{ product.inventory.cantidad }} unidades disponibles
                            </p>
                        </div>

                        <div class="mt-10 flex gap-4">

                            <button
                                class="border border-zinc-700 px-8 py-4 text-sm font-bold uppercase tracking-wider transition hover:border-emerald-500 hover:text-emerald-500"
                            >
                                Añadir al carrito
                            </button>

                        </div>

                    </div>

                    <!-- Image -->
                    <div class="relative flex items-center justify-center">

                        <div
                            class="absolute h-[420px] w-[420px] rounded-full bg-emerald-500/10 blur-3xl"
                        ></div>

                        <img
                            :src="product.imagen
                                ? `/storage/${product.imagen}`
                                : '/images/hero-bike.webp'"
                            :alt="product.nombre"
                            class="relative w-full max-w-2xl object-contain drop-shadow-2xl"
                        />

                    </div>

                </div>
            </div>
        </section>

        <!-- The Machine -->
        <section class="relative border-t border-zinc-900 bg-zinc-950 py-32">
            <div class="mx-auto max-w-7xl px-6">

                <div class="grid gap-16 lg:grid-cols-[0.8fr_1.2fr] lg:items-start">

                    <!-- Section label -->
                    <div>
                        <p class="font-mono text-xs tracking-[0.35em] text-emerald-500">
                            01 / THE MACHINE
                        </p>

                        <h2 class="mt-4 text-5xl font-black uppercase tracking-tight md:text-6xl">
                            Built to<br />
                            <span class="text-zinc-700">ride.</span>
                        </h2>
                    </div>

                    <!-- Description -->
                    <div class="max-w-3xl">

                        <p
                            v-if="product.descripcion"
                            class="text-xl leading-relaxed text-zinc-300 md:text-2xl"
                        >
                            {{ product.descripcion }}
                        </p>

                        <div class="mt-12 flex items-center gap-4">
                            <span class="h-px w-16 bg-emerald-500"></span>

                            <span class="font-mono text-xs uppercase tracking-[0.25em] text-zinc-600">
                                DirtFlow / Machine Series
                            </span>
                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- Machine Data -->
        <section class="relative border-t border-zinc-900 bg-black py-24">
            <div class="mx-auto max-w-7xl px-6">

                <!-- Header -->
                <div class="mb-16 flex items-end justify-between">
                    <div>
                        <p class="font-mono text-xs tracking-[0.35em] text-emerald-500">
                            02 / MACHINE DATA
                        </p>

                        <h2 class="mt-3 text-4xl font-black uppercase tracking-tight md:text-5xl">
                            System information
                        </h2>
                    </div>

                    <span class="hidden font-mono text-xs text-zinc-700 md:block">
                        DF / PRODUCT / {{ product.id }}
                    </span>
                </div>

                <!-- Data grid -->
                <div class="grid border-l border-t border-zinc-800 sm:grid-cols-2 lg:grid-cols-4">

                    <!-- Category -->
                    <div class="border-b border-r border-zinc-800 p-8">
                        <p class="font-mono text-[10px] uppercase tracking-[0.3em] text-zinc-600">
                            Category
                        </p>

                        <p class="mt-6 text-lg font-bold uppercase">
                            {{ product.category.nombre }}
                        </p>
                    </div>

                    <!-- SKU -->
                    <div class="border-b border-r border-zinc-800 p-8">
                        <p class="font-mono text-[10px] uppercase tracking-[0.3em] text-zinc-600">
                            Machine ID
                        </p>

                        <p class="mt-6 font-mono text-lg font-bold">
                            {{ product.sku }}
                        </p>
                    </div>

                    <!-- Stock -->
                    <div class="border-b border-r border-zinc-800 p-8">
                        <p class="font-mono text-[10px] uppercase tracking-[0.3em] text-zinc-600">
                            Available units
                        </p>

                        <p class="mt-6 text-lg font-bold">
                            {{ product.inventory.cantidad }}
                        </p>
                    </div>

                    <!-- Status -->
                    <div class="border-b border-r border-zinc-800 p-8">
                        <p class="font-mono text-[10px] uppercase tracking-[0.3em] text-zinc-600">
                            System status
                        </p>

                        <div class="mt-6 flex items-center gap-3">
                            <span class="h-2 w-2 bg-emerald-500"></span>

                            <span class="text-sm font-bold uppercase tracking-wider text-emerald-500">
                                Available
                            </span>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- Machine Specs -->
        <section class="relative border-t border-zinc-900 bg-zinc-950 py-28">
            <div class="mx-auto max-w-7xl px-6">

                <!-- Header -->
                <div class="mb-14">
                    <p class="font-mono text-xs tracking-[0.35em] text-emerald-500">
                        03 / MACHINE SPECS
                    </p>

                    <h2 class="mt-3 text-4xl font-black uppercase tracking-tight md:text-5xl">
                        Technical profile
                    </h2>
                </div>

                <!-- Specs -->
                <div class="grid gap-px border border-zinc-800 bg-zinc-800 md:grid-cols-2">

                    <!-- Frame -->
                    <div class="bg-zinc-950 p-8 transition hover:bg-zinc-900">
                        <div class="flex items-center justify-between">
                            <span class="font-mono text-xs uppercase tracking-[0.25em] text-zinc-600">
                                Frame
                            </span>

                            <span class="font-mono text-xs text-zinc-700">
                                01
                            </span>
                        </div>

                        <p class="mt-8 text-2xl font-black uppercase">
                            —
                        </p>
                    </div>

                    <!-- Suspension -->
                    <div class="bg-zinc-950 p-8 transition hover:bg-zinc-900">
                        <div class="flex items-center justify-between">
                            <span class="font-mono text-xs uppercase tracking-[0.25em] text-zinc-600">
                                Suspension
                            </span>

                            <span class="font-mono text-xs text-zinc-700">
                                02
                            </span>
                        </div>

                        <p class="mt-8 text-2xl font-black uppercase">
                            —
                        </p>
                    </div>

                    <!-- Wheel -->
                    <div class="bg-zinc-950 p-8 transition hover:bg-zinc-900">
                        <div class="flex items-center justify-between">
                            <span class="font-mono text-xs uppercase tracking-[0.25em] text-zinc-600">
                                Wheel system
                            </span>

                            <span class="font-mono text-xs text-zinc-700">
                                03
                            </span>
                        </div>

                        <p class="mt-8 text-2xl font-black uppercase">
                            —
                        </p>
                    </div>

                    <!-- Drivetrain -->
                    <div class="bg-zinc-950 p-8 transition hover:bg-zinc-900">
                        <div class="flex items-center justify-between">
                            <span class="font-mono text-xs uppercase tracking-[0.25em] text-zinc-600">
                                Drivetrain
                            </span>

                            <span class="font-mono text-xs text-zinc-700">
                                04
                            </span>
                        </div>

                        <p class="mt-8 text-2xl font-black uppercase">
                            —
                        </p>
                    </div>

                </div>

            </div>
        </section>
        <!-- Acquire Machine -->
        <section class="relative border-t border-zinc-900 bg-black py-28">
            <div class="mx-auto max-w-7xl px-6">

                <!-- Header -->
                <div class="mb-16">
                    <p class="font-mono text-xs tracking-[0.35em] text-emerald-500">
                        04 / ACQUIRE MACHINE
                    </p>

                    <h2 class="mt-3 text-4xl font-black uppercase tracking-tight md:text-5xl">
                        Ready to ride?
                    </h2>
                </div>

                <!-- Purchase panel -->
                <div class="grid border border-zinc-800 lg:grid-cols-[1fr_0.7fr]">

                    <!-- Product info -->
                    <div class="border-b border-zinc-800 p-8 lg:border-b-0 lg:border-r md:p-12">

                        <p class="font-mono text-xs uppercase tracking-[0.25em] text-zinc-600">
                            Selected machine
                        </p>

                        <h3 class="mt-5 text-3xl font-black uppercase md:text-4xl">
                            {{ product.nombre }}
                        </h3>

                        <p class="mt-4 max-w-xl text-sm leading-relaxed text-zinc-500">
                            Configurá la cantidad que querés adquirir y agregá la máquina
                            a tu carrito.
                        </p>

                        <!-- Availability -->
                        <div class="mt-10 flex items-center gap-3">
                            <span
                                class="h-2 w-2 bg-emerald-500 shadow-[0_0_12px_rgba(16,185,129,0.8)]"
                            ></span>

                            <span class="font-mono text-xs uppercase tracking-widest text-emerald-500">
                                {{ product.inventory.cantidad }} units available
                            </span>
                        </div>

                    </div>

                    <!-- Purchase controls -->
                    <div class="flex flex-col justify-between p-8 md:p-12">

                        <!-- Price -->
                        <div>
                            <p class="font-mono text-xs uppercase tracking-[0.25em] text-zinc-600">
                                Machine price
                            </p>

                            <p class="mt-4 text-4xl font-black md:text-5xl">
                                ₡{{ Number(product.precio).toLocaleString('es-CR') }}
                            </p>
                        </div>

                        <!-- Quantity -->
                        <div class="mt-12">

                            <p class="font-mono text-xs uppercase tracking-[0.25em] text-zinc-600">
                                Quantity
                            </p>

                            <div class="mt-4 flex w-fit items-center border border-zinc-800">

                                <button
                                    class="flex h-12 w-12 items-center justify-center text-xl text-zinc-500 transition hover:bg-zinc-900 hover:text-white"
                                >
                                    −
                                </button>

                                <span
                                    class="flex h-12 w-14 items-center justify-center border-x border-zinc-800 font-mono"
                                >
                                    1
                                </span>

                                <button
                                    class="flex h-12 w-12 items-center justify-center text-xl text-zinc-500 transition hover:bg-zinc-900 hover:text-white"
                                >
                                    +
                                </button>

                            </div>

                        </div>

                        <!-- Action -->
                        <button
                            class="mt-10 flex w-full items-center justify-between border border-emerald-500 bg-emerald-500 px-6 py-5 text-sm font-black uppercase tracking-[0.2em] text-black transition hover:bg-transparent hover:text-emerald-500"
                        >
                            <span>Add to cart</span>

                            <span>→</span>
                        </button>

                    </div>

                </div>

            </div>
        </section>
        <!-- Related Machines -->
        <section class="relative border-t border-zinc-900 bg-zinc-950 py-28">
            <div class="mx-auto max-w-7xl px-6">

                <!-- Header -->
                <div class="mb-14 flex items-end justify-between">
                    <div>
                        <p class="font-mono text-xs tracking-[0.35em] text-emerald-500">
                            05 / RELATED MACHINES
                        </p>

                        <h2 class="mt-3 text-4xl font-black uppercase tracking-tight md:text-5xl">
                            More machines
                        </h2>
                    </div>

                    <button
                        @click="router.visit('/bikes')"
                        class="hidden text-xs font-bold uppercase tracking-[0.2em] text-zinc-500 transition hover:text-emerald-500 md:block"
                    >
                        View catalog →
                    </button>
                </div>

                <!-- Placeholder grid -->
                <div class="grid gap-6 md:grid-cols-3">

                    <!-- Machine -->
                    <div
                        class="group border border-zinc-800 bg-black p-6 transition hover:border-zinc-600"
                    >
                        <div class="flex aspect-[4/3] items-center justify-center bg-zinc-900">
                            <span class="font-mono text-xs uppercase tracking-widest text-zinc-700">
                                Machine image
                            </span>
                        </div>

                        <div class="mt-6">
                            <p class="font-mono text-[10px] uppercase tracking-[0.25em] text-zinc-600">
                                Related machine
                            </p>

                            <h3 class="mt-2 text-xl font-black uppercase">
                                Coming soon
                            </h3>
                        </div>
                    </div>

                    <!-- Machine -->
                    <div
                        class="group border border-zinc-800 bg-black p-6 transition hover:border-zinc-600"
                    >
                        <div class="flex aspect-[4/3] items-center justify-center bg-zinc-900">
                            <span class="font-mono text-xs uppercase tracking-widest text-zinc-700">
                                Machine image
                            </span>
                        </div>

                        <div class="mt-6">
                            <p class="font-mono text-[10px] uppercase tracking-[0.25em] text-zinc-600">
                                Related machine
                            </p>

                            <h3 class="mt-2 text-xl font-black uppercase">
                                Coming soon
                            </h3>
                        </div>
                    </div>

                    <!-- Machine -->
                    <div
                        class="group border border-zinc-800 bg-black p-6 transition hover:border-zinc-600"
                    >
                        <div class="flex aspect-[4/3] items-center justify-center bg-zinc-900">
                            <span class="font-mono text-xs uppercase tracking-widest text-zinc-700">
                                Machine image
                            </span>
                        </div>

                        <div class="mt-6">
                            <p class="font-mono text-[10px] uppercase tracking-[0.25em] text-zinc-600">
                                Related machine
                            </p>

                            <h3 class="mt-2 text-xl font-black uppercase">
                                Coming soon
                            </h3>
                        </div>
                    </div>

                </div>

            </div>
        </section>

    </div>
</template>