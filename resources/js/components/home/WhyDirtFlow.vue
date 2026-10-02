<script setup lang="ts">
import { Gauge, Mountain, ShieldCheck, Wrench } from 'lucide-vue-next';
</script>

<template>
    <section class="bg-zinc-900 px-6 py-24 text-white">
        <div class="mx-auto max-w-7xl">
            <!-- Header -->
            <div class="max-w-2xl">
                <p
                    class="text-sm font-semibold tracking-[0.3em] text-emerald-500 uppercase"
                >
                    Why DirtFlow
                </p>

                <h2 class="mt-3 text-4xl font-black tracking-tight md:text-5xl">
                    Más que una bicicleta.
                </h2>

                <p class="mt-4 text-zinc-400">
                    Todo lo que necesitas para llevar tu experiencia en montaña
                    al siguiente nivel.
                </p>
            </div>

            <!-- Benefits -->
            <div class="mt-14 grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                <!-- Calidad -->
                <div
                    class="group border border-zinc-800 bg-zinc-950 p-6 transition duration-300 hover:-translate-y-1 hover:border-emerald-500/50"
                >
                    <div
                        class="mb-6 flex h-12 w-12 items-center justify-center border border-zinc-800 text-emerald-500 transition duration-300 group-hover:border-emerald-500/50 group-hover:bg-emerald-500/10"
                    >
                        <ShieldCheck :size="24" :stroke-width="1.8" />
                    </div>

                    <h3 class="text-xl font-bold">Calidad</h3>

                    <p class="mt-3 text-sm leading-relaxed text-zinc-400">
                        Componentes y bicicletas seleccionados para ofrecer
                        máximo rendimiento.
                    </p>
                </div>

                <!-- Rendimiento -->
                <div
                    class="group border border-zinc-800 bg-zinc-950 p-6 transition duration-300 hover:-translate-y-1 hover:border-emerald-500/50"
                >
                    <div
                        class="mb-6 flex h-12 w-12 items-center justify-center border border-zinc-800 text-emerald-500 transition duration-300 group-hover:border-emerald-500/50 group-hover:bg-emerald-500/10"
                    >
                        <Gauge :size="24" :stroke-width="1.8" />
                    </div>

                    <h3 class="text-xl font-bold">Rendimiento</h3>

                    <p class="mt-3 text-sm leading-relaxed text-zinc-400">
                        Equipamiento preparado para afrontar terrenos técnicos y
                        descensos exigentes.
                    </p>
                </div>

                <!-- Experiencia -->
                <div
                    class="group border border-zinc-800 bg-zinc-950 p-6 transition duration-300 hover:-translate-y-1 hover:border-emerald-500/50"
                >
                    <div
                        class="mb-6 flex h-12 w-12 items-center justify-center border border-zinc-800 text-emerald-500 transition duration-300 group-hover:border-emerald-500/50 group-hover:bg-emerald-500/10"
                    >
                        <Mountain :size="24" :stroke-width="1.8" />
                    </div>

                    <h3 class="text-xl font-bold">Experiencia</h3>

                    <p class="mt-3 text-sm leading-relaxed text-zinc-400">
                        Productos pensados por riders para quienes realmente
                        viven el MTB.
                    </p>
                </div>

                <!-- Soporte -->
                <div
                    class="group border border-zinc-800 bg-zinc-950 p-6 transition duration-300 hover:-translate-y-1 hover:border-emerald-500/50"
                >
                    <div
                        class="mb-6 flex h-12 w-12 items-center justify-center border border-zinc-800 text-emerald-500 transition duration-300 group-hover:border-emerald-500/50 group-hover:bg-emerald-500/10"
                    >
                        <Wrench :size="24" :stroke-width="1.8" />
                    </div>

                    <h3 class="text-xl font-bold">Soporte</h3>

                    <p class="mt-3 text-sm leading-relaxed text-zinc-400">
                        Te ayudamos a encontrar el equipo adecuado para tu
                        próximo recorrido.
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>
