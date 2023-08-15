<script setup>
    import FirstPartFooterComponents from './FooterComponents/FirstPartFooterComponents.vue'
    import SecondPartFooterComponents from './FooterComponents/SecondPartFooterComponents.vue'
    import ThirdPartFooterComponents from './FooterComponents/ThirdPartFooterComponents.Vue'
</script>

<template>
    <div class="footer">
        <div class="footer__servicechannel">
            <FirstPartFooterComponents /> 
        </div>
        <div class="footer__socialmedia">
            <SecondPartFooterComponents />
        </div>
        <div class="footer__copyright">
            <ThirdPartFooterComponents />
        </div>
    </div>
</template>

<style scoped>

.footer {
    background-color: #F4F4F4;
}
    .footer__servicechannel {
        display: flex;
        justify-content: center;
        margin-top: 60px;
    }

.footer__socialmedia{
    display: flex;
    justify-content: center;

}

.footer__copyright {
    display: flex;
    justify-content: center;
}
</style>