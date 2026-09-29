<template>
    <Head title="Nosotros" />
    <Navbar />

    <div class="relative min-h-screen overflow-hidden bg-zinc-950 text-white">
        <AmbientBackground />

        <!-- Hero -->
        <section class="relative px-6 pt-32 pb-24 md:pt-40 md:pb-32">
            <div class="relative mx-auto max-w-7xl">
                <p
                    class="text-sm font-semibold tracking-[0.3em] text-emerald-500 uppercase"
                >
                    DirtFlow X / Nosotros
                </p>

                <h1
                    class="mt-4 max-w-5xl text-5xl font-black tracking-tight md:text-7xl"
                >
                    No se trata solo de llegar.
                    <span class="text-zinc-500">
                        Se trata de cómo recorres el camino.
                    </span>
                </h1>

                <p class="mt-8 max-w-2xl text-lg leading-relaxed text-zinc-400">
                    DirtFlow X nace de una idea sencilla: crear un espacio donde
                    las bicicletas, el equipamiento y la tecnología se
                    encuentren para quienes disfrutan realmente del recorrido.
                </p>
            </div>
        </section>

        <SectionDivider />

        <!-- Filosofía -->
        <section class="relative px-6 py-24 md:py-32">
            <div
                class="mx-auto grid max-w-7xl gap-16 lg:grid-cols-[1fr_1.2fr] lg:items-center"
            >
                <div>
                    <p
                        class="text-xs font-semibold tracking-[0.3em] text-emerald-500 uppercase"
                    >
                        Nuestra filosofía
                    </p>

                    <h2
                        class="mt-4 text-4xl font-black tracking-tight md:text-5xl"
                    >
                        Construido para quienes siguen avanzando.
                    </h2>
                </div>

                <div class="space-y-6 text-base leading-8 text-zinc-400">
                    <p>
                        No importa si tu recorrido empieza en una calle, un
                        sendero o una bajada técnica. Cada terreno exige algo
                        diferente.
                    </p>

                    <p>
                        Por eso DirtFlow X reúne bicicletas y equipamiento
                        pensados para diferentes estilos de conducción, buscando
                        siempre una experiencia clara, directa y sin
                        complicaciones.
                    </p>

                    <p>
                        Nuestra meta es que puedas encontrar la máquina y el
                        equipo que se adapten a tu forma de rodar.
                    </p>
                </div>
            </div>
        </section>

        <SectionDivider />

        <!-- Principios -->
        <section class="relative px-6 py-24 md:py-32">
            <div class="mx-auto max-w-7xl">
                <div class="mb-14">
                    <p
                        class="text-xs font-semibold tracking-[0.3em] text-emerald-500 uppercase"
                    >
                        Lo que nos mueve
                    </p>

                    <h2
                        class="mt-4 text-4xl font-black tracking-tight md:text-5xl"
                    >
                        Tres ideas. Una dirección.
                    </h2>
                </div>

                <div
                    class="grid gap-px overflow-hidden border border-zinc-800 bg-zinc-800 md:grid-cols-3"
                >
                    <article class="bg-zinc-950 p-8 md:p-10">
                        <span
                            class="text-xs font-bold tracking-[0.2em] text-emerald-500"
                        >
                            01
                        </span>

                        <h3 class="mt-8 text-2xl font-black">
                            El terreno manda.
                        </h3>

                        <p class="mt-4 leading-7 text-zinc-400">
                            Cada modalidad tiene sus propias exigencias. Nuestra
                            selección parte de esa realidad.
                        </p>
                    </article>

                    <article class="bg-zinc-950 p-8 md:p-10">
                        <span
                            class="text-xs font-bold tracking-[0.2em] text-emerald-500"
                        >
                            02
                        </span>

                        <h3 class="mt-8 text-2xl font-black">
                            El equipo importa.
                        </h3>

                        <p class="mt-4 leading-7 text-zinc-400">
                            Una buena bicicleta es solo una parte de la
                            experiencia. El equipamiento también cuenta.
                        </p>
                    </article>

                    <article class="bg-zinc-950 p-8 md:p-10">
                        <span
                            class="text-xs font-bold tracking-[0.2em] text-emerald-500"
                        >
                            03
                        </span>

                        <h3 class="mt-8 text-2xl font-black">
                            Sigue avanzando.
                        </h3>

                        <p class="mt-4 leading-7 text-zinc-400">
                            DirtFlow X está pensado para quienes buscan nuevos
                            recorridos, nuevos retos y nuevas experiencias.
                        </p>
                    </article>
                </div>
            </div>
        </section>

        <SectionDivider />

        <!-- Cierre -->
        <section class="relative px-6 py-28 md:py-36">
            <div class="mx-auto max-w-5xl text-center">
                <p
                    class="text-xs font-semibold tracking-[0.35em] text-emerald-500 uppercase"
                >
                    DirtFlow X
                </p>

                <h2 class="mt-5 text-5xl font-black tracking-tight md:text-7xl">
                    Ride beyond limits.
                </h2>

                <p
                    class="mx-auto mt-6 max-w-2xl text-lg leading-relaxed text-zinc-500"
                >
                    Encuentra tu próxima máquina. Equípala. Sal y descubre hasta
                    dónde puedes llegar.
                </p>
            </div>
        </section>
    </div>

    <Footer />
</template>

<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import AmbientBackground from '@/components/AmbientBackground.vue';
import Footer from '@/components/home/Footer.vue';
import Navbar from '@/components/home/Navbar.vue';
import SectionDivider from '@/components/SectionDivider.vue';
</script>
