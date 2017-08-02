function Init() {
	$("#btn-unidad").click(function(e) {
		e.preventDefault();
		
		$("#modalUnidad").modal("show");
	});
}

function Validar() {
	$("#formUnidades").validate({
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
			unidad: {
				required: true
			}
		},
		messages: {
			unidad: "Campo obligatorio"
		}
	});
}

$(function() {
	Init();
	Validar();
});