Vue.http.options.root = $('meta[name="root"]').attr('content');
Vue.http.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content');

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

if($('#login').length) {

    var login = new Vue({
        el: '#login',
        data: {
            usuarioInput: {},
            registroInput: {
                persona: {},
                usuario: {
                    rol: null
                }
            },
            errors: {},
            datos: {}
        },

        methods: {
            abrirRegistroModal: function () {
                this.registroInput = {
                    persona: {},
                    usuario: {
                        rol: null
                    }
                };
                $('#registroModal').modal('show');
            },

            login: function () {
                console.log(this.usuarioInput);
            },

            registrar: function () {
                console.log(this.registroInput);
            }
        },

        created: function () {
            this.$http.get('login/datos-registro').then(response => {
                this.datos = response.body;
            });
        }
    });
}