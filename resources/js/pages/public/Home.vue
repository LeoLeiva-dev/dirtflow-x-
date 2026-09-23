<script setup lang="ts">
import Categories from '@/components/home/Categories.vue';
import FeaturedBikes from '@/components/home/FeaturedBikes.vue';
import Footer from '@/components/home/Footer.vue';
import Hero from '@/components/home/Hero.vue';
import Navbar from '@/components/home/Navbar.vue';
import WhyDirtFlow from '@/components/home/WhyDirtFlow.vue';
</script>

<template>
    <div>
        <Navbar />
        <Hero />
        <FeaturedBikes />
        <Categories />
        <WhyDirtFlow />
        <Footer />
    </div>
</template>
