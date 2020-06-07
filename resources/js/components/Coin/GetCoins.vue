<template>
    <div class="card">
        <div class="card-body store">
            <div class="container">
                <div class="row justify-content-center">
                    <div v-if="!coinsReceived">
                        <button class="btn btn-success" v-on:click="getCoin">
                            Odbierz monety na zakupy
                        </button>
                    </div>
                    <div v-else>
                        <p>Otrzymałeś {{ coins }} monet!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {

    props: {
        userId:Number,
    },

    data: function() {
        return {
            coins: 800,
            coinsReceived: false,
        }
    },

    methods: {
        getCoin: function(){
            axios.post('/api/wallet/add-coins/', {
                coins: this.coins,
                user_id: this.userId 
            }).then(response => {
                this.coinsReceived = true;
                this.$emit('checkWallet');
            }).catch(error => {
                if (error.response.status == 422){
                    this.validationErrors = error.response.data.errors;
                }
            })
        }
    },
}
</script>