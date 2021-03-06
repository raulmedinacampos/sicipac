function Inicializar() {
	$('#password').keypress(function(e) {
		var s = String.fromCharCode(e.which);
		
		if ( s.toUpperCase() === s && s.toLowerCase() !== s && !e.shiftKey ) {
			if ( !$(".bubble").is(":visible") ) {
				$(".bubble").fadeIn();
			}
		} else {
			if ( $(".bubble").is(":visible") ) {
				$(".bubble").fadeOut();
			}
		}
	});
	
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