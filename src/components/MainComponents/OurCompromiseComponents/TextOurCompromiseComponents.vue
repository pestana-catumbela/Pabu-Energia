<script setup>
    import { reactive } from 'vue'

    const ourCompromiseInfos = reactive({
        title: 'Compromisso com o futuro e o desenvolvimento ',
        title_bold: 'sustentável.',
        text: `
            Apoiada pela visão de um planeta mais verde e consciente, a Pacaembu dá um passo importante ao lançar sua nova
            frente, dedicada exclusivamente a energia renovável. Essa nova empreitada representa não apenas uma extensão de 
            negócios, mas também um compromisso com o futuro e o desenvolvimento sustentável.
        `
    })
</script>


<template>
    <div class="ourcompromiseinfos">
        <div class="ourcompromiseinfos__text">
            <div class="ourcompromiseinfos__text__title">
                <span v-html="ourCompromiseInfos.title" class="ourcompromiseinfos__text__title__nobold"></span>
                <span v-html="ourCompromiseInfos.title_bold" class="ourcompromiseinfos__text__title__bold"></span>
            </div>
            
            <div  class="ourcompromiseinfos__text__div">
                <p class="ourcompromiseinfos__text__div__paragaph" v-html="ourCompromiseInfos.text"></p>
            </div>
        </div>

        <div>
            <img />
        </div>
    </div>
</template>


<style scoped>
    .ourcompromiseinfos{
        margin: 100px 0px;
    }

    .ourcompromiseinfos__text{
        color: #FFFFFF;
    }

    .ourcompromiseinfos__text__title{
        font-size: 40px;
        width: 340px;
    }

    .ourcompromiseinfos__text__title__nobold{
        font-weight: 500;
    }

    .ourcompromiseinfos__text__title__bold{
        font-weight: 800;
    }

    .ourcompromiseinfos__text__div{
        margin: 40px 0px 0px 0px;
    }

    .ourcompromiseinfos__text__div__paragaph{
        width: 440px;
        font-size: 17px;
        line-height: 27px;
        text-align: justify;
    }

    @media (max-width: 600px){
        .ourcompromiseinfos__text__div__paragaph{
            width: 390px;
            font-size: 17px;
            line-height: 27px;
            text-align: justify;
        }
    }
</style>
