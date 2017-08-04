function AddSignature() {
	$("#btn-firma").click(function(e) {
		e.preventDefault();
		
		$("#modalFirma .modal-header .modal-title").html("Agregar firma");
		$("#modalFirma .modal-footer .btn-primary").html("Guardar");
		
		$('#modalFirma .modal-body input[type="text"]').each(function() {
			$(this).val("");
		});
		
		$("#modalFirma .modal-body textarea").each(function() {
			$(this).val("");
		});
		
		$("#modalFirma .modal-body select").each(function() {
			$(this).val("");
		});
		
		$('input[name="activo"]').each(function() {
			if ( $(this).val() == "S" ) {
				$(this).trigger("click");
			}
		});
		
		$("#modalFirma").modal("show");
	});
}

function EditSignature() {
	$("#registros .glyphicon-pencil").click(function(e) {
		e.preventDefault();
		
		var id = $(this).data("firma");
		
		$("#modalFirma .modal-header .modal-title").html("Editar firma");
		$("#modalFirma .modal-footer .btn-primary").html("Actualizar");
		
		$.post(
			"", 
			{"id": id}, 
			function(data) {
				try {
					var d = jQuery.parseJSON(data);
				} catch(e) {}
				
				if ( d ) {
					$("#hdnID").val(d.idFirma);
					$("#titulo").val(d.titulo);
					$("#nombre").val(d.nombre);
					$("#apPaterno").val(d.apPaterno);
					$("#apMaterno").val(d.apMaterno);
					$("#cargo").val(d.cargo);
					
					$('input[name="activo"]').each(function() {
						if ( $(this).val() == d.activo ) {
							$(this).trigger("click");
						}
					});
				}
			}
		);
		
		$("#modalFirma").modal("show");
	});
}

function DeleteSignature() {
	$("#registros .glyphicon-trash").click(function(e) {
		e.preventDefault();
		
		var id = $(this).data("firma");
		
		$("#modalConf #idFirma").val(id);
		
		$("#modalConf").modal("show");
	});
}

function Validate() {
	$("#formFirmas").validate({
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
	AddSignature();
	EditSignature();
	DeleteSignature();
	Validate();
});