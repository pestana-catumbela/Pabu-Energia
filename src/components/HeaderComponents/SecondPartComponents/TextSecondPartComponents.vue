<script setup>
    import { ref } from 'vue'

    const text1 = ref('Impulsione seu futuro')
    const text2 = ref('com energia renovável.')
</script>


<template>
    <div class="bg">
        <div class="bg__text">
            <span v-html="text1" class="bg__text__element1"></span>
            <span v-html="text2" class="bg__text__element2"></span>
        </div>
    </div>
</template>


<style scoped>
    .bg{
        display: flex;
        justify-content: center;
    }

    .bg__text{
        width: 80%;
        top: 350px;
        color: #FFFFFF;
        position: absolute;

        display: flex;
        flex-direction: column;
    }

    .bg__text__element1{
        font-size: 50px;
        font-weight: 700;
    }

    .bg__text__element2{
        font-size: 50px;
        font-weight: 700;
    }
</style>
