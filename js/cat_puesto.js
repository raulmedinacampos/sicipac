function Init() {
	$("#btn-puesto").click(function(e) {
		e.preventDefault();
		
		$("#modalPuesto").modal("show");
	});
}

function Validar() {
	$("#formPuestos").validate({
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
			puesto: {
				required: true
			}
		},
		messages: {
			puesto: "Campo obligatorio"
		}
	});
}

$(function() {
	Init();
	Validar();
});