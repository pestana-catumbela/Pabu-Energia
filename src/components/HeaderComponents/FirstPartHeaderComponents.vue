<script setup>
    import { reactive } from 'vue'
    import LogoElement from '../../assets/logo.png'

    const infoLogo = reactive({
        title: 'PACAEMBU',
        image: LogoElement
    })
</script>


<template>
    <section class="header">
        <div class="header__bgblue">
            <div class="header__headerblue__logo">
                <img :src="infoLogo.image" alt="Logo Pacaembu" class="header__headerblue__logo__img"/>
                <span class="header__headerblue__logo__text" v-html="infoLogo.title"></span>
            </div>
        </div>
    </section>
</template>


<style scoped>
    .header{
        height: 100px;

        display: flex;
        justify-content: center;

        background-color: #023B7B;
    }

    .header__bgblue{
        width: 80%;
        height: 100px;

        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .header__headerblue__logo{
        display: flex;
        align-items: center;

        gap: 10px;
    }

    .header__headerblue__logo__img{
        width: 30px;
        height: 30px;
    }

    .header__headerblue__logo__text{
        font-size: 22px;
        font-weight: 900;
        color: #FFFFFF;
    }
</style>
