import Vue from 'vue';
import VeeValidate from 'vee-validate';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

Vue.use(VeeValidate);

if ($('#app').length) {
    new Vue({
        el: '#app'
    });
}

if ($('#create-user').length) {
    new Vue({
        el: '#create-user',
        data: {
            name: ""
        },
        methods: {
            submit: function () {
                if (!this.$validator.any()) {

                }
            }
        }
    });
}