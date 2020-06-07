<template>
    <div class="card">
        <div v-if="message" class="alert alert-info">{{ message }}</div>
        <div class="card-body store">
            <div class="container">
                <boxes :boxes="boxes" v-on:buyItem="buyBox" class="p-3"></boxes>
                <runes :runes="runes" v-on:buyItem="buyRune" class="p-3"></runes>
                <prizes :prizes="prizes" v-on:buyItem="buyPrice" class="p-3"></prizes>
            </div>
        </div>
    </div>
</template>
<script>
export default {

    props: {
        boxes: {},
        runes: {},
        prizes: {},
        userId: Number,
    },
    data: function() {
        return {
            message: '',
        }
    },

    methods: {
        buyBox: function(id){
            axios.post('/api/shop/buy-box', {
                item_id: id,
                user_id: this.userId
            }).then((response) => {
                this.message = response.data;
                this.$emit('paid');
            }).catch(error => {
                this.message = 'Wystąpił nieoczekiwany problem... Spróbuj ponownie';
            })
        },

        buyPrice: function(id){
            axios.post('/api/shop/buy-prize', {
                item_id: id,
                user_id: this.userId
            }).then((response) => {
                this.message = response.data;
                this.$emit('paid');
            }).catch(error => {
                this.message = 'Wystąpił nieoczekiwany problem... Spróbuj ponownie';
            })
        },

        buyRune: function(id){
            axios.post('/api/shop/buy-rune', {
                item_id: id,
                user_id: this.userId
            }).then((response) => {
                this.message = response.data;
                this.$emit('paid');
            }).catch(error => {
                this.message = 'Wystąpił nieoczekiwany problem... Spróbuj ponownie';
            })
        }
    },
}
</script>
