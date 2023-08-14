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
        top: 200px;
        left: 62px;
        width: 1200px;
        height: 500px;

        position: relative;
    }
</style>
