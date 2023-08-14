<script setup>

import {reactive} from 'vue'

    const media = reactive ({
        title: 'CANAIS DE ATENDIMENTO ',
        subtitle: 'Televendas: ',
        number: '(11) 4822-6364 ',
        openinghours: 'Segundas a sexta: das 8h às 18h ',
        openinghourstext2: 'Sábados: das 8h às 14h ',
        email: 'Fale Conosco: ',
        adressemail: 'sac@pacaembu.com.br'

    })
</script>

<template>
    <div class="media">
        <span class="media__title" v-html="media.title"></span>
        <strong class="media__subtitle" v-html="media.subtitle"></strong>
        <span class="media__number" v-html="media.number"></span>
        <span class="media__openinghours" v-html="media.openinghours"></span>
        <span class="media__openinghours2" v-html="media.openinghourstext2"></span>
        <strong class="media__email" v-html="media.email"></strong>
        <span class="media__adressemail" v-html="media.adressemail"></span>
    </div>
</template>

<style scoped>
.media {
    width: 80%;
    display: flex;
    flex-direction: column;
    margin: 80px 0 0 0;
}

.media__title {
    color: #FF8737;
    margin-bottom: 10px;
    font-weight: bold;
    font-size: large;
}

.media__subtitle {
    margin-bottom: 2px;
    font-size: large;
}

.media__openinghours2 {
    margin-bottom: 20px;
}

.media__adressemail {
    margin-bottom: 20px;
}
</style>