<template>
    <nav class="fixed left-0 top-0 z-50 w-full bg-transparent text-white backdrop-blur-[2px]">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5">

            <!-- Logo -->
            <a href="/" class="text-2xl font-bold tracking-tight">
                DirtFlow <span class="text-emerald-500">X</span>
            </a>

            <!-- Navigation -->
            <div class="hidden items-center gap-8 md:flex">
                <a href="/" class="text-sm font-medium transition hover:text-emerald-500">
                    Inicio
                </a>

                <a href="/bikes" class="text-sm font-medium transition hover:text-emerald-500">
                    Bicicletas
                </a>

                <a href="#" class="text-sm font-medium transition hover:text-emerald-500">
                    Accesorios
                </a>

                <a href="#" class="text-sm font-medium transition hover:text-emerald-500">
                    Nosotros
                </a>
            </div>

            <!-- Actions -->
            <div class="flex items-center gap-4">
                <button class="text-xl transition hover:text-emerald-500">
                    🛒
                </button>

                <button class="text-xl transition hover:text-emerald-500">
                    👤
                </button>
            </div>

        </div>
    </nav>
</template>