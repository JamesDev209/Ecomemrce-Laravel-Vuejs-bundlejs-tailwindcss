<script setup>
import Header from '../js/components/Layout/Header.vue';
import HeroBanner from '../js/components/Home/HeroBanner.vue';
import PopularCategories from '../js/components/Home/PopularCategories.vue';
import Slider from '../js/components/Home/Slider.vue';

</script>

<template>

    <Header />
    <HeroBanner />
    <div class="py-80">
        <Slider />
    </div>
    <PopularCategories />


</template>
