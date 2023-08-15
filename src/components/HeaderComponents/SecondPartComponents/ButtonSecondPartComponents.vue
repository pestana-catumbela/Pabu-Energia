<script setup>
    import { ref } from 'vue'

    const buttonText = ref('Conheça mais aqui')
</script>


<template>
    <div class="button">
        <div class="button__element">
            <a href="#">
                <button class="button__element__link" v-html="buttonText"></button>
            </a>
        </div>
    </div>
</template>


<style scoped>
    .button{
        display: flex;
        justify-content: center;
    }

    .button__element{
        width: 80%;
    }

    .button__element__link{
        position: absolute;
        top: 1220px;

        font-size: 25px;
        font-weight: 600;
        padding: 15px 50px 15px 50px;
        border-radius: 40px;
        cursor: pointer;
        border: none;

        background-color: #FF832D;
        color: #FFFFFF;
    }
</style>
