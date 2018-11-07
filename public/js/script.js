root = $('meta[name="root"]').attr('content');

// var cookies = {};
// var cookiesString = document.cookie.split(' ');
// cookiesString.forEach(function (cookie, key) {
//     aux = cookie.split('=');
//     if(key != cookiesString.length-1) aux[1] = aux[1].slice(0, aux[1].length-1);
//     cookies[aux[0]] = aux[1];
// });

Vue.http.options.root = root;
Vue.http.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content');
// Vue.http.headers.common['X-XSRF-TOKEN'] = cookies['XSRF-TOKEN'];

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
                this.$http.post('login/login', this.usuarioInput).then(response => {
                    window.location.href = root;
                }, errors => {
                    this.errors = errors.body;
                    this.usuarioInput.password = '';
                })
            },

            registrar: function () {
                this.$http.post('login/registro', this.registroInput).then(response => {
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

if($('#profesor')) {
    var app = new Vue({
        el: '#profesor'
    })
}