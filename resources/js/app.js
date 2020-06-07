/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

Vue.component('main-view', require('./components/MainView.vue').default);
Vue.component('equipment-store', require('./components/StoreEquipment/Store.vue').default);
Vue.component('user-inventory', require('./components/UserEquipment/Inventory.vue').default);
Vue.component('user-wallet', require('./components/User/Wallet.vue').default);
Vue.component('get-coins', require('./components/Coin/GetCoins.vue').default);

//shop
Vue.component('boxes', require('./components/StoreEquipment/Boxes.vue').default);
Vue.component('runes', require('./components/StoreEquipment/Runes.vue').default);
Vue.component('prizes', require('./components/StoreEquipment/Prizes.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});