<script setup>
import { reactive } from 'vue'

const form = reactive ({
    title: 'FALE CONOSCO',
    name: 'Nome: ',
    company: 'Empresa: ',
    function: 'Cargo: ',
    email: 'E-mail: ',
    phone: 'Telefone: ',
})
</script>


<!-- <template>
    <div class="form">
        <span title=""></span>

        <label for="name">
            <span v-html="form.name"></span>
            <input type="text" placeholder="">
        </label>
        
        <label for="company">
            <span v-html="form.company"></span> 
            <input type="text" placeholder="">
        </label>
        
        <label for="function">
            <span v-html="form.function"></span>
            <input type="text" placeholder="">
        </label>
        
        <label for="email">
            <span v-html="form.email"></span>  
            <input type="text" placeholder="">
        </label>
        
        <label for="phone">
            <span v-html="form.phone"></span> 
            <input type="text" placeholder="">
        </label>
    </div>
</template> -->

<style scoped>
.form {
    display: flex;
    font-size: 40px;
    gap: 60px;
    }

</style>