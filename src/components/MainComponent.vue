<script setup>
    import OurCompromiseMainComponents from './MainComponents/OurCompromiseMainComponents.vue'
    import OurMissionMainComponents from './MainComponents/OurMissionMainComponents.vue'
    import CardsMainComponents from './MainComponents/CardsMainComponents.vue'
    import OurPartnersMainComponents from './MainComponents/OurPartnersMainComponents.vue'
    import BusAndButtonComponent from './MainComponents/BusAndButtonComponent.vue'
    import FormMainComponents from './MainComponents/OurForm/Form.vue'
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

    <section class="busbutton">
        <BusAndButtonComponent />
    </section>

    <section class="ourpartners">
        <OurPartnersMainComponents />
    </section>

    <section class="ourform">
        <FormMainComponents />
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

    .busbutton{
        display: flex;
        justify-content: center;
    }

    .ourpartners{
        display: flex;
        justify-content: center;
    }

    .ourform{
        display: flex;
        justify-content: center;
    }
</style>
