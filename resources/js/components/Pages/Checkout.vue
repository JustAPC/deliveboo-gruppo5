<template>
  <div class="container py-5">
    <div class="card">
      <div class="card-header bg_blu text-white font_size">
        Compila il seguente form per la spedizione
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-6 pb-3">
              <label for="validationCustom01" class="form-label">Nome</label>
              <input
                type="text"
                class="form-control"
                id="validationCustom01"
                v-model="form.customer_name"
                required
                @change="validation()"
              />
              <div class="valid-feedback">Inserito correttamente</div>
              <div class="invalid-feedback">Inserisci il nome</div>
            </div>
            <div class="col-md-6 pb-3">
              <label for="validationCustom02" class="form-label">Cognome</label>
              <input
                type="text"
                class="form-control"
                id="validationCustom02"
                v-model="form.customer_lastname"
                required
                @change="validation()"
              />
              <div class="valid-feedback">Inserito correttamente</div>
              <div class="invalid-feedback">Inserisci il cognome</div>
            </div>

            <div class="col-md-6 pb-3">
              <label for="validationCustom03" class="form-label">Email</label>
              <input
                type="text"
                class="form-control"
                id="validationCustom03"
                v-model="form.customer_email"
                required
                @change="validation()"
              />
              <div class="valid-feedback">Inserito correttamente</div>
              <div class="invalid-feedback">Inserire indirizzo</div>
            </div>

            <div class="col-md-6 pb-3">
              <label for="validationCustom04" class="form-label">Telefono</label>
              <input
                type="text"
                class="form-control"
                id="validationCustom04"
                v-model="form.customer_phone"
                required
                @change="validation()"
              />
              <div class="valid-feedback">Inserito correttamente</div>
              <div class="invalid-feedback">Inserire numero di telefono</div>
            </div>

            <div class="col-md-6 pb-3">
              <label for="validationCustom05" class="form-label">Città</label>
              <input
                type="text"
                class="form-control"
                id="validationCustom05"
                v-model="form.customer_city"
                required
                @change="validation()"
              />
              <div class="valid-feedback">Inserito correttamente</div>
              <div class="invalid-feedback">Inserisci il nome</div>
            </div>
            <div class="col-md-6 pb-3">
              <label for="validationCustom06" class="form-label">CAP</label>
              <input
                type="text"
                class="form-control"
                id="validationCustom06"
                v-model="form.customer_zip"
                required
                @change="validation()"
              />
              <div class="valid-feedback">Inserito correttamente</div>
              <div class="invalid-feedback">Inserisci il cognome</div>
            </div>

            <div class="col-md-12 pb-3">
              <label for="validationCustom07" class="form-label">Indirizzo</label>
              <input
                type="text"
                class="form-control"
                id="validationCustom07"
                v-model="form.customer_address"
                required
                @change="validation()"
              />
              <div class="valid-feedback">Inserito correttamente</div>
              <div class="invalid-feedback">Inserire indirizzo</div>
            </div>
            <div class="col-12 text-center my-3">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="terms"
                  required
                  @change="validation()"
                />
                <label class="form-check-label" for="terms">Accetta termini e condizioni</label>

                <div class="invalid-feedback">Devi accettare termini e condizioni</div>
              </div>
            </div>
            <div class="col-12 text-center">
              <router-link
                id="submit-button"
                :to="{
                  name: 'payments',
                  params: {
                    ordine: form,
                    carrello: carrello,
                    restaurant_name: restaurant_name,
                    restaurant_email: restaurant_email,
                  },
                }"
                class="btn btn-primary disabled"
                type="submit"
              >
                Invia
              </router-link>
            </div>
          </form>
        </blockquote>
      </div>
    </div>
    <div class="card text-center border_circle mt-5">
      <div class="card-header bg_blu font-weight-bolder text-white font_size">
        {{ restaurant_name }}
      </div>
      <div class="card-body">
        <div class="row justify-content-around">
          <div
            class="card col-sm-12 col-md-6 col-lg-6 my-2"
            style="max-width: 440px"
            v-for="dish in carrello"
            :key="dish.id"
          >
            <div class="row g-0">
              <div class="col-md-4 d-flex align-items-center">
                <img :src="dish.image" class="img-fluid rounded-start" alt="..." />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{ dish.name }}</h5>
                  <p class="card-text">€ {{ dish.price }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer bg_blu font-weight-bolder text-white font_size">
        <p>Prezzo Totale: € {{ form.total_price }}</p>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        form: {
          customer_name: "",
          customer_lastname: "",
          customer_address: "",
          customer_city: "",
          customer_zip: "",
          customer_phone: "",
          customer_email: "",
          completed: false,
          payment_received: false,
          total_price: this.$route.params.prezzo.toFixed(2),
          user_id: this.$route.params.restaurant_id,
        },
        carrello: this.$route.params.carrello,
        restaurant_name: this.$route.params.restaurant_name,
        restaurant_email: this.$route.params.restaurant_email,
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
      validation() {
        const nome = document.getElementById("validationCustom01").value;
        const cognome = document.getElementById("validationCustom02").value;
        const email = document.getElementById("validationCustom03").value;
        const telefono = document.getElementById("validationCustom04").value;
        const city = document.getElementById("validationCustom05").value;
        const cap = document.getElementById("validationCustom06").value;
        const address = document.getElementById("validationCustom07").value;
        const terms = document.getElementById("terms");
        const submit = document.getElementById("submit-button");
        if (
          nome != 0 &&
          cognome != 0 &&
          email != 0 &&
          telefono.length >= 9 &&
          city != 0 &&
          cap.length == 5 &&
          address != 0 &&
          terms.checked == true
        ) {
          submit.classList.remove("disabled");
        } else {
          submit.classList.add("disabled");
        }
      },
    },
  };
</script>

<style lang="scss" scoped>
  .form-wrapper {
    min-height: calc((100vh - 62px) - 341px);
  }
  .bg_blu {
    background-color: #34c0c9;
  }
  .font_size {
    font-size: 2em;
  }

  .disabled {
    opacity: 0.5;
    pointer-events: none;
  }
</style>
