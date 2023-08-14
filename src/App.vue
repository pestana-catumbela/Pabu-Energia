<script setup>
  //SEO CODE VUE3
  import { useHead } from '@vueuse/head'
  import { computed, reactive } from 'vue'
  import HeaderComponent from './components/HeaderComponent.vue'
  import MainComponent from './components/MainComponent.vue';

  const siteInfo = reactive({
    title: 'PabuEnergia',
    description: ''
  })

  useHead({
    title: computed(() => siteInfo.title),
    meta: [
      {
        name: 'description',
        description: computed(() => siteInfo.description)
      }
    ]
  })
</script>


<template>
  <header>
    <HeaderComponent />
  </header>

  <main>
    <MainComponent />
  </main>
</template>


<style scoped></style>
