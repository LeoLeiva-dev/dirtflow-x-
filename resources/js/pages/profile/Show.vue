<script setup lang="ts">
import { Head, router, usePage } from '@inertiajs/vue3';
import { ArrowLeft, MapPin, Phone, User, Mail } from 'lucide-vue-next';
import { computed, reactive, ref } from 'vue';

interface Email {
    id: number;
    email: string;
    principal: boolean;
}

interface Telefono {
    id: number;
    numero: string;
    tipo: string | null;
    principal: boolean;
}

interface Direccion {
    id: number;
    tipo: string;
    provincia: string;
    canton: string;
    distrito: string;
    detalle: string;
    principal: boolean;
}

interface Persona {
    nombre: string;
    ap1: string;
    ap2: string | null;
    identificacion: string;
    fecha_nacimiento: string | null;
    emails: Email[];
    telefonos: Telefono[];
    direcciones: Direccion[];
}

interface ProfileUser {
    id: number;
    email: string;
    persona: Persona | null;
}

const page = usePage();

const user = computed<ProfileUser>(() => {
    const props = page.props as unknown as {
        user: ProfileUser;
    };

    return props.user;
});

const persona = computed(() => user.value.persona);

const telefonoPrincipal = computed(() => {
    return (
        persona.value?.telefonos.find((telefono) => telefono.principal) ??
        persona.value?.telefonos[0] ??
        null
    );
});

const direccionPrincipal = computed(() => {
    return (
        persona.value?.direcciones.find((direccion) => direccion.principal) ??
        persona.value?.direcciones[0] ??
        null
    );
});

const isSaving = ref(false);

const form = reactive({
    nombre: persona.value?.nombre ?? '',
    ap1: persona.value?.ap1 ?? '',
    ap2: persona.value?.ap2 ?? '',
    identificacion: persona.value?.identificacion ?? '',
    fecha_nacimiento: persona.value?.fecha_nacimiento ?? '',
    telefono: telefonoPrincipal.value?.numero ?? '',
    provincia: direccionPrincipal.value?.provincia ?? '',
    canton: direccionPrincipal.value?.canton ?? '',
    distrito: direccionPrincipal.value?.distrito ?? '',
    detalle: direccionPrincipal.value?.detalle ?? '',
});

const saveProfile = () => {
    isSaving.value = true;

    router.patch('/perfil', form, {
        preserveScroll: true,
        onFinish: () => {
            isSaving.value = false;
        },
    });
};

const goToDashboard = () => {
    router.visit('/dashboard');
};
</script>

