<template>
    <div>
        <div class="row justify-content-center">
            <div>
                Nagrody
            </div>
            <div class="row">
                <div v-for="prize in prizes" class="item-box col-md-3">
                    <div v-on:click="buy(prize.id)">
                        <p>{{ prize.name }}</p>
                        <img :src="'storage/prizes/' + prize.image"/>
                        <p>cena: {{ prize.price }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        prizes: {}
    },

    methods: {
        buy: function(id){
            this.$emit('buyItem', id);
        }
    },
}
</script>