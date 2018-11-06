root = $('meta[name="root"]').attr('content');

Vue.http.options.root = root;
Vue.http.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content');

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
            datos: {}
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
                this.$http.post(root + '/login/login', this.usuarioInput).then(response => {
                    window.location.href = root;
                }, errors => {
                    this.errors = errors.body;
                    this.usuarioInput.password = '';
                })
            },

            registrar: function () {
                this.$http.post(root + '/login/registro', this.registroInput).then(response => {
                    swal('Registro completo!', 'Hemos registrado tu usuario con exito!', 'success').then(value => {
                        this.usuarioInput.username = this.registroInput.usuario.username;
                        this.errors = {};
                        $('#registroModal').modal('hide');
                    });
                }, error => {
                    this.errors = error.body;
                    this.registroInput.usuario.password = "";
                });
            }
        },

        created: function () {
            this.$http.get('login/datos-registro').then(response => {
                this.datos = response.body;
            });
        }
    });
}