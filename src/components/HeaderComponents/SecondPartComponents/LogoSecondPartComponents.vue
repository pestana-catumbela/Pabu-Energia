<script setup>
    import pabuEnergia from '../../../assets/pabuenergia.png'
</script>


<template>
    <div class="pabuenergia">
        <div class="pabuenergia__logo">
            <img :src="pabuEnergia" class="pabuenergia__logo__element" alt="Logo da Pabu Energia"/>
        </div>
    </div>
</template>


<style scoped>
    .pabuenergia{
        display: flex;
        justify-content: center;
    }

    .pabuenergia__logo{
        width: 80%;
    }

    .pabuenergia__logo__element{
        top: 230px;
        width: 320px;

        position: absolute;
    }
</style>
