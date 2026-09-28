<script setup lang="ts">
import { router } from '@inertiajs/vue3';
import { ShoppingBag, User } from 'lucide-vue-next';
</script>

<template>
    <nav
        class="fixed top-0 left-0 z-50 w-full bg-transparent text-white backdrop-blur-[2px]"
    >
        <div
            class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5"
        >
            <!-- Logo -->
            <a href="/" class="text-2xl font-bold tracking-tight">
                DirtFlow <span class="text-emerald-500">X</span>
            </a>

            <!-- Navigation -->
            <div class="hidden items-center gap-8 md:flex">
                <a
                    href="/"
                    class="text-sm font-medium transition hover:text-emerald-500"
                >
                    Inicio
                </a>

                <a
                    href="/bikes"
                    class="text-sm font-medium transition hover:text-emerald-500"
                >
                    Bicicletas
                </a>

                <a
                    href="#"
                    class="text-sm font-medium transition hover:text-emerald-500"
                >
                    Accesorios
                </a>

                <a
                    href="#"
                    class="text-sm font-medium transition hover:text-emerald-500"
                >
                    Nosotros
                </a>
            </div>

            <!-- Actions -->
            <div class="flex items-center gap-5">
                <button
                    type="button"
                    @click="router.visit('/cart')"
                    class="text-zinc-400 transition hover:text-emerald-500"
                    aria-label="Carrito"
                >
                    <ShoppingBag :size="20" :stroke-width="1.8" />
                </button>

                <button
                    type="button"
                    class="text-zinc-400 transition hover:text-emerald-500"
                    aria-label="Cuenta"
                >
                    <User :size="20" :stroke-width="1.8" />
                </button>
            </div>
        </div>
    </nav>
</template>
