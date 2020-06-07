<template>
    <div class="card">
        <div class="card-body store">
            <div class="container">
                <div class="row col-md-12">
                    <div class="col-md-4">
                        <div class="float-left">
                            Twój ekwipunek
                        </div>
                    </div>
                    <div class="col-md-4 offset-md-4">
                        <div class="float-center">
                            <button class="btn btn-success" v-on:click="showEquipment">Pokaż/Odśwież ekwipunek</button>
                        </div>
                    </div>
                    <div class="row col-md-12">
                        <div v-for="(items, key) in inventory" class="item-box col-md-3">
                            <label class="mt-2">{{ showCategory(key) }}</label>
                            <hr>
                            <div v-for="item in items">
                                <p>{{ item.name }}</p>
                                <img :src="'storage/' + key + '/' + item.image"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: {
         userId: Number,
    },
    
    data: function() {
        return {
            inventory: {},
        }
    },

    methods: {
        showEquipment: function() {
            axios.post('/api/inventory/get-inventory', {
                user_id: this.userId 
            }).then((response) => {
                this.inventory = response.data;
            }).catch(error => {
                //
            })
        },

        showCategory: function(key){
            if(key === 'boxes') return 'Skrzynki';
            if(key === 'runes') return 'Runy';
            if(key === 'prizes') return 'Nagrody';
        }
    },
}
</script>