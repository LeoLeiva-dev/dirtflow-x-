<script setup lang="ts">
import Categories from '@/components/home/Categories.vue';
import FeaturedBikes from '@/components/home/FeaturedBikes.vue';
import Footer from '@/components/home/Footer.vue';
import Hero from '@/components/home/Hero.vue';
import Navbar from '@/components/home/Navbar.vue';
import WhyDirtFlow from '@/components/home/WhyDirtFlow.vue';

interface FeaturedBike {
    id: number;
    nombre: string;
    slug: string;
    descripcion: string | null;
    precio: string;
    sku: string;
    imagen: string | null;
    activo: boolean;
    destacado: boolean;
    category: {
        id: number;
        nombre: string;
        slug: string;
    };
    inventory: {
        cantidad: number;
        stock_minimo: number;
    };
}

defineProps<{
    featuredBikes: FeaturedBike[];
}>();
</script>

<template>
    <div>
        <Navbar />
        <Hero />
        <FeaturedBikes :products="featuredBikes" />
        <Categories />
        <WhyDirtFlow />
        <Footer />
    </div>
</template>
