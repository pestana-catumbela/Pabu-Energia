<script setup>
    import { reactive } from 'vue'

    const chanels = reactive ({
        title: 'CANAIS DE ATENDIMENTO',
        subtitle: 'Televendas:',
        number: '(11) 3618-5800',
        time_open: 'Segundas a sexta: das 8h às 18h'
    })

    const media = reactive({
        title: 'Fale Conosco:',
        email: 'pabuenergia@pabuenergia.com.br'
    })
</script>

<template>
    <div class="footercomponents">
        <div class="footercomponents__chanels__box__title">
            <span class="footercomponents__chanels__title" v-html="chanels.title"></span>
        </div>

        <div class="footercomponents__chanels__box__text">
            <span class="footercomponents__chanels__subtitle" v-html="chanels.subtitle"></span>
            <a href="tel:551136185800" class="link__number">
                <span class="footercomponents__chanels__number" v-html="chanels.number"></span>
            </a>
            <span class="footercomponents__chanels__timeopen" v-html="chanels.time_open"></span>
        </div>

        <div class="footercomponents__media">
            <span class="footercomponents__media__title" v-html="media.title"></span>
            <a href="mailto:pabuenergia@pabuenergia.com.br" class="link__email">
                <span class="footercomponents__media__email" v-html="media.email"></span>
            </a>
        </div>
    </div>
</template>

<style scoped>
    .footercomponents{
        width: 80%;
        display: flex;
        flex-direction: column;
        margin: 80px 0 0 0;
    }

    .footercomponents__chanels__box__title{
        margin: 0px 0px 8px 0px;
    }

    .footercomponents__chanels__title{
        font-size: 19px;
        color: #FF8737;
        font-weight: 600;
    }

    .footercomponents__chanels__box__text{
        display: flex;
        flex-direction: column;

        margin: 0px 0px 20px 0px;
    }

    .footercomponents__chanels__subtitle{
        font-weight: 500;
        margin: 0px 0px 4px 0px;
    }

    .footercomponents__media{
        display: flex;
        flex-direction: column;

        font-weight: 500;

        margin: 0px 0px 30px 0px;
    }

    .link__number{
        width: 110px;
        color: #000000;
        text-decoration: none;
    }

    .link__email{
        width: 290px;
        color: #000000;
        text-decoration: none;
    }
</style>