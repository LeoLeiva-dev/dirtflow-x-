<template>
    <section class="bg-zinc-900 px-6 py-24 text-white">
        <div class="mx-auto max-w-7xl">

            <!-- Encabezado -->
            <div class="mb-12">
                <p class="mb-3 text-sm font-semibold uppercase tracking-[0.3em] text-emerald-500">
                    Nuestra selección
                </p>

                <h2 class="text-4xl font-black tracking-tight md:text-5xl">
                    Bicicletas destacadas
                </h2>

                <p class="mt-4 max-w-2xl text-zinc-400">
                    Máquinas diseñadas para dominar cada sendero,
                    desde las bajadas más agresivas hasta los recorridos
                    más técnicos.
                </p>
            </div>

            <!-- Cards -->
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

                <!-- Bicicleta 1 -->
                <article class="group overflow-hidden rounded-2xl border border-zinc-800 bg-zinc-950">
                    <div class="flex h-72 items-center justify-center bg-zinc-900 p-8">
                        <img
                            src="/images/bike-1.webp"
                            alt="Mountain bike"
                            class="h-full w-full object-contain transition duration-500 group-hover:scale-105"
                        />
                    </div>

                    <div class="p-6">
                        <p class="text-sm text-emerald-500">
                            Trail
                        </p>

                        <h3 class="mt-2 text-2xl font-bold">
                            Santa Cruz Hightower
                        </h3>

                        <p class="mt-3 text-zinc-400">
                            Control y rendimiento para los senderos más exigentes.
                        </p>

                        <div class="mt-6 flex items-center justify-between">
                            <span class="text-xl font-bold">
                                $4,299
                            </span>

                            <a
                                href="#"
                                class="rounded-lg bg-emerald-600 px-4 py-2 text-sm font-semibold transition hover:bg-emerald-500"
                            >
                                Ver bicicleta
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Bicicleta 2 -->
                <article class="group overflow-hidden rounded-2xl border border-zinc-800 bg-zinc-950">
                    <div class="flex h-72 items-center justify-center bg-zinc-900 p-8">
                        <img
                            src="/images/bike-2.webp"
                            alt="Mountain bike"
                            class="h-full w-full object-contain transition duration-500 group-hover:scale-105"
                        />
                    </div>

                    <div class="p-6">
                        <p class="text-sm text-emerald-500">
                            Enduro
                        </p>

                        <h3 class="mt-2 text-2xl font-bold">
                            Nomad
                        </h3>

                        <p class="mt-3 text-zinc-400">
                            Diseñada para bajar rápido y superar cualquier terreno.
                        </p>

                        <div class="mt-6 flex items-center justify-between">
                            <span class="text-xl font-bold">
                                $3,899
                            </span>

                            <a
                                href="#"
                                class="rounded-lg bg-emerald-600 px-4 py-2 text-sm font-semibold transition hover:bg-emerald-500"
                            >
                                Ver bicicleta
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Bicicleta 3 -->
                <article class="group overflow-hidden rounded-2xl border border-zinc-800 bg-zinc-950">
                    <div class="flex h-72 items-center justify-center bg-zinc-900 p-8">
                        <img
                            src="/images/bike-3.webp"
                            alt="Mountain bike"
                            class="h-full w-full object-contain transition duration-500 group-hover:scale-105"
                        />
                    </div>

                    <div class="p-6">
                        <p class="text-sm text-emerald-500">
                            Downhill
                        </p>

                        <h3 class="mt-2 text-2xl font-bold">
                            V10
                        </h3>

                        <p class="mt-3 text-zinc-400">
                            Velocidad, estabilidad y máximo control en descenso.
                        </p>

                        <div class="mt-6 flex items-center justify-between">
                            <span class="text-xl font-bold">
                                $5,199
                            </span>

                            <a
                                href="#"
                                class="rounded-lg bg-emerald-600 px-4 py-2 text-sm font-semibold transition hover:bg-emerald-500"
                            >
                                Ver bicicleta
                            </a>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </section>
</template>