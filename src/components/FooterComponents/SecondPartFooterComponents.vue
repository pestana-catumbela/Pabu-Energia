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
                <img :src="LogosFacebook" alt="">
            </div>
            <div class="logos__linkedin">
                <img :src="LogoLinkedin" alt="">
            </div>
            <div class="logos__instagram">
                <img :src="LogosInstagram" alt="">
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
}


</style>