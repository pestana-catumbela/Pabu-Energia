<script setup>
import { reactive } from 'vue'
import LogosInstagram from '../../assets/logo-instagram.svg'
import LogosFacebook from '../../assets/logo-facebook.svg'
import LogoLinkedin from '../../assets/logo-linkedin.svg'

const socialmedia = reactive({
    title: 'REDES SOCIAIS',
})
</script>

<template>
    <div class="socialmedia">
        <span class="socialmedia__title" v-html="socialmedia.title"></span>
        <div class="logos">
            <div class="logos__facebook">
                <a href="https://www.facebook.com/aquiepabu/?locale=pt_BR" target="_blank"><img :src="LogosFacebook" alt=""></a>
            </div>
            <div class="logos__linkedin">
                <a href="https://br.linkedin.com/company/aquiepabu" target="_blank"><img :src="LogoLinkedin" alt=""></a>
            </div>
            <div class="logos__instagram">
                <a href="https://instagram.com/pabuenergia?igshid=MzRlODBiNWFlZA==" target="_blank"><img :src="LogosInstagram" alt=""></a>
            </div>
        </div>
        <hr>
    </div>
</template>

<style scoped>
.socialmedia {
    width: 80%;
}

.socialmedia__title {
    color: #FC8539;
    font-weight: 650;
    font-size: large;
}

.logos {
    display: flex;
    gap: 10px;
    margin-top: 18px;
    margin-bottom: 30px;
    cursor: pointer;
}
</style>