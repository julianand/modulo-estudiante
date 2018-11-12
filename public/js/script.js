//Prueba
if($('#prueba').length) {
    var prueba = new Vue ({
        el: "#prueba",
        data: {
            input: {
                id: 1,
                nombre: 'julian',
                usuario: 'skr'
            },
            respuesta: {},
            show: false
        },
        created: function () {
            this.$http.post('prueba/prueba', this.input).then(response => {
                this.respuesta = response.body;
            });
        }
    });
}

//Login
if($('#login').length) {

    var login = new Vue({
        el: '#login',
        data: {
            usuarioInput: {},
            registroInput: {
                persona: {},
                usuario: {}
            },
            errors: {},
            datos: {},
        },

        methods: {
            abrirRegistroModal: function () {
                this.registroInput = {
                    persona: {},
                    usuario: {}
                };

                $('#registroModal').modal('show');
            },

            login: function () {
                var app = this;
                axios.post('login/login', this.usuarioInput).then(function (response) {
                    window.location.href = root;
                }).catch(function (error) {
                    if(error.response.data) app.errors = error.response.data;
                    else swal('Error', 'Contraseña incorrecta', 'error');

                    app.usuarioInput.password = '';
                })
            },

            registrar: function () {
                var app = this;
                axios.post('login/registro', this.registroInput).then(function (response) {
                    swal('Registro completo!', 'Hemos registrado tu usuario con exito!', 'success').then(value => {
                        app.usuarioInput.username = app.registroInput.usuario.username;
                        app.errors = {};
                        $('#registroModal').modal('hide');
                    });
                }).catch(function (error) {
                    app.errors = error.response.data;
                    app.registroInput.usuario.password = "";
                });
            }
        },

        created: function () {
            var app = this;
            axios.get('login/datos-registro').then(function (response) {
                app.datos = response.data;
            });
        }
    });
}

if($('#profesor').length) {
    var app = new Vue({
        el: '#profesor'
    })
}