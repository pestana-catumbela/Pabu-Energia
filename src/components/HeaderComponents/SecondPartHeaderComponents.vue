<script setup>
    import imageHeader from '../../assets/line_header.png'
    import LogoSecondPartComponents from './SecondPartComponents/LogoSecondPartComponents.vue'
    import TextSecondPartComponents from './SecondPartComponents/TextSecondPartComponents.vue'
    import ButtonSecondPartComponents from './SecondPartComponents/ButtonSecondPartComponents.vue'
</script>


<template>
    <div class="bg">
        <div class="pabuenergialogo">
            <LogoSecondPartComponents />
        </div>

        <div class="pabuenergiatext">
            <TextSecondPartComponents />
        </div>

        <div class="buttoncomponent">
            <ButtonSecondPartComponents />
        </div>

        <div class="imageheader">
            <img :src="imageHeader" class="imageheader__element" alt="Imagem da linha Pabu (Header)"/>
        </div>
    </div>
</template>


<style scoped>
    .bg{
        background-color: rebeccapurple;
    }

    .imageheader__element{
        width: 100%;
        height: 1200px;
    }
</style>
