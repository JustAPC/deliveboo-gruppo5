<template>
    <div class="container py-5">
      
        <!-- <div>
            <h1>RIEPILOGO ORDINE</h1>

            <p>Hai ordinato i seguenti piatti:</p>
            <ul>
                <li v-for="dish in carrello" :key="dish.id">{{ dish.name }}</li>
            </ul>

            <hr />
            <h3>Prezzo Totale: {{ form.total_price }}€</h3>
        </div> -->

        <div class="card ">
            <div class="card-header bg_blu text-white font_size">
                Compila il seguente form per la spedizione
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="validationCustom01" v-model="form.customer_name"
                                required>
                            <div class="valid-feedback">
                                Inserito correttamente
                            </div>
                            <div class="invalid-feedback">
                                Inserisci il nome
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">Cognome</label>
                            <input type="text" class="form-control" id="validationCustom02"
                                v-model="form.customer_lastname" required>
                            <div class="valid-feedback">
                                Inserito correttamente
                            </div>
                            <div class="invalid-feedback">
                                Inserisci il cognome
                            </div>
                        </div>

                        <div class="col-md-8">
                            <label for="validationCustom03" class="form-label">Indirizzo</label>
                            <input type="text" class="form-control" id="validationCustom03"
                                v-model="form.customer_address" required>
                            <div class="valid-feedback">
                                Inserito correttamente
                            </div>
                            <div class="invalid-feedback">
                                Inserire indirizzo
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="validationCustom05" class="form-label">Telefono</label>
                            <input type="text" class="form-control" id="validationCustom05"
                                v-model="form.customer_phone" required>
                            <div class="valid-feedback">
                                Inserito correttamente
                            </div>
                            <div class="invalid-feedback">
                                Inserire numero di telefono
                            </div>
                        </div>
                        <div class="col-12 text-center my-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Accetta termini e condizioni
                                </label>
                                
                                <div class="invalid-feedback">
                                    Devi accettare termini e condizioni
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <router-link  
                            :to="{
                            name: 'payments',
                            params: { ordine: form, carrello: carrello, restaurant_name: restaurant_name },}"
                            @click="validazione()"  class="btn btn-primary" type="submit">invia</router-link>
                           
                        </div>
                    </form>
                </blockquote>
            </div>
        </div>
        <div class="card text-center border_circle mt-5">
                <div class="card-header bg_blu font-weight-bolder text-white font_size">
                    {{restaurant_name}}
                </div>
                <div class="card-body">
                    <div class="row justify-content-around">
                        <div class="card col-sm-12 col-md-6 col-lg-6  my-2" style="max-width: 440px;"
                             v-for="dish in carrello" :key="dish.id">
                            <div class="row g-0">
                                <div class="col-md-4 d-flex align-items-center">
                                    <img :src="dish.image" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ dish.name }}</h5>
                                        <p class="card-text">{{ dish.price }}€</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg_blu font-weight-bolder text-white font_size">
                    <p>Prezzo Totale: {{form.total_price }}</p>
                </div>
            </div>


        <!-- <form @submit="submitForm(onSubmit)" methods="post" class="row">
      <div class="input-group mb-3 col-6">
        <span class="input-group-text" id="inputGroup-sizing-default">Nome</span>
        <input
          v-model="form.customer_name"
          id="name"
          type="text"
          class="form-control"
          aria-label="Sizing example input"
          aria-describedby="inputGroup-sizing-default"
          required
        />
      </div>
      <div class="input-group mb-3 col-6">
        <span class="input-group-text" id="inputGroup-sizing-default">Cognome</span>
        <input
          v-model="form.customer_lastname"
          id="name"
          type="text"
          class="form-control"
          aria-label="Sizing example input"
          aria-describedby="inputGroup-sizing-default"
          required
        />
      </div>
      <div class="input-group mb-3 col-8">
        <span class="input-group-text" id="inputGroup-sizing-default">Indirizzo</span>
        <input
          v-model="form.customer_address"
          id="name"
          type="text"
          class="form-control"
          aria-label="Sizing example input"
          aria-describedby="inputGroup-sizing-default"
          required
        />
      </div>
      <div class="input-group mb-3 col-4">
        <span class="input-group-text" id="inputGroup-sizing-default">Telefono</span>
        <input
          v-model="form.customer_phone"
          id="name"
          type="text"
          class="form-control"
          aria-label="Sizing example input"
          aria-describedby="inputGroup-sizing-default"
          required
        />
      </div>
      <div class="">
        <router-link
          :to="{
            name: 'payments',
            params: { ordine: form, carrello: carrello, restaurant_name: restaurant_name },
          }"
          type="submit"
          class="byn btn-success rounded p-2"
        >
          Invia
        </router-link>
      </div>
    </form> -->

    </div>
</template>

<script>
    export default {
        data() {
            return {
                pippo:false,
                form: {
                    customer_name: "",
                    customer_lastname: "",
                    customer_address: "",
                    completed: false,
                    payment_received: false,
                    total_price: this.$route.params.prezzo.toFixed(2),
                    customer_phone: "",
                    user_id: this.$route.params.restaurant_id,
                },
                carrello: this.$route.params.carrello,
                restaurant_name: this.$route.params.restaurant_name,
            };
        },
        methods: {
            submitForm() {
                axios
                    .post("http://127.0.0.1:8000/api/checkout", {
                        form: this.form,
                    })
                    .then((res) => {
                        console.log(res.data);
                    });
            },
            onSubmit() {
                this.submitForm();
                console.log(this.form);
            },
            validazione() {

                (() => {
                    'use strict'

                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    const forms = document.querySelectorAll('.needs-validation')

                    // Loop over them and prevent submission
                    Array.from(forms).forEach(form => {
                        form.addEventListener('submit', event => {
                            if (!form.checkValidity()) {
                                
                                event.preventDefault()
                                event.stopPropagation()
                                
                                
                            }

                            form.classList.add('was-validated')
                            
                            console.log(this.validazione)
                        }, false)
                    })
                })()
            },
            returnPayments() {
        
          this.$router.push({
            name: "payments",
            params: {
              form: this.form,
              carrello: this.carrello,
              restaurant_name: this.restaurant_name,
            },
          });
       
      },
        },
    };

</script>

<style lang="scss" scoped>
    .form-wrapper {
        min-height: calc((100vh - 62px) - 341px);
    }
  .bg_blu{
  background-color: #34c0c9;
}
.font_size{
  font-size: 2em;
}
</style>
