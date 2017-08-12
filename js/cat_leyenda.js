function AddText() {
	$("#btn-leyenda").click(function(e) {
		e.preventDefault();
		
		$("#modalLeyenda .modal-header .modal-title").html("Agregar leyenda");
		$("#modalLeyenda .modal-footer .btn-primary").html("Guardar");
		
		$('#modalLeyenda .modal-body input[type="text"]').each(function() {
			$(this).val("");
		});
		
		$("#modalLeyenda .modal-body textarea").each(function() {
			$(this).val("");
		});
		
		$("#modalLeyenda .modal-body select").each(function() {
			$(this).val("");
		});
		
		$('input[name="activo"]').each(function() {
			if ( $(this).val() == "S" ) {
				$(this).trigger("click");
			}
		});
		
		$("#modalLeyenda").modal("show");
	});
}

function EditText() {
	$("#registros .glyphicon-pencil").click(function(e) {
		e.preventDefault();
		
		var id = $(this).data("leyenda");
		
		$("#modalLeyenda .modal-header .modal-title").html("Editar leyenda");
		$("#modalLeyenda .modal-footer .btn-primary").html("Actualizar");
		
		$.post(
			"", 
			{"id": id}, 
			function(data) {
				try {
					var d = jQuery.parseJSON(data);
				} catch(e) {}
				
				if ( d ) {
					$("#hdnID").val(d.idLeyenda);
					$("#clave").val(d.clave);
					$("#seccion").val(d.seccion);
					$("#leyenda").val(d.leyenda);
					
					$('input[name="activo"]').each(function() {
						if ( $(this).val() == d.activo ) {
							$(this).trigger("click");
						}
					});
				}
			}
		);
		
		$("#modalLeyenda").modal("show");
	});
}

function DeleteText() {
	$("#registros .glyphicon-trash").click(function(e) {
		e.preventDefault();
		
		var id = $(this).data("leyenda");
		
		$("#modalConf #idLeyenda").val(id);
		
		$("#modalConf").modal("show");
	});
}

function Validate() {
	$("#formLeyendas").validate({
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
			clave: {
				required: true
			},
			seccion: {
				required: true
			},
			leyenda: {
				required: true
			}
		},
		messages: {
			clave: "Campo obligatorio",
			seccion: "Campo obligatorio",
			leyenda: "Campo obligatorio"
		}
	});
}

$(function() {
	AddText();
	EditText();
	DeleteText();
	Validate();
});