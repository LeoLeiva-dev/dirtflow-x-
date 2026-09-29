<script setup lang="ts">
import { Head, router, usePage } from '@inertiajs/vue3';
import {
    ArrowRight,
    Bike,
    Box,
    LogOut,
    Settings,
    ShoppingBag,
    User,
} from 'lucide-vue-next';
import { computed } from 'vue';

interface Role {
    id: number;
    nombre: string;
}

interface AuthUser {
    id: number;
    email: string;
    persona_id: number | null;
    roles: Role[];
}

const page = usePage();

const authUser = computed<AuthUser | null>(() => {
    const props = page.props as unknown as {
        auth?: {
            user?: AuthUser | null;
        };
    };

    return props.auth?.user ?? null;
});

const isAdmin = computed(() => {
    return (
        authUser.value?.roles?.some(
            (role) => role.nombre === 'Administrador',
        ) ?? false
    );
});

const userName = computed(() => {
    return authUser.value?.email?.split('@')[0] ?? 'Rider';
});

const goTo = (url: string) => {
    router.visit(url);
};

const logout = () => {
    router.post('/logout');
};
</script>

<template>
    <Head title="Hub" />

    <div class="relative min-h-screen overflow-hidden bg-zinc-950 text-white">
        <!-- Ambient background -->
        <div class="pointer-events-none absolute inset-0 overflow-hidden">
            <div
                class="absolute -top-40 left-1/4 h-[500px] w-[500px] rounded-full bg-emerald-500/10 blur-[140px]"
            ></div>

            <div
                class="absolute right-0 bottom-0 h-[450px] w-[450px] rounded-full bg-emerald-400/5 blur-[120px]"
            ></div>
        </div>

        <!-- Main -->
        <main class="relative mx-auto max-w-7xl px-6 py-10 md:px-10">
            <!-- Header -->
            <header
                class="mb-12 flex flex-col gap-6 border-b border-zinc-800 pb-8 md:flex-row md:items-end md:justify-between"
            >
                <div>
                    <p
                        class="text-xs font-semibold tracking-[0.3em] text-emerald-500 uppercase"
                    >
                        DirtFlow X / User Hub
                    </p>

                    <h1
                        class="mt-4 text-4xl font-black tracking-tight md:text-6xl"
                    >
                        Hola,
                        <span class="text-zinc-500"> {{ userName }}. </span>
                    </h1>

                    <p class="mt-4 max-w-xl text-zinc-400">
                        Tu centro de control para continuar explorando DirtFlow
                        X.
                    </p>
                </div>

                <div class="flex items-center gap-3 text-xs text-zinc-500">
                    <span
                        class="h-2 w-2 rounded-full bg-emerald-500 shadow-[0_0_12px_rgba(16,185,129,0.8)]"
                    ></span>

                    SISTEMA ACTIVO
                </div>
            </header>

            <!-- Quick actions -->
            <section>
                <div class="mb-6">
                    <p
                        class="text-xs font-semibold tracking-[0.25em] text-zinc-500 uppercase"
                    >
                        Acceso rápido
                    </p>

                    <h2 class="mt-2 text-2xl font-bold">¿Qué quieres hacer?</h2>
                </div>

                <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    <!-- Store -->
                    <button
                        type="button"
                        @click="goTo('/bikes')"
                        class="group relative min-h-48 overflow-hidden border border-zinc-800 bg-zinc-900/60 p-6 text-left transition duration-300 hover:-translate-y-1 hover:border-emerald-500/50 hover:bg-zinc-900"
                    >
                        <Bike
                            :size="30"
                            :stroke-width="1.5"
                            class="text-emerald-500 transition-transform duration-300 group-hover:translate-x-1"
                        />

                        <div class="mt-12">
                            <h3 class="text-xl font-bold">Explorar tienda</h3>

                            <p class="mt-2 text-sm text-zinc-500">
                                Bicicletas y equipamiento.
                            </p>
                        </div>

                        <ArrowRight
                            :size="18"
                            class="absolute right-6 bottom-6 text-zinc-600 transition-all group-hover:translate-x-1 group-hover:text-emerald-500"
                        />
                    </button>

                    <!-- Profile -->
                    <button
                        type="button"
                        @click="goTo('/perfil')"
                        class="group relative min-h-48 overflow-hidden border border-zinc-800 bg-zinc-900/60 p-6 text-left transition duration-300 hover:-translate-y-1 hover:border-emerald-500/50 hover:bg-zinc-900"
                    >
                        <User
                            :size="30"
                            :stroke-width="1.5"
                            class="text-emerald-500 transition-transform duration-300 group-hover:translate-x-1"
                        />

                        <div class="mt-12">
                            <h3 class="text-xl font-bold">Mi perfil</h3>

                            <p class="mt-2 text-sm text-zinc-500">
                                Administra tus datos.
                            </p>
                        </div>

                        <ArrowRight
                            :size="18"
                            class="absolute right-6 bottom-6 text-zinc-600 transition-all group-hover:translate-x-1 group-hover:text-emerald-500"
                        />
                    </button>

                    <!-- Orders -->
                    <button
                        type="button"
                        @click="goTo('/pedidos')"
                        class="group relative min-h-48 overflow-hidden border border-zinc-800 bg-zinc-900/60 p-6 text-left transition duration-300 hover:-translate-y-1 hover:border-emerald-500/50 hover:bg-zinc-900"
                    >
                        <Box
                            :size="30"
                            :stroke-width="1.5"
                            class="text-emerald-500 transition-transform duration-300 group-hover:translate-x-1"
                        />

                        <div class="mt-12">
                            <h3 class="text-xl font-bold">Mis pedidos</h3>

                            <p class="mt-2 text-sm text-zinc-500">
                                Consulta tu historial.
                            </p>
                        </div>

                        <ArrowRight
                            :size="18"
                            class="absolute right-6 bottom-6 text-zinc-600 transition-all group-hover:translate-x-1 group-hover:text-emerald-500"
                        />
                    </button>

                    <!-- Cart -->
                    <button
                        type="button"
                        @click="goTo('/cart')"
                        class="group relative min-h-48 overflow-hidden border border-zinc-800 bg-zinc-900/60 p-6 text-left transition duration-300 hover:-translate-y-1 hover:border-emerald-500/50 hover:bg-zinc-900"
                    >
                        <ShoppingBag
                            :size="30"
                            :stroke-width="1.5"
                            class="text-emerald-500 transition-transform duration-300 group-hover:translate-x-1"
                        />

                        <div class="mt-12">
                            <h3 class="text-xl font-bold">Mi carrito</h3>

                            <p class="mt-2 text-sm text-zinc-500">
                                Revisa tus productos.
                            </p>
                        </div>

                        <ArrowRight
                            :size="18"
                            class="absolute right-6 bottom-6 text-zinc-600 transition-all group-hover:translate-x-1 group-hover:text-emerald-500"
                        />
                    </button>
                </div>
            </section>

            <!-- Admin -->
            <section v-if="isAdmin" class="mt-16">
                <div class="mb-6">
                    <p
                        class="text-xs font-semibold tracking-[0.25em] text-zinc-500 uppercase"
                    >
                        Administración
                    </p>

                    <h2 class="mt-2 text-2xl font-bold">
                        Centro de operaciones
                    </h2>
                </div>

                <button
                    type="button"
                    @click="goTo('/admin')"
                    class="group flex w-full items-center justify-between border border-emerald-500/20 bg-emerald-500/5 p-6 text-left transition duration-300 hover:border-emerald-500/50 hover:bg-emerald-500/10"
                >
                    <div class="flex items-center gap-5">
                        <Settings
                            :size="30"
                            :stroke-width="1.5"
                            class="text-emerald-500"
                        />

                        <div>
                            <h3 class="text-xl font-bold">Administración</h3>

                            <p class="mt-1 text-sm text-zinc-500">
                                Gestiona productos, inventario, pedidos y
                                usuarios.
                            </p>
                        </div>
                    </div>

                    <ArrowRight
                        :size="22"
                        class="text-zinc-600 transition-all group-hover:translate-x-1 group-hover:text-emerald-500"
                    />
                </button>
            </section>

            <!-- Footer actions -->
            <div
                class="mt-16 flex flex-col gap-4 border-t border-zinc-800 pt-6 sm:flex-row sm:items-center sm:justify-between"
            >
                <p class="text-xs tracking-wide text-zinc-600">
                    DIRT FLOW X / SYSTEM
                </p>

                <button
                    type="button"
                    @click="logout"
                    class="flex items-center gap-2 text-sm text-zinc-500 transition hover:text-red-400"
                >
                    <LogOut :size="16" :stroke-width="1.8" />
                    Cerrar sesión
                </button>
            </div>
        </main>
    </div>
</template>
