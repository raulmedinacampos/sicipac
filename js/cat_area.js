function Init() {
	$("#btn-area").click(function(e) {
		e.preventDefault();
		
		$("#modalArea").modal("show");
	});
}

function Validar() {
	$("#formAreas").validate({
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
			area: {
				required: true
			}
		},
		messages: {
			area: "Campo obligatorio"
		}
	});
}

$(function() {
	Init();
	Validar();
});