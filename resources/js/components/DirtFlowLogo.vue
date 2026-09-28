<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { home } from '@/routes';

defineProps<{
    href?: string;
}>();
</script>

<template>
    <Link
        :href="href ?? home()"
        class="text-2xl font-bold tracking-tight text-white transition hover:text-zinc-200"
        aria-label="DirtFlow X"
    >
        DirtFlow <span class="text-emerald-500">X</span>
    </Link>
</template>
