function AddJob() {
	$("#btn-puesto").click(function(e) {
		e.preventDefault();
		
		$("#modalPuesto .modal-header .modal-title").html("Agregar puesto laboral");
		$("#modalPuesto .modal-footer .btn-primary").html("Guardar");
		
		$('#modalPuesto .modal-body input[type="text"]').each(function() {
			$(this).val("");
		});
		
		$("#modalPuesto .modal-body textarea").each(function() {
			$(this).val("");
		});
		
		$("#modalPuesto .modal-body select").each(function() {
			$(this).val("");
		});
		
		$('input[name="activo"]').each(function() {
			if ( $(this).val() == "S" ) {
				$(this).trigger("click");
			}
		});
		
		$("#modalPuesto").modal("show");
	});
}

function EditJob() {
	$("#registros .glyphicon-pencil").click(function(e) {
		e.preventDefault();
		
		var id = $(this).data("leyenda");
		
		$("#modalPuesto .modal-header .modal-title").html("Editar puesto laboral");
		$("#modalPuesto .modal-footer .btn-primary").html("Actualizar");
		
		$.post(
			"", 
			{"id": id}, 
			function(data) {
				try {
					var d = jQuery.parseJSON(data);
				} catch(e) {}
				
				if ( d ) {
					$("#hdnID").val(d.idPuesto);
					$("#puesto").val(d.puesto);
					
					$('input[name="activo"]').each(function() {
						if ( $(this).val() == d.activo ) {
							$(this).trigger("click");
						}
					});
				}
			}
		);
		
		$("#modalPuesto").modal("show");
	});
}

function DeleteJob() {
	$("#registros .glyphicon-trash").click(function(e) {
		e.preventDefault();
		
		var id = $(this).data("puesto");
		
		$("#modalConf #idPuesto").val(id);
		
		$("#modalConf").modal("show");
	});
}

function Validate() {
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
	AddJob();
	EditJob();
	DeleteJob();
	Validate();
});