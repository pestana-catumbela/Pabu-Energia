<script setup>
    import { ref } from 'vue'
    import busIcon from '../../assets/bus_icon.png'

    const buttonText = ref('Conheça nossos produtos')
</script>


<template>
    <div>
        <div class="bus">
            <img :src="busIcon" alt="Imagem do ônibus" class="bus__image"/>
        </div>

        <div class="button">
            <a href="https://pabu.com.br/energia" target="_blank">
                <button class="button__products" v-html="buttonText"></button>
            </a>
        </div>
    </div>
</template>


<style scoped>
    .bus{
        width: 80%;
        text-align: center;
    }

    .bus__image{
        width: 600px;
    }

    .button{
        text-align: center;
        margin: 25px 0px 0px 0px;
    }

    .button__products{
        border: none;
        cursor: pointer;
        color: #FFFFFF;
        background-color: #FF832D;
        border-radius: 30px;
        padding: 20px 30px;
        font-weight: 600;
        font-size: 20px;
    }

    .button__products:hover{
        border: none;
        cursor: pointer;
        color: #FFFFFF;
        background-color: #db6d1e;
        border-radius: 30px;
        padding: 20px 30px;
        font-weight: 600;
        font-size: 20px;
    }

    @media (max-width: 799px){
        .bus__image{
            width: 500px;
        }

        .button__products{
            border: none;
            cursor: pointer;
            color: #FFFFFF;
            background-color: #FF832D;
            border-radius: 30px;
            padding: 20px 30px;
            font-weight: 600;
            font-size: 17px;
        }

        .button__products:hover{
            border: none;
            cursor: pointer;
            color: #FFFFFF;
            background-color: #db6d1e;
            border-radius: 30px;
            padding: 20px 30px;
            font-weight: 600;
            font-size: 17px;
        }
    }

    @media (max-width: 600px){
        .bus__image{
            width: 400px;
        }

        .button__products{
            border: none;
            cursor: pointer;
            color: #FFFFFF;
            background-color: #FF832D;
            border-radius: 30px;
            padding: 20px 30px;
            font-weight: 600;
            font-size: 14px;
        }

        .button__products:hover{
            border: none;
            cursor: pointer;
            color: #FFFFFF;
            background-color: #db6d1e;
            border-radius: 30px;
            padding: 20px 30px;
            font-weight: 600;
            font-size: 14px;
        }
    }
</style>
