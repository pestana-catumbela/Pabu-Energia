<script setup>
    import { ref } from 'vue'

    const copyrightInfo = ref('Pacaembu Autopeças - CNPJ 61.295.473/0001-58 - I.E. 342.657')
</script>

<template>
    <div class="copyright">
        <span class="copyright__about" v-html="copyrightInfo"></span>
    </div>
</template>

<style scoped>
    .copyright{
        width: 80%;
        margin: 0 0 40px 0;
        padding: 40px 0px 0px 0px;

        border-top: 2px SOLID #CDCDCD;
    }
    .copyright__about{
        font-size: 17px;
        color: #666666;
    } 
</style>