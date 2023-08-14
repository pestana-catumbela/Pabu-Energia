<script setup>
    import { reactive } from 'vue'

    const ourMission = reactive({
        title: 'Iluminando o caminho para o futuro ',
        title_bold: 'sustentável:',
        text: '60 anos oferencendo a combinação perfeita de ',
        text_bold1: 'qualidade, ',
        text_bold2: 'preço ',
        text__bold3: 'velocidade de entrega.',
        text_e: 'e '
    })
</script>


<template>
    <div class="mission">
        <div class="mission__container">
            <div class="mission__container__title">
                <span class="mission__container__title__nobold" v-html="ourMission.title"></span>
                <span class="mission__container__title__bold" v-html="ourMission.title_bold"></span>
            </div>

            <div class="mission__container__text">
                <span class="mission__container__text__nobold" v-html="ourMission.text"></span>
                <span class="mission__container__text__bold" v-html="ourMission.text_bold1"></span>
                <span class="mission__container__text__bold" v-html="ourMission.text_bold2"></span>
                <span class="mission__container__text__text_e" v-html="ourMission.text_e"></span>
                <span class="mission__container__text__bold" v-html="ourMission.text__bold3"></span>
            </div>
        </div>
    </div>
</template>


<style scoped>
    .mission{
        display: flex;
        justify-content: center;
    }

    .mission__container{
        width: 80%;
        margin: 120px 0px;
    }

    .mission__container__title{
        width: 400px;
        font-size: 40px;
        margin: 0px 0px 40px 0px;
    }

    .mission__container__title__nobold{
        font-weight: 500;
    }

    .mission__container__title__bold{
        font-weight: 700;
    }

    .mission__container__text{
        width: 475px;
        font-size: 40px;
    }

    .mission__container__text__nobold{
        font-weight: 400;
    }

    .mission__container__text__bold{
        font-weight: 600;
    }
</style>
