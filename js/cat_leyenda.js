function Init() {
	$("#registros").DataTable({
		"fnDrawCallback": function(oSettings) {
			// Muestra u oculta paginación
			if (oSettings._iDisplayLength >= oSettings.fnRecordsDisplay()) {
				$(oSettings.nTableWrapper).find('.dataTables_paginate').hide();
			}
			
			EditText();
			DeleteText();
	    },
	    "oLanguage": {
            "oPaginate": {
	            "sPrevious": "&#171;",
	            "sNext": "&#187;"
		    },
		    "sInfo": "Leyendas _START_ de _END_ de un total de _TOTAL_",
		    "sZeroRecords": "No se encontraron resultados"
	    },
	    "bLengthChange": false,
		"pageLength": 15
	});
}

function AddText() {
	$("#btn-leyenda").click(function(e) {
		e.preventDefault();
		
		$("#modalLeyenda #formLeyendas").attr("action", "/configuracion/leyendas/agregar");
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
		
		$("#modalLeyenda #formLeyendas").attr("action", "/configuracion/leyendas/editar");
		$("#modalLeyenda .modal-header .modal-title").html("Editar leyenda");
		$("#modalLeyenda .modal-footer .btn-primary").html("Actualizar");
		
		$.post(
			"/configuracion/leyendas/consultar", 
			{"id": id}, 
			function(data) {
				try {
					var d = jQuery.parseJSON(data);
				} catch(e) {}
				
				if ( d ) {
					d = d[0];
					$("#hdnID").val(d.IDLEYENDA);
					$("#clave").val(d.CLAVE);
					$("#seccion").val(d.SECCION);
					$("#leyenda").val(d.LEYENDA);
					
					$('input[name="activo"]').each(function() {
						if ( $(this).val() == d.ACTIVO ) {
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
	Init();
	AddText();
	EditText();
	DeleteText();
	Validate();
});