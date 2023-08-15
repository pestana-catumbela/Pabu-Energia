
<script setup>
    import { reactive } from 'vue'
    import Logo2P from '../../assets/logo_2p.png'
    import LogoAeSolar from '../../assets/logo_aesolar.png'
    import LogoLivoltek from '../../assets/logo_livoltek.png'
    import LogoPKC from '../../assets/logo_pkc.jpg'
    import LogoGCL from '../../assets/logo_gcl.png'
    import LogoSMA from '../../assets/logo_sma.png'

    const partners = reactive({
        title: 'Parceiros',
        images: [Logo2P, LogoAeSolar, LogoLivoltek, LogoPKC, LogoGCL, LogoSMA]
    })
</script>


<template>
    <div class="partners">
        <h2 class="partners__title" v-html="partners.title"></h2>

        <div class="flex">
            <div class="partners__logos" v-for="i in partners.images.length">
                <img :src="partners.images[i - 1]" alt="Logo dos Parceiros" class="partners__logos__logo"/>
            </div>
        </div>
    </div>
</template>


<style>
    .partners{
        width: 80%;
        margin: 200px 0px 0px 0px;

        border-top: 2px SOLID #CCCCCC;
    }

    .partners__title{
        font-size: 60px;
        margin: 40px 0px 70px 0px;
        color: #002B48;
    }

    .flex{
        display: flex;
        align-items: center;
        justify-content: space-around;
    }

    .partners__logos__logo{
        width: 120px;
        filter: grayscale(100%);
    }

    .partners__btns{
        display: flex;
        justify-content: end;
        margin: 120px 0px 0px 0px;
        padding: 0px 60px 0px 0px;
        gap: 15px;
    }

    .partners__btns__left{
        cursor: pointer;
    }

    .partners__btns__right{
        cursor: pointer;
    }
</style>
