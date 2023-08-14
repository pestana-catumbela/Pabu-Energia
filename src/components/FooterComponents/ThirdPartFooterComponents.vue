<script setup>
import { ref } from 'vue'

const copyrightInfo = ref('Pacaembu Autopeças - CNPJ 61.295.473/0001-58 - I.E. 342.657')
</script>

<template>
    <div class="copyright">
        <span class="copyright_about" v-html="copyrightInfo"></span>
    </div>
</template>

<style scoped>

.copyright {
    width: 80%;
    margin: 40px 0;
}
.copyright_about{
    font-size: 18px;
    font-weight: 400;
}
   
</style>
