<script setup>
import { reactive } from 'vue'
import LogosInstagram from '../../assets/logo-instagram.svg'
import LogosFacebook from '../../assets/logo-facebook.svg'
import LogoLinkedin from '../../assets/logo-linkedin.svg'

const socialmedia = reactive({
    title: 'REDES SOCIAIS',
})
</script>s
    import { reactive } from 'vue'

    import logoFacebook from '../../assets/logo-facebook.svg'
    import logoLinkedin from '../../assets/logo-linkedin.svg'
    import logoInstagram from '../../assets/logo-instagram.svg'

    const socialmedia = reactive({
        title: 'REDES SOCIAIS',
        logos: [logoFacebook, logoLinkedin, logoInstagram],
        links: ['https://www.facebook.com/aquiepabu', 'https://br.linkedin.com/company/aquiepabu', 'https://www.instagram.com/pabuenergia/?igshid=MzRlODBiNWFlZA%3D%3D']
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
        
        <div class="align">
            <div class="socialmedia__logos" v-for="i in socialmedia.logos.length">
                <a :href="socialmedia.links[i - 1]" target="_blank">
                    <img :src="socialmedia.logos[i - 1]">
                </a>
            </div>
        </div>
    </div>

</template>

<style scoped>
    .socialmedia{
        width: 80%;
    }

    .socialmedia__title{
        font-size: 19px;
        font-weight: 600;
        color: #FC8539;
    }

    .align{
        display: flex;
        margin: 14px 0px 30px 0px;
    }
</style>