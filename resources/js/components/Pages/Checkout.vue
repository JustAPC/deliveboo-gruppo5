<template>
    <div>
        <section class="form-wrapper d-flex  justify-content-center align-items-center">
                <form @submit.prevent="handleSubmit(onSubmit)" methods="post">
                    
                    <div class="container shadow overflow-hidden sm:rounded-md pt-5">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="text-xs italic mb-5">
                                <p>I campi contrassegnati con * sono richiesti</p>
                            </div>
                            <div class="row row-cols-5 justify-content-around align-items-center">
                                <div class="mx-1 col">
                                    
                                        <label for="name" class="after:content-['*'] block text-sm font-medium text-gray-700">Nome</label>
                                        <input type="text" v-model="form.name" name="name" id="name" autocomplete="given-name "  
                                        class="mt-1  block w-full shadow-sm sm:text-sm  rounded-md"/>
                                           
                                </div>

                                <div class="mx-1 col">
                                   
                                        <label for="surname" class="after:content-['*'] block text-sm font-medium text-gray-700">Cognome</label>
                                        <input type="text" v-model="form.surname" name="surname" id="surname" autocomplete="surname" 
                                        class="mt-1  block w-full shadow-sm sm:text-sm  rounded-md" 
                                        />
                                        
                                    
                                    
                                </div>

                                <div class="mx-1 col">
                                    
                                        <label for="email" class="after:content-['*'] block text-sm font-medium text-gray-700">Email</label>
                                        <input type="email" v-model="form.email" name="email" id="email" autocomplete="email" class="mt-1  block w-full shadow-sm sm:text-sm  rounded-md" 
                                        />
                                        
                                    
                                </div>

                                <div class="mx-1 col">
                                    
                                        <label for="phone_number" class="after:content-['*'] block text-sm font-medium text-gray-700">Telefono</label>
                                        <input type="text" v-model="form.phone_number" name="phone_number" autocomplete="phone_number" class="mt-1  block w-full shadow-sm sm:text-sm  rounded-md "
                                        />
                                        
                                    
                                </div>

                                <div class="mx-1 col">
                                   
                                        <label for="address" class="after:content-['*'] block text-sm font-medium text-gray-700">Indirizzo / Via</label>
                                        <input type="text" v-model="form.address" name="address" id="address" autocomplete="address" class="mt-1  block w-full shadow-sm sm:text-sm  rounded-md" 
                                        />
                                        
                                    
                                </div>

                                <div class="mx-1 col">
                                  
                                        <label for="house_number" class="after:content-['*'] block text-sm font-medium text-gray-700">N. civico</label>
                                        <input type="text" v-model="form.house_number" name="house_number" id="house_number" autocomplete="house_number" class="mt-1  block w-full shadow-sm sm:text-sm  rounded-md" 
                                        />
                                        
                                    
                                </div>

                                <div class="mx-1 col">
                                    
                                        <label for="city" class="after:content-['*'] block text-sm font-medium text-gray-700">Città</label>
                                        <input type="text" v-model="form.city" name="city" id="city" autocomplete="address-level2" class="mt-1  block w-full shadow-sm sm:text-sm  rounded-md" 
                                        />
                                        
                                    
                                </div>

                                <div class="mx-1 col">
                                    
                                        <label for="cap" class="after:content-['*'] block text-sm font-medium text-gray-700">ZIP / CAP</label>
                                        <input type="text" v-model="form.cap" name="cap" id="cap" autocomplete="cap" class="mt-1  block w-full shadow-sm sm:text-sm  rounded-md" 
                                        />
                                        
                                    
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button  type="submit"
                            class=" justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white">
                                Invia
                            </button>
                        </div>
                    </div>
                </form>


        </section>
    </div>
</template>

<script>

export default {
    data() {
        return {
            form: {
                name: '',
                surname: '',
                email: '',
                phone_number: '',
                address: '',
                house_number: '',
                city: '',
                cap: '',
            },
        }
    },
    methods: {
        
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