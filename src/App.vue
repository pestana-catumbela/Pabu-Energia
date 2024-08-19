<script setup>
  //SEO CODE VUE3
  import { useHead } from '@vueuse/head'
  import { computed, reactive } from 'vue'
  import HeaderComponent from './components/HeaderComponent.vue'
  import MainComponent from './components/MainComponent.vue';
  import FooterComponent from './components/FooterComponent.vue';
import FormsComponents from './components/MainComponents/FormsComponents.vue';
  import MainComponent from './components/MainComponent.vue'
  import FooterComponent from './components/FooterComponent.vue'
  import WhatsappButtonComponent from './components/WhatsappButtonComponent.vue'
  const siteInfo = reactive({
    title: 'Pabu Energia',
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
    <WhatsappButtonComponent />
  </main>


    <footer>
      <FooterComponent />
    </footer>
  <footer>
    <FooterComponent />
  </footer>
</template>


<style scoped>
  main{
    background-image: url('./assets/line_main.png');
    background-repeat: no-repeat;
  }

  @media (max-width: 800px){
    main{
      background-image: url('');
      background-repeat: no-repeat;
      background-size: cover;
    }
  }
</style>
