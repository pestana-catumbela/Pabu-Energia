<script setup>
    import { reactive } from 'vue'

    const chanels = reactive ({
        title: 'CANAIS DE ATENDIMENTO',
        subtitle: 'Televendas:',
        number: '(11) 4822-6364',
        time_open: 'Segundas a sexta: das 8h às 18h',
        time_open_weekend: 'Sábados: das 8h às 14h'
    })

    const media = reactive({
        title: 'Fale Conosco:',
        email: 'sac@pacaembu.com.br'
    })
</script>

<template>
    <div class="footercomponents">
        <div class="footercomponents__chanels__box__title">
            <span class="footercomponents__chanels__title" v-html="chanels.title"></span>
        </div>

        <div class="footercomponents__chanels__box__text">
            <span class="footercomponents__chanels__subtitle" v-html="chanels.subtitle"></span>
            <span class="footercomponents__chanels__number" v-html="chanels.number"></span>
            <span class="footercomponents__chanels__timeopen" v-html="chanels.time_open"></span>
            <span class="footercomponents__chanels__timeopenweekend" v-html="chanels.time_open_weekend"></span>
        </div>

        <div class="footercomponents__media">
            <span class="footercomponents__media__title" v-html="media.title"></span>
            <span class="footercomponents__media__title" v-html="media.email"></span>
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
</style>