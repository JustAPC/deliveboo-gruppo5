<template>
    <div class="container">
        
            <form @submit="submitForm(onSubmit)" methods="post" class="row">
                <div class="input-group mb-3 col-6">
                    <span class="input-group-text " id="inputGroup-sizing-default">Nome</span>
                    <input v-model="form.customer_name" id="name" type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3 col-6">
                    <span class="input-group-text" id="inputGroup-sizing-default">Cognome</span>
                    <input v-model="form.customer_lastname" id="name" type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3 col-8">
                    <span class="input-group-text" id="inputGroup-sizing-default">Indirizzo</span>
                    <input v-model="form.customer_address" id="name" type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3 col-4">
                    <span class="input-group-text" id="inputGroup-sizing-default">Telefono</span>
                    <input v-model="form.customer_phone" id="name" type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="">
                    <router-link to="/payments" type="submit"
                        class=" byn btn-success rounded p-2">
                        Invia
                    </router-link>
                </div>

            </form>
        <div>
           
        </div>

      
    </div>
</template>

<script>
    export default {
        data() {
            return {
                form: {
                    customer_name: '',
                    customer_lastname: '',
                    customer_address: '',
                    completed: false,
                    payment_received: false,
                    total_price:'',
                    customer_phone: '',
                },
                carrello:'',
            }
        },
        methods: {
            submitForm() {
            axios.post('http://127.0.0.1:8000/api/checkout', {
               form: this.form,
                
            })
            .then(res => {
                console.log(res.data);
                
            })
            
        },
        onSubmit() {
            this.submitForm();
            console.log(this.form);
        },
        
    },
   

    }

</script>

<style lang="scss" scoped>
    .form-wrapper {
        min-height: calc((100vh - 62px) - 341px);
    }

</style>
