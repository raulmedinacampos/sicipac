function Inicializar() {
	$("#username").focus();
}
function Validar() {
	$("#formLogin").validate({
		errorElement: "span",
		errorClass: "help-block",
		errorPlacement: function(error, element) {
			if ( element.parent(".input-group").length ) {
				error.insertAfter(element.parent());
			} else {
				error.insertAfter(element);
			}
		},
		highlight: function(element) {
			$(element).closest(".form-group").addClass("has-error");
		},
		unhighlight: function(element) {
			$(element).closest(".form-group").removeClass("has-error");
		},
		rules: {
			username: {
				required: true
			},
			password: {
				required: true
			}
		},
		messages: {
			username: {
				required: "Ingresa el usuario"
			},
			password: {
				required: "Ingresa la contraseña"
			}
		}
	});
}

$(function() {
	Inicializar();
	Validar();
});