<script setup lang="ts">
import AmbientBackground from '@/components/AmbientBackground.vue';
import DirtFlowLogo from '@/components/DirtFlowLogo.vue';

defineProps<{
    title?: string;
    description?: string;
}>();
</script>

<template>
    <div class="relative flex min-h-svh overflow-hidden bg-zinc-950 text-white">
        <AmbientBackground />

        <div
            class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(16,185,129,0.08),transparent_55%)]"
        ></div>

        <div class="relative z-10 flex min-h-svh w-full flex-col">
            <header
                class="flex items-center justify-between px-6 py-6 md:px-10"
            >
                <DirtFlowLogo />

                <a
                    href="/"
                    class="text-xs font-semibold tracking-[0.2em] text-zinc-500 uppercase transition hover:text-emerald-400"
                >
                    Volver al inicio
                </a>
            </header>

            <main
                class="flex flex-1 items-center justify-center px-6 py-10 md:px-10"
            >
                <div class="w-full max-w-md">
                    <div class="mb-8 text-center">
                        <p
                            class="mb-3 text-xs font-bold tracking-[0.35em] text-emerald-400 uppercase"
                        >
                            Acceso de Usuario
                        </p>

                        <h1
                            class="text-3xl font-black tracking-tight text-white md:text-4xl"
                        >
                            {{ title }}
                        </h1>

                        <p
                            v-if="description"
                            class="mx-auto mt-3 max-w-sm text-sm leading-6 text-zinc-500"
                        >
                            {{ description }}
                        </p>
                    </div>

                    <div
                        class="border border-zinc-800/80 bg-zinc-950/75 p-6 shadow-2xl shadow-black/30 backdrop-blur-xl md:p-8"
                    >
                        <slot />
                    </div>

                    <div
                        class="mt-6 flex items-center justify-center gap-3 text-[10px] font-semibold tracking-[0.25em] text-zinc-700 uppercase"
                    >
                        <span class="h-px w-10 bg-zinc-800"></span>
                        DirtFlow
                        <span class="h-px w-10 bg-zinc-800"></span>
                    </div>
                </div>
            </main>
        </div>
    </div>
</template>
