<template>
    <footer class="border-t border-zinc-800 bg-zinc-950 px-6 py-14 text-white">
        <div class="mx-auto max-w-7xl">
            <div class="grid gap-12 md:grid-cols-3">
                <!-- Marca -->
                <div>
                    <a
                        href="/"
                        class="text-2xl font-black tracking-tight transition hover:text-emerald-500"
                    >
                        DirtFlow <span class="text-emerald-500">X</span>
                    </a>

                    <p
                        class="mt-4 max-w-sm text-sm leading-relaxed text-zinc-400"
                    >
                        Bicicletas y equipamiento para quienes viven por y para
                        el sendero.
                    </p>

                    <p
                        class="mt-6 text-xs font-semibold tracking-[0.2em] text-zinc-600 uppercase"
                    >
                        MTB • Costa Rica
                    </p>
                </div>

                <!-- Navegación -->
                <div>
                    <h3
                        class="text-sm font-semibold tracking-wider text-white uppercase"
                    >
                        Navegación
                    </h3>

                    <div class="mt-5 space-y-3 text-sm text-zinc-400">
                        <a
                            href="/"
                            class="block transition hover:translate-x-1 hover:text-emerald-500"
                        >
                            Inicio
                        </a>

                        <a
                            href="/bikes"
                            class="block transition hover:translate-x-1 hover:text-emerald-500"
                        >
                            Bicicletas
                        </a>

                        <a
                            href="/accesorios"
                            class="block transition hover:translate-x-1 hover:text-emerald-500"
                        >
                            Accesorios
                        </a>

                        <a
                            href="/nosotros"
                            class="block transition hover:translate-x-1 hover:text-emerald-500"
                        >
                            Nosotros
                        </a>
                    </div>
                </div>

                <!-- Contacto -->
                <div>
                    <h3
                        class="text-sm font-semibold tracking-wider text-white uppercase"
                    >
                        Contacto
                    </h3>

                    <div class="mt-5 space-y-3 text-sm text-zinc-400">
                        <p>info@dirtflowx.com</p>
                        <p>+506 8888-8888</p>
                        <p>Costa Rica</p>
                    </div>

                    <a
                        href="/nosotros"
                        class="mt-6 inline-flex border border-zinc-800 px-4 py-2 text-sm font-semibold text-zinc-300 transition hover:border-emerald-500 hover:text-emerald-500"
                    >
                        Conoce DirtFlow X
                    </a>
                </div>
            </div>

            <!-- Bottom -->
            <div
                class="mt-14 flex flex-col gap-3 border-t border-zinc-800 pt-6 text-xs text-zinc-600 md:flex-row md:items-center md:justify-between"
            >
                <p>© 2026 DirtFlow X. Todos los derechos reservados.</p>

                <p>
                    Diseñado para explorar.
                    <span class="text-emerald-500">Construido para rodar.</span>
                </p>
            </div>
        </div>
    </footer>
</template>
