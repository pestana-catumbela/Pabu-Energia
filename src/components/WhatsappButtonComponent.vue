<script setup>
    import whatsappIcon from '../assets/whatsapp_icon.png'
</script>


<template>
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=+5511993807756&text=Olá%2C%20Essa%20é%20uma%20mensagem%20de%20teste." target="_blank" class="whatsapp__link">
            <img :src="whatsappIcon" alt="Ícone do Whatsapp" class="whatsapp__link__icon"/>
        </a>
    </div>
</template>


<style scoped>
    .whatsapp{
        position: fixed;
        right: 30px;
        bottom: 30px;
    }

    /* WHATSAPP BUTTON EVENT */
    .whatsapp__link__icon{
        width: 40px;
        height: 40px;

        animation-name: pulsar;
        animation-duration: 3s;
        animation-delay: 1s;
        animation-direction: alternate;
        animation-iteration-count: infinite;
        
    }

    @keyframes pulsar {
        0%{
            width: 40px;
            height: 40px;
        }
        100%{
            width: 60px;
            height: 60px;
        }
    }
</style>
