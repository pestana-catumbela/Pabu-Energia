<script>
    export default{
        name: 'OurForm',

        data(){
            return{
                email: '',
                reg: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,24}))$/
            }
        },

        methods: {
            isEmailValid: function() {
                return (this.email == "")? "" : (this.reg.test(this.email)) ? 'has-success' : 'has-error';
            }
        }
    }
</script>


<template>
    <div id="form" class="form">
        <span class="form__title">FALE CONOSCO</span>

        <form method="POST" action="http://localhost/pabuenergia/src/components/MainComponents/OurForm/" target="_blank" class="form__field">
            <div class="form__field__firstbox">
                <div class="form__field__firstbox__name">
                    <span>Nome</span>
                    <input type="text" id="name" name="name" class="form__field__firstbox__name__element" placeholder="Digite seu nome completo" required>
                </div>

                <div class="form__field__firstbox__email">
                    <span>E-mail</span>
                    <input type="email" id="email" name="email" class="form__field__firstbox__email__element" placeholder="Digite seu e-mail" v-model="email" required>
                </div>
            </div>

            <div class="form__field__secondbox">
                <div class="form__field__secondbox__company">
                    <span>Empresa</span>
                    <input type="text" id="company" name="company" class="form__field__secondbox__company__element" placeholder="Digite o nome da sua empresa" required>
                </div>

                <div class="form__field__secondbox__function">
                    <span>Cargo</span>
                    <input type="text" id="function" name="function" class="form__field__secondbox__function__element" placeholder="Digite o seu cargo ou função" required>
                </div>

                <div class="form__field__firstbox__number">
                    <span>Telefone</span>
                    <input type="text" id="telephone" name="telephone" class="form__field__firstbox__number__element" placeholder="Digite seu número de telefone" required>
                </div>
            </div>
            
            <div class="form__field__thirdbox">
                <span>Assunto</span>
                <input type="text" id="subject" name="subject" class="form__field__thirdbox__element" placeholder="Digite o assunto" required>
            </div>

            <div class="form__field__fourthbox">
                <span>Mensagem</span>
                <textarea type="text" id="message" name="message" class="form__field__fourthbox__element" placeholder="Digite sua mensagem" required></textarea>
            </div>

            <div class="form__submit">
                <input type="submit" class="form__button" value="Enviar">
            </div>
        </form>
    </div>
</template>

<style scoped>
    .form{
        width: 60%;
        margin: 200px 0;
    }

    @media (max-width: 1200px){
        .form__field__secondbox{
            display: flex;
            flex-direction: column;
        }

        .form__field__firstbox{
            display: flex;
            flex-direction: column;
            margin: 40px 0 0 0;
        }
    }

    @media (max-width: 600px){
        .form{
            width: 70%;
            margin: 200px 0;
        }
    }

    .form__title{
        font-size: 35px;
        font-weight: 500;
        color: #FC8539;
    }

    .form__field{
        font-size: 20px;
        font-weight: 500;
    }

    .form__field__firstbox{
        display: flex;
        gap: 20px;
        margin: 40px 0 0 0;
    }

    .form__field__firstbox__name{
        width: 100%;
        display: flex;
        flex-direction: column;
    }
    .form__field__firstbox__name__element{
        width: 100%;
        height: 35px;
        outline: none;
        font-size: 18px;
    }

    .form__field__firstbox__email{
        width: 100%;
        display: flex;
        flex-direction: column;
    }

    .form__field__firstbox__email__element{
        width: 100%;
        height: 35px;
        outline: none;
        font-size: 18px;
    }

    .form__field__secondbox{
        display: flex;
        margin: 24px 0 0 0;
        gap: 20px;
    }

    .form__field__secondbox__company{
        width: 100%;
        display: flex;
        flex-direction: column;
    }

    .form__field__secondbox__company__element{
        width: 100%;
        height: 35px;
        outline: none;
        font-size: 18px;
    }

    .form__field__secondbox__function{
        width: 100%;
        display: flex;
        flex-direction: column;
    }

    .form__field__secondbox__function__element{
        width: 100%;
        height: 35px;
        outline: none;
        font-size: 18px;
    }

    .form__field__firstbox__number{
        width: 100%;
        display: flex;
        flex-direction: column;
    }

    .form__field__firstbox__number__element {
        width: 100%;
        height: 35px;
        outline: none;
        font-size: 18px;
    }

    .form__field__thirdbox {
        display: flex;
        flex-direction: column;
        margin: 24px 0 0 0;
    }

    .form__field__thirdbox__element{
        width: 100%;
        height: 35px;
        outline: none;
        font-size: 18px;
    }

    .form__field__fourthbox{
        display: flex;
        flex-direction: column;
        margin: 24px 0 0 0;
    }

    .form__field__fourthbox__element{
        width: 100%;
        height: 200px;
        outline: none;
        font-size: 18px;
    }

    input::placeholder{
        font-size: 14px;
        color: #888888;
    }

    textarea::placeholder{
        font-size: 14px;
        color: #888888;
    }

    .form__submit{
        display: flex;
        justify-content: center;

        margin: 40px 0 0 0;
    }

    .form__button{
        border: none;
        cursor: pointer;
        color: #FFFFFF;
        background-color: #FC8539;
        padding: 20px 60px 20px 60px;
        border-radius: 40px;
        font-weight: 500;
        font-size: 25px;
    }

    .form__button:hover{
        border: none;
        cursor: pointer;
        color: #FFFFFF;
        background-color: #db6d1e;
        padding: 20px 60px 20px 60px;
        border-radius: 40px;
        font-weight: 500;
        font-size: 25px;
    }

    @media (max-width: 800px){
        .form__button{
            border: none;
            cursor: pointer;
            color: #FFFFFF;
            background-color: #FC8539;
            padding: 20px 60px 20px 60px;
            border-radius: 40px;
            font-weight: 500;
            font-size: 20px;
        }

        .form__button:hover{
            border: none;
            cursor: pointer;
            color: #FFFFFF;
            background-color: #db6d1e;
            padding: 20px 60px 20px 60px;
            border-radius: 40px;
            font-weight: 500;
            font-size: 20px;
        }
    }
</style>
