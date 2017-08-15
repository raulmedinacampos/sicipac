function Init() {
	$("#registros").DataTable({
		"fnDrawCallback": function(oSettings) {
			// Muestra u oculta paginación
			if (oSettings._iDisplayLength >= oSettings.fnRecordsDisplay()) {
				$(oSettings.nTableWrapper).find('.dataTables_paginate').hide();
			}
			
			EditSignature();
			DeleteSignature();
	    },
	    "oLanguage": {
            "oPaginate": {
	            "sPrevious": "&#171;",
	            "sNext": "&#187;"
		    },
		    "sInfo": "Firmas _START_ de _END_ de un total de _TOTAL_",
		    "sZeroRecords": "No se encontraron resultados"
	    },
	    "bLengthChange": false,
		"pageLength": 15
	});
}

function AddSignature() {
	$("#btn-firma").click(function(e) {
		e.preventDefault();
		
		$("#modalFirma #formFirmas").attr("action", "/configuracion/firmas/agregar");
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
		
		$("#modalFirma #formFirmas").attr("action", "/configuracion/firmas/editar");
		$("#modalFirma .modal-header .modal-title").html("Editar firma");
		$("#modalFirma .modal-footer .btn-primary").html("Actualizar");
		
		$.post(
			"/configuracion/firmas/consultar", 
			{"id": id}, 
			function(data) {
				try {
					var d = jQuery.parseJSON(data);
				} catch(e) {}
				
				if ( d ) {
					d = d[0];
					$("#hdnID").val(d.IDFIRMA);
					$("#titulo").val(d.TITULO);
					$("#nombre").val(d.NOMBRE);
					$("#apPaterno").val(d.APPATERNO);
					$("#apMaterno").val(d.APMATERNO);
					$("#cargo").val(d.PUESTO);
					
					$('input[name="activo"]').each(function() {
						if ( $(this).val() == d.ACTIVO ) {
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
			nombre: {
				required: true
			},
			cargo: {
				required: true
			}
		},
		messages: {
			nombre: "Campo obligatorio",
			cargo: "Campo obligatorio"
		}
	});
}

$(function() {
	Init();
	AddSignature();
	EditSignature();
	DeleteSignature();
	Validate();
});