<script setup>
    import { ref } from 'vue'
    import stockIcon from '../../assets/stock_icon.png'
    import branchIcon from '../../assets/branch_icon.png'
    import stateIcon from '../../assets/state_icon.png'
    import clientIcon from '../../assets/client_icon.png'

    let numberCards = ref(4)

    const iconsCard = ref([stockIcon, branchIcon, stateIcon, clientIcon])
    const titlesCard = ref(['50.000 m²', '32 filiais', '16 estados', '23.000'])
    const textsCard = ref(['em área de estoque', 'pelo Brasil', 'com filiais presentes', 'clientes satisfeitos'])
</script>


<template>
    <div class="cards">
        <div class="cards__card" v-for="i in numberCards">
            <img class="cards__card__icons" :src="iconsCard[i - 1]" />

            <div class="cards__card__titles" v-html="titlesCard[i - 1]"></div>

            <div class="cards__cards__texts" v-html="textsCard[i - 1]"></div>
        </div>
    </div>
</template>


<style scoped>
    @media (min-width: 1200px){
        .cards{
            width: 800px;
        }
    }

    .cards{
        display: flex;
        justify-content: center;
        flex-wrap: wrap;;
    }

    .cards__card{
        width: 360px;
        height: 330px;
        margin: 20px 20px;
        padding: 40px 40px 40px 40px;
        background-color: #00144A;
        color: #FFFFFF;
    }

    .cards__card__titles{
        font-size: 40px;
        margin: 100px 0px 8px 0px;
    }

    .cards__cards__texts{
        font-size: 18px;
    }
</style>
