<template>
    <div>
        <div class="row justify-content-center">
            <div>
                Runy
            </div>
            <div class="row">
                <div v-for="rune in runes" class="item-box col-md-3">
                    <div v-on:click="buy(rune.id)">
                        <p>{{ rune.name }}</p>
                        <img :src="'storage/runes/' + rune.image"/>
                        <p>bonus: +{{ rune.bonus }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        runes: {}
    },

    methods: {
        buy: function(id){
            this.$emit('buyItem', id);
        }
    },
}
</script>