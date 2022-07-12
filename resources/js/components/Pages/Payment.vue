<template>
    <div class="payment-wrapper justify-center flex items-center py-3 px-4">

       
        <div class="container max-w-sm" v-if="loading">
            <div id="dropIn" class="drop-shadow-xl dropin" v-if="token">
                {{ dropIn() }}
            </div>

            <div>
                <button class="rounded bg-viola py-1 px-3 text-white font-bold"
                @click="confirmCta(inst)">
                    Invia
                </button>    
            </div>
        </div>

    </div>
</template>
<script>
import axios from "axios";

export default {
    data() {
        return {
            token: '',
            inst: null,
            loading: false,
            isDisable: false,
            cart: [],
            order: {},
        }
    },
    components:{
  
    },
    
    methods: {
        fetchToken() {
            axios.get('/api/payments')
            .then(res => {
                const {token} = res.data
                this.token = token;
                this.loading = true;
                console.log(token);
            })
        },
        sendToken(nonce) {
            axios.post('http://127.0.0.1:8000/api/payments',{
                total: this.cartOnOrder.cartTotalPrice,
                restaurant: this.cartOnOrder.cartRestauratReference,
                order: this.order,
                cart: this.cartOnOrder.cartItems,
            }, {
                params: {
                    token: nonce,
                }
            })
            .then(res => {
                console.log(res.data);
            })
            .catch(err => {
                console.error(err);
            })
        },
        dropIn() {
            const dropIn = require('braintree-web-drop-in');
            dropIn.create({
                authorization: this.token,
                container: '#dropIn',
                locale: 'it_IT',
            }, (createErr, instance) => {
                 if (createErr) {
                    // An error in the create call is likely due to
                    // incorrect configuration values or network issues.
                    // An appropriate error will be shown in the UI.
                    
                    console.error(createErr);
                    return;
                }
                
                this.inst = instance;
                console.log(instance);
            });
        },
        confirmCta(instance) {
            instance.requestPaymentMethod((requestPaymentMethodErr, payload) => {
                if (requestPaymentMethodErr) {
                    // No payment method is available.
                    // An appropriate error will be shown in the UI.
                    console.error(requestPaymentMethodErr);
                    return;
                }

                this.sendToken(payload.nonce);
                this.loader();
                this.returnToOrderDetails();
                console.log(payload.nonce);
            }
        )},
        takeOrder() {
            this.order = JSON.parse(localStorage.getItem("order"));
        },
        loader() {
            setTimeout( ()=> {
                this.loading = false
            }, '1000');
        },
        returnToOrderDetails() {
            setTimeout( ()=> {
                this.$router.push({ name: 'orders.show' });
            }, '5000')
        }
    },
    created() {
        this.fetchToken();
        this.takeOrder();
    }
}
</script>

<style lang="scss" scoped>

    .payment-wrapper {
        height: calc((100vh - 62px) - 341px);
        background-image: url('/images/wave00.svg');
        background-position: center;
        background-size: 1080px;
        background-repeat: no-repeat;

        .dropin {
            filter: drop-shadow(2px 4px 8px #57534e);
        }
    }
        
</style>