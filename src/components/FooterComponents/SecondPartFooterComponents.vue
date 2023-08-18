<script setup>
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