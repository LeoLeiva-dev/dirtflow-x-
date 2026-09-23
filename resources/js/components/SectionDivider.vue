<template>
    <div class="relative flex items-center justify-center py-8">
        <!-- Línea -->
        <div class="relative h-px w-full max-w-5xl overflow-hidden bg-zinc-800">
            <!-- Luz en movimiento -->
            <div class="section-divider-light"></div>
        </div>
    </div>
</template>

<style scoped>
.section-divider-light {
    position: absolute;
    top: 0;
    left: -20%;
    width: 20%;
    height: 100%;
    background: linear-gradient(
        90deg,
        transparent,
        rgba(16, 185, 129, 0.9),
        transparent
    );
    filter: blur(1px);
    animation: section-divider-flow 4s ease-in-out infinite;
}

@keyframes section-divider-flow {
    0% {
        transform: translateX(0);
    }

    100% {
        transform: translateX(600%);
    }
}
</style>