<template>
    <Head title="Mi perfil" />

    <div class="min-h-screen bg-zinc-950 px-6 py-10 text-white md:px-10">
        <main class="mx-auto max-w-5xl">
            <button
                type="button"
                @click="goToDashboard"
                class="mb-10 flex items-center gap-2 text-sm text-zinc-500 transition hover:text-emerald-500"
            >
                <ArrowLeft :size="17" />
                Volver al panel
            </button>

            <header class="mb-10">
                <p
                    class="text-xs font-semibold tracking-[0.3em] text-emerald-500 uppercase"
                >
                    DirtFlow X / Perfil
                </p>

                <h1 class="mt-3 text-4xl font-black tracking-tight md:text-5xl">
                    Mi perfil
                </h1>

                <p class="mt-3 text-zinc-500">
                    Administra la información asociada a tu cuenta.
                </p>
            </header>

            <div v-if="persona" class="space-y-5">
                <!-- Información personal -->
                <section class="border border-zinc-800 bg-zinc-900/60 p-6">
                    <div class="flex items-center gap-3">
                        <User
                            :size="21"
                            :stroke-width="1.6"
                            class="text-emerald-500"
                        />

                        <div>
                            <h2 class="font-bold">Información personal</h2>

                            <p class="mt-1 text-xs text-zinc-600">
                                Datos básicos de tu cuenta.
                            </p>
                        </div>
                    </div>

                    <div class="mt-6 grid gap-5 sm:grid-cols-2">
                        <div>
                            <label
                                for="nombre"
                                class="text-xs tracking-wider text-zinc-600 uppercase"
                            >
                                Nombre
                            </label>

                            <input
                                id="nombre"
                                v-model="form.nombre"
                                type="text"
                                class="mt-2 w-full border border-zinc-800 bg-zinc-950 px-3 py-2.5 text-sm text-white transition outline-none focus:border-emerald-500"
                            />
                        </div>

                        <div>
                            <label
                                for="ap1"
                                class="text-xs tracking-wider text-zinc-600 uppercase"
                            >
                                Primer apellido
                            </label>

                            <input
                                id="ap1"
                                v-model="form.ap1"
                                type="text"
                                class="mt-2 w-full border border-zinc-800 bg-zinc-950 px-3 py-2.5 text-sm text-white transition outline-none focus:border-emerald-500"
                            />
                        </div>

                        <div>
                            <label
                                for="ap2"
                                class="text-xs tracking-wider text-zinc-600 uppercase"
                            >
                                Segundo apellido
                            </label>

                            <input
                                id="ap2"
                                v-model="form.ap2"
                                type="text"
                                class="mt-2 w-full border border-zinc-800 bg-zinc-950 px-3 py-2.5 text-sm text-white transition outline-none focus:border-emerald-500"
                            />
                        </div>

                        <div>
                            <label
                                for="identificacion"
                                class="text-xs tracking-wider text-zinc-600 uppercase"
                            >
                                Identificación
                            </label>

                            <input
                                id="identificacion"
                                v-model="form.identificacion"
                                type="text"
                                class="mt-2 w-full border border-zinc-800 bg-zinc-950 px-3 py-2.5 text-sm text-white transition outline-none focus:border-emerald-500"
                            />
                        </div>

                        <div>
                            <label
                                for="fecha_nacimiento"
                                class="text-xs tracking-wider text-zinc-600 uppercase"
                            >
                                Fecha de nacimiento
                            </label>

                            <input
                                id="fecha_nacimiento"
                                v-model="form.fecha_nacimiento"
                                type="date"
                                class="mt-2 w-full border border-zinc-800 bg-zinc-950 px-3 py-2.5 text-sm text-white transition outline-none focus:border-emerald-500"
                            />
                        </div>
                    </div>
                </section>

                <!-- Contacto -->
                <section class="border border-zinc-800 bg-zinc-900/60 p-6">
                    <div class="flex items-center gap-3">
                        <Mail
                            :size="21"
                            :stroke-width="1.6"
                            class="text-emerald-500"
                        />

                        <div>
                            <h2 class="font-bold">Contacto</h2>

                            <p class="mt-1 text-xs text-zinc-600">
                                Información utilizada para comunicarte.
                            </p>
                        </div>
                    </div>

                    <div class="mt-6 grid gap-5 sm:grid-cols-2">
                        <div>
                            <label
                                for="email"
                                class="text-xs tracking-wider text-zinc-600 uppercase"
                            >
                                Correo de cuenta
                            </label>

                            <input
                                id="email"
                                :value="user.email"
                                type="email"
                                disabled
                                class="mt-2 w-full cursor-not-allowed border border-zinc-800 bg-zinc-950/50 px-3 py-2.5 text-sm text-zinc-500 outline-none"
                            />

                            <p class="mt-2 text-xs text-zinc-700">
                                El correo de acceso no se modifica desde aquí.
                            </p>
                        </div>

                        <div>
                            <label
                                for="telefono"
                                class="text-xs tracking-wider text-zinc-600 uppercase"
                            >
                                Teléfono principal
                            </label>

                            <div class="relative">
                                <Phone
                                    :size="17"
                                    :stroke-width="1.6"
                                    class="absolute top-1/2 left-3 -translate-y-1/2 text-zinc-600"
                                />

                                <input
                                    id="telefono"
                                    v-model="form.telefono"
                                    type="text"
                                    class="mt-2 w-full border border-zinc-800 bg-zinc-950 py-2.5 pr-3 pl-10 text-sm text-white transition outline-none focus:border-emerald-500"
                                />
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Dirección -->
                <section class="border border-zinc-800 bg-zinc-900/60 p-6">
                    <div class="flex items-center gap-3">
                        <MapPin
                            :size="21"
                            :stroke-width="1.6"
                            class="text-emerald-500"
                        />

                        <div>
                            <h2 class="font-bold">Dirección principal</h2>

                            <p class="mt-1 text-xs text-zinc-600">
                                Dirección utilizada para tus pedidos.
                            </p>
                        </div>
                    </div>

                    <div class="mt-6 grid gap-5 sm:grid-cols-2">
                        <div>
                            <label
                                for="provincia"
                                class="text-xs tracking-wider text-zinc-600 uppercase"
                            >
                                Provincia
                            </label>

                            <input
                                id="provincia"
                                v-model="form.provincia"
                                type="text"
                                class="mt-2 w-full border border-zinc-800 bg-zinc-950 px-3 py-2.5 text-sm text-white transition outline-none focus:border-emerald-500"
                            />
                        </div>

                        <div>
                            <label
                                for="canton"
                                class="text-xs tracking-wider text-zinc-600 uppercase"
                            >
                                Cantón
                            </label>

                            <input
                                id="canton"
                                v-model="form.canton"
                                type="text"
                                class="mt-2 w-full border border-zinc-800 bg-zinc-950 px-3 py-2.5 text-sm text-white transition outline-none focus:border-emerald-500"
                            />
                        </div>

                        <div>
                            <label
                                for="distrito"
                                class="text-xs tracking-wider text-zinc-600 uppercase"
                            >
                                Distrito
                            </label>

                            <input
                                id="distrito"
                                v-model="form.distrito"
                                type="text"
                                class="mt-2 w-full border border-zinc-800 bg-zinc-950 px-3 py-2.5 text-sm text-white transition outline-none focus:border-emerald-500"
                            />
                        </div>

                        <div>
                            <label
                                for="detalle"
                                class="text-xs tracking-wider text-zinc-600 uppercase"
                            >
                                Detalle
                            </label>

                            <input
                                id="detalle"
                                v-model="form.detalle"
                                type="text"
                                class="mt-2 w-full border border-zinc-800 bg-zinc-950 px-3 py-2.5 text-sm text-white transition outline-none focus:border-emerald-500"
                            />
                        </div>
                    </div>
                </section>

                <!-- Guardar -->
                <div
                    class="flex flex-col gap-4 border-t border-zinc-800 pt-6 sm:flex-row sm:items-center sm:justify-between"
                >
                    <p class="text-xs text-zinc-600">
                        Los cambios se aplicarán a tu información de cuenta.
                    </p>

                    <button
                        type="button"
                        :disabled="isSaving"
                        @click="saveProfile"
                        class="border border-emerald-500 bg-emerald-500 px-6 py-3 text-sm font-bold text-zinc-950 transition hover:bg-emerald-400 disabled:cursor-not-allowed disabled:opacity-50"
                    >
                        {{ isSaving ? 'Guardando...' : 'Guardar cambios' }}
                    </button>
                </div>
            </div>

            <div
                v-else
                class="border border-zinc-800 bg-zinc-900/60 p-8 text-center"
            >
                <p class="text-zinc-400">
                    Esta cuenta todavía no tiene información personal asociada.
                </p>
            </div>
        </main>
    </div>
</template>
