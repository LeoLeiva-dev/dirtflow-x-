<template>
    <section class="relative overflow-hidden bg-zinc-950 text-white">
        <div
            class="mx-auto flex min-h-[600px] max-w-7xl items-center px-6 py-20"
        >
            <div class="grid w-full items-center gap-12 md:grid-cols-2">
                <!-- Haz de luz verde -->
                <div
                    class="pointer-events-none absolute top-20 -left-40 h-[500px] w-[900px] rotate-[-20deg] bg-emerald-600/20 blur-3xl"
                ></div>

                <!-- Content -->
                <div class="max-w-xl">
                    <p
                        class="mb-4 text-sm font-semibold tracking-[0.3em] text-emerald-500 uppercase"
                    >
                        Ride beyond limits
                    </p>

                    <h1
                        class="text-5xl leading-tight font-black tracking-tight md:text-7xl"
                    >
                        Domina el
                        <span class="text-emerald-500">sendero.</span>
                    </h1>

                    <p
                        class="mt-6 max-w-lg text-lg leading-relaxed text-zinc-400"
                    >
                        Bicicletas de montaña diseñadas para quienes buscan
                        velocidad, control y adrenalina en cada recorrido.
                    </p>

                    <div class="mt-8 flex flex-wrap gap-4">
                        <a
                            href="/bikes"
                            class="hover:bg-esmerald-500 rounded-lg bg-emerald-600/20 px-6 py-3 font-semibold transition"
                        >
                            Explorar bicicletas
                        </a>

                        <a
                            href="#"
                            class="rounded-lg border border-zinc-700 px-6 py-3 font-semibold transition hover:border-emerald-500 hover:text-emerald-500"
                        >
                            Conocer más
                        </a>
                    </div>
                </div>

                <!-- Image -->
                <div class="relative flex justify-center">
                    <div
                        class="bg-emerald-600/20/20 absolute h-72 w-72 rounded-full blur-3xl"
                    ></div>

                    <img
                        src="/images/hero-bike.webp"
                        alt="Mountain bike"
                        class="relative z-10 w-full max-w-xl object-contain"
                    />
                </div>
            </div>
        </div>
    </section>
</template>
