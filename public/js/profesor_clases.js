var app = new Vue({
	el: '#app',
	data: {
		input: {}
	},
	created: function () {
		var url = window.location.href.split('/');
		setTimeout(function() {
			if(url.pop() == 0) $('#nuevaClaseModal').modal('show');
		}, 10);
	},
	methods: {
		enviar: function () {
			console.log(this.input);
		}
	}
});