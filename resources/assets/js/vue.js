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
            name: "",
            email: "",
            password: ""
        },
        methods: {
            submit: function () {
                var data = this._data;
                var validator = this.$validator;
                validator.validateAll().then(function (value) {
                    if (value) {
                        axios.post(document.getElementById('create-user').action, data)
                            .then(function (response) {
                                console.log(response);
                            })
                            .catch(function (result) {
                                if (result.response.status == 422) {
                                    for (var field in result.response.data.errors) {
                                        validator.errors.add({
                                            field: field,
                                            msg: _.head(result.response.data.errors[field])
                                        })
                                    }
                                }
                            });
                    }
                });
            }
        }
    });
}