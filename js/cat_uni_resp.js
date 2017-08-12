function AddUnit() {
	$("#btn-unidad").click(function(e) {
		e.preventDefault();
		
		$("#modalUnidad .modal-header .modal-title").html("Agregar unidad responsable");
		$("#modalUnidad .modal-footer .btn-primary").html("Guardar");
		
		$('#modalUnidad .modal-body input[type="text"]').each(function() {
			$(this).val("");
		});
		
		$("#modalUnidad .modal-body textarea").each(function() {
			$(this).val("");
		});
		
		$("#modalUnidad .modal-body select").each(function() {
			$(this).val("");
		});
		
		$('input[name="activo"]').each(function() {
			if ( $(this).val() == "S" ) {
				$(this).trigger("click");
			}
		});
		
		$("#modalUnidad").modal("show");
	});
}

function EditUnit() {
	$("#registros .glyphicon-pencil").click(function(e) {
		e.preventDefault();
		
		var id = $(this).data("leyenda");
		
		$("#modalUnidad .modal-header .modal-title").html("Editar unidad responsable");
		$("#modalUnidad .modal-footer .btn-primary").html("Actualizar");
		
		$.post(
			"", 
			{"id": id}, 
			function(data) {
				try {
					var d = jQuery.parseJSON(data);
				} catch(e) {}
				
				if ( d ) {
					$("#hdnID").val(d.idUniResponsable);
					$("#clave").val(d.clave);
					$("#siglas").val(d.siglas);
					$("#unidad").val(d.unidad);
					$("#cp").val(d.codigoPostal);
					$("#colonia").val(d.colonia);
					$("#calle").val(d.calle);
					$("#numExt").val(d.numExterior);
					$("#numInt").val(d.numInterior);
					$("#municipio").val(d.municipio);
					$("#entidad").val(d.entidad);
					
					$('input[name="activo"]').each(function() {
						if ( $(this).val() == d.activo ) {
							$(this).trigger("click");
						}
					});
				}
			}
		);
		
		$("#modalUnidad").modal("show");
	});
}

function DeleteUnit() {
	$("#registros .glyphicon-trash").click(function(e) {
		e.preventDefault();
		
		var id = $(this).data("unidad");
		
		$("#modalConf #idUnidad").val(id);
		
		$("#modalConf").modal("show");
	});
}

function Validate() {
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
			clave: {
				required: true
			},
			siglas: {
				required: true
			},
			unidad: {
				required: true
			},
			cp: {
				digits: true,
				minlength: 5,
				maxlength: 5
			}
		},
		messages: {
			clave: "Campo obligatorio",
			siglas: "Campo obligatorio",
			unidad: "Campo obligatorio",
			cp: {
				digits: "Deben ser solo números",
				minlength : "El código postal es de 5 dígitos",
				maxlength : "El código postal es de 5 dígitos"
			}
		}
	});
}

$(function() {
	AddUnit();
	EditUnit();
	DeleteUnit();
	Validate();
});