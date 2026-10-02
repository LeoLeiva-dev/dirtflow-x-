<template>
    <section class="relative overflow-hidden bg-zinc-950 text-white">
        <!-- Ambient light -->
        <div
            class="pointer-events-none absolute top-20 -left-40 h-[500px] w-[900px] rotate-[-20deg] bg-emerald-600/20 blur-3xl"
        ></div>

        <div
            class="pointer-events-none absolute right-0 bottom-0 h-96 w-96 rounded-full bg-emerald-500/10 blur-3xl"
        ></div>

        <div
            class="relative mx-auto flex min-h-[680px] max-w-7xl items-center px-6 py-24"
        >
            <div class="grid w-full items-center gap-12 md:grid-cols-2">
                <!-- Content -->
                <div class="max-w-xl">
                    <p
                        class="mb-4 text-sm font-semibold tracking-[0.3em] text-emerald-500 uppercase"
                    >
                        DirtFlow X / Ride beyond limits
                    </p>

                    <h1
                        class="text-5xl leading-[0.95] font-black tracking-tight md:text-7xl"
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
                            class="border border-emerald-500 bg-emerald-500 px-6 py-3 font-semibold text-zinc-950 transition hover:bg-emerald-400"
                        >
                            Explorar bicicletas
                        </a>

                        <a
                            href="/nosotros"
                            class="border border-zinc-700 px-6 py-3 font-semibold text-zinc-300 transition hover:border-emerald-500 hover:text-emerald-500"
                        >
                            Conocer más
                        </a>
                    </div>
                </div>

                <!-- Image -->
                <div class="relative flex justify-center">
                    <div
                        class="absolute h-72 w-72 rounded-full bg-emerald-600/20 blur-3xl"
                    ></div>

                    <img
                        src="/images/hero-bike.webp"
                        alt="Mountain bike"
                        class="relative z-10 w-full max-w-xl object-contain drop-shadow-[0_0_45px_rgba(16,185,129,0.15)]"
                    />
                </div>
            </div>
        </div>
    </section>
</template>
