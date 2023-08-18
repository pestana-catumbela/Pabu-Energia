<script>
    import Email from '@/assets/smtp/smtp.js'

    export default {
        data() {
            return {
                name: '',
                email: '',
                subject: '',
                message: ''
            };
        },

        //CÓDIGO DE CÓPIA DE SEGURANÇA 043309
        methods: {
            sendEmail() {
                Email.send({
                    Host: 'smtp.elasticemail.com',
                    Username: "infra.n1@pabu.com.br",
                    Password: "66E33FC2B677A17DA9EC3FC6821ED20C877D",
                    SecureToken: '7a0415d5-a1f2-4779-9bbd-32f937eaadfd',
                    To: 'pestanacatumbela@gmail.com',
                    From: 'infra.n1@pabu.com.br',
                    name: this.name,
                    Subject: this.subject,
                    Body: this.message
                }).then(() => alert('Email enviado com sucesso!'))
                    this.name = '',
                    this.email = '',
                    this.company = '',
                    this._function = '',
                    this.number = '',
                    this.subject = '',
                    this.message = ''
            },
        },
    };
</script>


<template>
    <div id="form" class="form">
        <span class="form__title">FALE CONOSCO</span>

        <form class="form__field" @submit.prevent="sendEmail">
            <div class="form__field__firstbox">
                <div class="form__field__firstbox__name">
                    <span>Nome</span>
                    <input type="text" class="form__field__firstbox__name__element" placeholder="Digite seu nome completo" v-model="name" required>
                </div>

                <div class="form__field__firstbox__email">
                    <span>E-mail</span>
                    <input type="email" class="form__field__firstbox__email__element" placeholder="Digite seu e-mail" v-model="email" required>
                </div>
            </div>

            <div class="form__field__secondbox">
                <div class="form__field__secondbox__company">
                    <span>Empresa</span>
                    <input type="text" class="form__field__secondbox__company__element" placeholder="Digite o nome da sua empresa" v-model="company" required>
                </div>

                <div class="form__field__secondbox__function">
                    <span>Cargo</span>
                    <input type="text" class="form__field__secondbox__function__element" placeholder="Digite o seu cargo ou função" v-model="_function" required>
                </div>

                <div class="form__field__firstbox__number">
                    <span>Telefone</span>
                    <input type="text" class="form__field__firstbox__number__element" placeholder="Digite seu número de telefone" v-model="number" required>
                </div>
            </div>
            
            <div class="form__field__thirdbox">
                <span>Assunto</span>
                <input type="text" class="form__field__thirdbox__element" placeholder="Digite o assunto" v-model="subject" required>
            </div>

            <div class="form__field__fourthbox">
                <span>Mensagem</span>
                <textarea type="text" class="form__field__fourthbox__element" placeholder="Digite sua mensagem" v-model="message" required></textarea>
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
