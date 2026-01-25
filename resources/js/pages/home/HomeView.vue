<script setup>
import HeroBanner from '@/components/Home/HeroBanner.vue'
import PopularCategories from '@/components/Home/PopularCategories.vue'
import Slider from '@/components/Home/Slider.vue'
</script>

<template>
  <HeroBanner />

  <div class="py-80">
    <Slider />
  </div>

  <PopularCategories />
</template>
