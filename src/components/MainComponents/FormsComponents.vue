<script setup>
import { reactive } from 'vue'

const form = reactive({
    title: 'FALE CONOSCO',
    name: 'Nome: ',
    company: 'Empresa: ',
    function: 'Cargo: ',
    email: 'E-mail: ',
    phone: 'Telefone: ',
    message: 'Mensagem:'
})
</script>


<template>
    <div class="form">
        <span class="form__title" v-html="form.title"></span>
        <form class="form__field">

            <div class="form__field__firstbox">
                <div class="form__field__firstbox__name">
                    <span class="categoryname" v-html="form.name"></span>
                    <input type="text" class="form__field__firstbox__name__element" placeholder="Digite seu nome completo">
                </div>
                <div class="form__field__firstbox__email">
                    <span class="categoryname" v-html="form.email"></span>
                    <input type="email" class="form__field__firstbox__email__element" placeholder="Digite seu e-mail">
                </div>

                <div class="form__field__firstbox__number">
                    <span class="categoryname" v-html="form.phone"></span>
                    <input type="text" class="form__field__firstbox__number__element" placeholder="Digite seu número de telefone">
                </div>
            </div>

            <div class="form__field__secondbox">
                <div class="form__field__secondbox__company">
                    <span class="categoryname" v-html="form.company"></span>
                    <input type="text" class="form__field__secondbox__company__element" placeholder="Digite o nome da sua empresa">
                </div>

                <div class="form__field__secondbox__function">
                    <span class="categoryname" v-html="form.function"></span>
                    <input type="text" class="form__field__secondbox__function__element" placeholder="Digite o seu cargo ou função">
                </div>
            </div>

            <div class="form__field__thirdbox">
                <div class="form__field__thirdbox__message">
                    <span class="categoryname" v-html="form.message"></span>
                    <textarea type="text" class="form__field__firstbox__message__element" placeholder="Digite uma mensagem para retirar suas dúvida"></textarea>
                </div>
            </div>
        </form>

        <div class="form__submit">
            <input type="submit" class="form__button" value="Enviar">
        </div>
    </div>
</template>

<style scoped>
.form {
    width: 60%;
    margin: 200px 0;
    
}

.form__title {
    font-size: 35px;
    font-weight: 500;
    color: #FC8539;

}

.form__field {
    display: flex;
    flex-direction: column;
}

.form__field__firstbox {
    display: flex;
    gap: 25px;
    margin: 40px 0 0 0;
    
}

.categoryname {
    font-size: 25px;
    font-weight: 600;
}

.form__field__firstbox__name {
    width: 40%;
    display: flex;
    flex-direction: column;
}
.form__field__firstbox__name__element {
    width: 100%;
    height: 35px;
    outline: none;
    font-size: 18px;
}

input::placeholder {
    font-size: 14px;
    color: #888888;
    padding: 2px;
}

.form__field__firstbox__email {
    width: 40%;
    display: flex;
    flex-direction: column;
}

.form__field__firstbox__email__element {
    width: 100%;
    height: 35px;
    outline: none;
    font-size: 18px;
}

.form__field__firstbox__number {
    width: 20%;
    display: flex;
    flex-direction: column;
}

.form__field__firstbox__number__element {
    width: 100%;
    height: 35px;
    outline: none;
    font-size: 18px;
}


.form__field__secondbox {
    display: flex;
    gap: 25px;
    margin: 30px 0;
}

.form__field__secondbox__company {
    width: 50%;
    display: flex;
    flex-direction: column;
}

.form__field__secondbox__company__element {
    width: 100%;
    height: 35px;
    outline: none;
    font-size: 18px;
}

.form__field__secondbox__function {
    width: 50%;
    display: flex;
    flex-direction: column;
}

.form__field__secondbox__function__element {
    width: 100%;
    height: 35px;
    outline: none;
    font-size: 18px;
}
.form__field__thirdbox {
    display: flex;
    flex-direction: column;
    margin: 0 0 40px 0;
}

.form__field__thirdbox__message {
    display: flex;
    flex-direction: column;
}

.form__field__firstbox__message__element {
    height: 200px;
    outline: none;
    font-size: 18px;
}

.form__submit {
    display: flex;
    justify-content: center;
}

.form__button {
    background-color: #FC8539;
    color: #FFFFFF;
    border: none;
    font-size: 25px;
    padding: 15px 50px 15px 50px;
    border-radius: 40px;
    font-weight: 500;
    cursor: pointer;
    width: 250px;
}
</style>