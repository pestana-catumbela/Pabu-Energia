<script setup>
    import compromiseImage from '../../../assets/compromise_image.png'
</script>


<template>
    <div class="compromise">
        <img class="compromise__image" :src="compromiseImage"/>
    </div>
</template>


<style scoped>
    .compromise__image{
        /* top: 1480px; */
        /* left: 696px; */
        top: 210%;
        left: 45.8%;
        width: 1200px;
        height: 600px;

        position: absolute;
    }
</style>
