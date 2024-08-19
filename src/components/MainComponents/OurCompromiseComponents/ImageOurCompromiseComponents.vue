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
        width: 1400px;
        position: absolute;

        margin-top: 115px;
    }
</style>
