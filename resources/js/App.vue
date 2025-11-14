<script setup>
import { onMounted, nextTick, watch } from 'vue'
import { useRoute } from 'vue-router'
import AOS from 'aos'
import 'aos/dist/aos.css'

const route = useRoute()

onMounted(() => {
  AOS.init({
    duration: 800,
    once: false, // permite animaciones cada vez
  })
})

watch(() => route.fullPath, async () => {
  await nextTick()
  AOS.refreshHard()
})
</script>

<template>
  <router-view />
</template>




82 Jugados
40 Ganados
42 Perdidos Leiva
0 Empatados



0 Abandonados 
0 Abandonados 
0 Abandonados 

