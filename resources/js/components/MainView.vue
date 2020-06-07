<template>
    <div class="row justify-content-center">

        <div class="col-md-8">
            <user-inventory :userId="userId"></user-inventory>
        </div>

        <div class="col-md-8">
            <get-coins v-if="freeCoin" :userId="userId" v-on:checkWallet="getCoinFromWallet"></get-coins>
        </div>

        <div class="col-md-8">
            <user-wallet :userId="userId" :coins="coins"></user-wallet>
        </div>

        <div class="col-md-8">
            <label>Sklep</label>
            <equipment-store :boxes="boxes" :runes="runes" :prizes="prizes" :userId="userId" v-on:paid="getCoinFromWallet"></equipment-store>
        </div>
    </div>
</template>
<script>
export default {
    data: function() {
        return {
            coins: 0,
            userId: null,
            coinsReceived: false,

            boxes: {},
            runes: {},
            prizes: {},
        }
    },

    mounted: function() {
        this.getUserId();
        this.getBoxes();
        this.getRunes();
        this.getPrizes();
    },

    computed: {
        freeCoin: function(){
            if(this.coins === 0 && this.coinsReceived === false){
                return true;
            }

            return false;
        }
    },

    methods: {
        getCoinFromWallet: function(){
            axios.post('/api/wallet/get-user-coins', {
                user_id: this.userId 
            }).then((response) => {
                this.coins = response.data;
            }).catch(error => {
                this.coinsReceived = true;
            })
        },

        getUserId: function() {
            axios.get('/user/get-user-id')
            .then((response) => {
                this.userId = response.data;
            });
        },

        getBoxes: function() {
            axios.get('api/shop/get-boxes')
            .then((response) => {
                this.boxes = response.data;
            });
        },

        getRunes: function() {
            axios.get('api/shop/get-runes')
            .then((response) => {
                this.runes = response.data;
            });
        },

        getPrizes: function() {
            axios.get('api/shop/get-prizes')
            .then((response) => {
                this.prizes = response.data;
            });
        }
    }
}
</script>