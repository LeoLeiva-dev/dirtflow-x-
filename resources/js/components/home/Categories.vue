<template>
    <section class="bg-zinc-950 px-6 py-24 text-white">
        <div class="mx-auto max-w-7xl">

            <!-- Encabezado -->
            <div class="mb-12">
                <p class="text-sm font-semibold uppercase tracking-[0.3em] text-emerald-500">
                    Explora
                </p>

                <h2 class="mt-3 text-4xl font-black tracking-tight md:text-5xl">
                    Encuentra tu terreno
                </h2>

                <p class="mt-4 max-w-2xl text-zinc-400">
                    Elige la bicicleta adecuada para el tipo de sendero
                    que quieres dominar.
                </p>
            </div>

            <!-- Categorías -->
            <div class="grid gap-6 md:grid-cols-3">

                <!-- Trail -->
                <a
                    href="/bikes?category=trail"
                    class="group relative flex min-h-[320px] items-end overflow-hidden rounded-2xl border border-zinc-800 bg-zinc-900"
                >
                    <img
                        src="/images/category-trail.webp"
                        alt="Trail"
                        class="absolute inset-0 h-full w-full object-cover transition duration-500 group-hover:scale-105"
                    />

                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>

                    <div class="relative z-10 p-6">
                        <p class="text-sm font-semibold uppercase tracking-widest text-emerald-500">
                            Categoría
                        </p>

                        <h3 class="mt-2 text-3xl font-black">
                            Trail
                        </h3>

                        <p class="mt-2 text-sm text-zinc-300">
                            Versatilidad para subir, bajar y explorar.
                        </p>

                        <span class="mt-5 inline-block text-sm font-semibold text-white transition group-hover:text-emerald-500">
                            Explorar →
                        </span>
                    </div>
                </a>

                <!-- Enduro -->
                <a
                    href="/bikes?category=enduro"
                    class="group relative flex min-h-[320px] items-end overflow-hidden rounded-2xl border border-zinc-800 bg-zinc-900"
                >
                    <img
                        src="/images/category-enduro.webp"
                        alt="Enduro"
                        class="absolute inset-0 h-full w-full object-cover transition duration-500 group-hover:scale-105"
                    />

                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>

                    <div class="relative z-10 p-6">
                        <p class="text-sm font-semibold uppercase tracking-widest text-emerald-500">
                            Categoría
                        </p>

                        <h3 class="mt-2 text-3xl font-black">
                            Enduro
                        </h3>

                        <p class="mt-2 text-sm text-zinc-300">
                            Más recorrido. Más velocidad. Más adrenalina.
                        </p>

                        <span class="mt-5 inline-block text-sm font-semibold text-white transition group-hover:text-emerald-500">
                            Explorar →
                        </span>
                    </div>
                </a>

                <!-- Downhill -->
                <a
                    href="/bikes?category=downhill"
                    class="group relative flex min-h-[320px] items-end overflow-hidden rounded-2xl border border-zinc-800 bg-zinc-900"
                >
                    <img
                        src="/images/category-downhill.webp"
                        alt="Downhill"
                        class="absolute inset-0 h-full w-full object-cover transition duration-500 group-hover:scale-105"
                    />

                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>

                    <div class="relative z-10 p-6">
                        <p class="text-sm font-semibold uppercase tracking-widest text-emerald-500">
                            Categoría
                        </p>

                        <h3 class="mt-2 text-3xl font-black">
                            Downhill
                        </h3>

                        <p class="mt-2 text-sm text-zinc-300">
                            Diseñada para atacar cada descenso.
                        </p>

                        <span class="mt-5 inline-block text-sm font-semibold text-white transition group-hover:text-emerald-500">
                            Explorar →
                        </span>
                    </div>
                </a>

            </div>
        </div>
    </section>
</template>