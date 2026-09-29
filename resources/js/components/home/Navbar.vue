<script setup lang="ts">
import { router, usePage } from '@inertiajs/vue3';
import { ShoppingBag, User, X } from 'lucide-vue-next';
import { computed, ref } from 'vue';

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

const isMenuOpen = ref(false);

const page = usePage();

const authUser = computed<AuthUser | null>(() => {
    const props = page.props as unknown as {
        auth?: {
            user?: AuthUser | null;
        };
    };

    return props.auth?.user ?? null;
});

const isAuthenticated = computed(() => !!authUser.value);

const isAdmin = computed(() => {
    return (
        authUser.value?.roles?.some(
            (role) => role.nombre === 'Administrador',
        ) ?? false
    );
});

const goTo = (url: string) => {
    isMenuOpen.value = false;
    router.visit(url);
};

const logout = () => {
    isMenuOpen.value = false;
    router.post('/logout');
};
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
                    href="/accesorios"
                    class="text-sm font-medium transition hover:text-emerald-500"
                >
                    Accesorios
                </a>

                <a
                    href="/nosotros"
                    class="text-sm font-medium transition hover:text-emerald-500"
                >
                    Nosotros
                </a>
            </div>

            <!-- Actions -->
            <div class="relative flex items-center gap-5">
                <button
                    type="button"
                    @click="router.visit('/cart')"
                    class="text-zinc-400 transition hover:text-emerald-500"
                    aria-label="Carrito"
                >
                    <ShoppingBag :size="20" :stroke-width="1.8" />
                </button>

                <!-- Account -->
                <button
                    type="button"
                    @click="isMenuOpen = !isMenuOpen"
                    class="text-zinc-400 transition hover:text-emerald-500"
                    aria-label="Cuenta"
                    :aria-expanded="isMenuOpen"
                >
                    <X v-if="isMenuOpen" :size="20" :stroke-width="1.8" />

                    <User v-else :size="20" :stroke-width="1.8" />
                </button>

                <!-- Account menu -->
                <div
                    v-if="isMenuOpen"
                    class="absolute top-10 right-0 w-56 border border-zinc-800 bg-zinc-950/95 p-2 shadow-2xl backdrop-blur-xl"
                >
                    <!-- Guest -->
                    <template v-if="!isAuthenticated">
                        <button
                            type="button"
                            @click="goTo('/login')"
                            class="w-full px-4 py-3 text-left text-sm font-medium text-zinc-300 transition hover:bg-zinc-900 hover:text-emerald-500"
                        >
                            Iniciar sesión
                        </button>
                    </template>

                    <!-- Authenticated -->
                    <template v-else>
                        <button
                            type="button"
                            @click="goTo('/dashboard')"
                            class="flex w-full items-center gap-3 px-4 py-3 text-left text-sm text-zinc-300 transition hover:bg-zinc-800 hover:text-emerald-500"
                        >
                            Panel de control
                        </button>

                        <button
                            type="button"
                            @click="goTo('/perfil')"
                            class="w-full px-4 py-3 text-left text-sm font-medium text-zinc-300 transition hover:bg-zinc-900 hover:text-emerald-500"
                        >
                            Mi perfil
                        </button>

                        <button
                            type="button"
                            @click="goTo('/pedidos')"
                            class="w-full px-4 py-3 text-left text-sm font-medium text-zinc-300 transition hover:bg-zinc-900 hover:text-emerald-500"
                        >
                            Mis pedidos
                        </button>

                        <div class="my-2 border-t border-zinc-800"></div>

                        <!-- Admin -->
                        <button
                            v-if="isAdmin"
                            type="button"
                            @click="goTo('/admin')"
                            class="w-full px-4 py-3 text-left text-sm font-medium text-emerald-500 transition hover:bg-zinc-900 hover:text-emerald-400"
                        >
                            Administración
                        </button>

                        <button
                            type="button"
                            @click="logout"
                            class="w-full px-4 py-3 text-left text-sm font-medium text-zinc-400 transition hover:bg-zinc-900 hover:text-red-400"
                        >
                            Cerrar sesión
                        </button>
                    </template>
                </div>
            </div>
        </div>
    </nav>
</template>
