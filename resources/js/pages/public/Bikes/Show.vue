<template>
    <Head :title="product.nombre" />

    <div class="min-h-screen bg-zinc-950 px-6 py-24 text-white">

        <div class="mx-auto max-w-7xl">

            <p class="text-sm uppercase tracking-[0.3em] text-emerald-500">
                {{ product.category.nombre }}
            </p>

            <h1 class="mt-3 text-5xl font-black">
                {{ product.nombre }}
            </h1>

            <p class="mt-4 text-zinc-400">
                {{ product.descripcion }}
            </p>

            <p class="mt-6 text-3xl font-black">
                ₡{{ Number(product.precio).toLocaleString('es-CR') }}
            </p>

            <p class="mt-3 text-sm text-zinc-500">
                SKU: {{ product.sku }}
            </p>

            <p class="mt-2 text-sm text-zinc-500">
                {{ product.inventory.cantidad }} disponibles
            </p>

        </div>

    </div>
</template>

<script setup lang="ts">
import { Head } from '@inertiajs/vue3'

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