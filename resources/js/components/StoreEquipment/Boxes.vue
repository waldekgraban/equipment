<template>
    <div>
        <div class="row justify-content-center">
            <div>
                SKRZYNKI
            </div>
            <div class="row">
                <div v-for="box in boxes" class="item-box col-md-3">
                    <div v-on:click="buy(box.id)">
                        <p>{{ box.name }}</p>
                        <img :src="'storage/boxes/' + box.image"/>
                        <p>cena: {{ box.price }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        boxes: {}
    },

    methods: {
        buy: function(id){
            this.$emit('buyItem', id);
        }
    },
}
</script>