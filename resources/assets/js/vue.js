import Vue from 'vue';
import VeeValidate from 'vee-validate';

Vue.use(VeeValidate);


if ($('#flash-message').length) {
    var flashMessage = new Vue({
        el: '#flash-message',
        data: {
            message: ''
        },
        watch: {
            message: function () {
                return !!this.message;
            }
        }
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
                            .catch(function (result) {
                                if (result.response.status == 422) {
                                    for (var field in result.response.data.errors) {
                                        validator.errors.add({
                                            field: field,
                                            msg: _.head(result.response.data.errors[field])
                                        })
                                    }
                                    flashMessage.message = result.response.statusText
                                }
                            });
                    }
                });
            }
        }
    });
}