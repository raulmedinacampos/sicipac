function Init() {
	$("#registros").DataTable({
		"fnDrawCallback": function(oSettings) {
			// Muestra u oculta paginación
			if (oSettings._iDisplayLength >= oSettings.fnRecordsDisplay()) {
				$(oSettings.nTableWrapper).find('.dataTables_paginate').hide();
			}
			
			EditUnit();
			DeleteUnit();
	    },
	    "oLanguage": {
            "oPaginate": {
	            "sPrevious": "&#171;",
	            "sNext": "&#187;"
		    },
		    "sInfo": "Unidades _START_ de _END_ de un total de _TOTAL_",
		    "sZeroRecords": "No se encontraron resultados"
	    },
	    "bLengthChange": false,
		"pageLength": 15
	});
}

function AddUnit() {
	$("#btn-unidad").click(function(e) {
		e.preventDefault();
		
		$("#modalUnidad #formUnidades").attr("action", "/configuracion/unidades-responsables/agregar");
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
		
		var id = $(this).data("unidad");
		
		$("#modalUnidad #formUnidades").attr("action", "/configuracion/unidades-responsables/editar");
		$("#modalUnidad .modal-header .modal-title").html("Editar unidad responsable");
		$("#modalUnidad .modal-footer .btn-primary").html("Actualizar");
		
		$.post(
			"/configuracion/unidades-responsables/consultar", 
			{"id": id}, 
			function(data) {
				try {
					var d = jQuery.parseJSON(data);
				} catch(e) {}
				
				if ( d ) {
					d = d[0];
					$("#hdnID").val(d.IDUNIRESPONSABLE);
					$("#clave").val(d.CLAVE);
					$("#siglas").val(d.SIGLAS);
					$("#unidad").val(d.UNIRESPONSABLE);
					$("#cp").val(d.CODIGOPOSTAL);
					$("#colonia").val(d.COLONIA);
					$("#calle").val(d.CALLE);
					$("#numExt").val(d.NUMEXTERIOR);
					$("#numInt").val(d.NUMINTERIOR);
					
					$("#entidad").val(d.ENTIDAD).change();
					
					GetAddress(d.MUNICIPIO);
					
					$('input[name="activo"]').each(function() {
						if ( $(this).val() == d.ACTIVO ) {
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
	Init();
	AddUnit();
	EditUnit();
	DeleteUnit();
	Validate();
});