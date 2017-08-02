function Init() {
	$("#btn-usuario").click(function(e) {
		e.preventDefault();
		
		$("#modalUsuario").modal("show");
	});
	
	$("#btnDatos").click(function(e) {
		e.preventDefault();
		
		if ( $("#correo").valid() ) {
			$("#nomUsuario").val($("#correo").val());
			$("#password").val($("#correo").val()+Math.floor((Math.random() * 999) + 1));
			
			$(".div-oculto").css("display", "block");
			$(".div-btn-datos").css("display", "none");
		}
	});
}

function Validar() {
	$("#formUsuarios").validate({
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
			nombre: {
				required: true
			},
			correo: {
				required: true
			}
		},
		messages: {
			nombre: "Campo obligatorio",
			correo: "Campo obligatorio"
		}
	});
}

$(function() {
	Init();
	Validar();
});