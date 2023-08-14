<script setup>
    import OurCompromiseMainComponents from './MainComponents/OurCompromiseMainComponents.vue'
    import OurMissionMainComponents from './MainComponents/OurMissionMainComponents.vue'
    import CardsMainComponents from './MainComponents/CardsMainComponents.vue'
import FormsComponents from './MainComponents/FormsComponents.vue';
    // import OurPartnersMainComponents from './MainComponents/OurPartnersMainComponents.vue';
</script>


<template>
    <section class="ourcompromise">
        <OurCompromiseMainComponents />
    </section>

    <section class="ourmission">
        <OurMissionMainComponents />
    </section>

    <section class="ourcards">
        <CardsMainComponents />
    </section>

    <!-- <section class="ourpartners">
        <OurPartnersMainComponents />
    </section> -->

    <section class="Forms">
        <FormsComponents />
    </section>
</template>


<style scoped>
    .ourcompromise{
        display: flex;
        justify-content: center;

        background-color: #FF832D;
    }

    @media (min-width: 1200px){
        .ourcards{
            display: flex;
            justify-content: center;
        }
    }
</style>
