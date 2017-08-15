function Init() {
	$("#registros").DataTable({
		"fnDrawCallback": function(oSettings) {
			// Muestra u oculta paginación
			if (oSettings._iDisplayLength >= oSettings.fnRecordsDisplay()) {
				$(oSettings.nTableWrapper).find('.dataTables_paginate').hide();
			}
			
			EditArea();
			DeleteArea();
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

function AddArea() {
	$("#btn-area").click(function(e) {
		e.preventDefault();
		
		$("#modalArea #formAreas").attr("action", "/configuracion/areas-administrativas/agregar");
		$("#modalArea .modal-header .modal-title").html("Agregar área administrativa");
		$("#modalArea .modal-footer .btn-primary").html("Guardar");
		
		$('#modalArea .modal-body input[type="text"]').each(function() {
			$(this).val("");
		});
		
		$("#modalArea .modal-body textarea").each(function() {
			$(this).val("");
		});
		
		$("#modalArea .modal-body select").each(function() {
			$(this).val("");
		});
		
		$('input[name="activo"]').each(function() {
			if ( $(this).val() == "S" ) {
				$(this).trigger("click");
			}
		});
		
		$("#modalArea").modal("show");
	});
}

function EditArea() {
	$("#registros .glyphicon-pencil").click(function(e) {
		e.preventDefault();
		
		var id = $(this).data("area");
		
		$("#modalArea #formAreas").attr("action", "/configuracion/areas-administrativas/editar");
		$("#modalArea .modal-header .modal-title").html("Editar área administrativa");
		$("#modalArea .modal-footer .btn-primary").html("Actualizar");
		
		$("#areaPadre option").show();
		
		$.post(
			"/configuracion/areas-administrativas/consultar", 
			{"id": id}, 
			function(data) {
				try {
					var d = jQuery.parseJSON(data);
				} catch(e) {}
				
				if ( d ) {
					d = d[0];
					$("#hdnID").val(d.IDAREA);
					$("#area").val(d.AREA);
					$("#siglas").val(d.SIGLAS);
					$("#areaPadre").val(d.AREAPADRE);
					$("#descripcion").val(d.DESCRIPCION);
					
					$('#areaPadre option[value="'+d.IDAREA+'"').hide();
					
					$('input[name="activo"]').each(function() {
						if ( $(this).val() == d.ACTIVO ) {
							$(this).trigger("click");
						}
					});
				}
			}
		);
		
		$("#modalArea").modal("show");
	});
}

function DeleteArea() {
	$("#registros .glyphicon-trash").click(function(e) {
		e.preventDefault();
		
		var id = $(this).data("area");
		
		$("#modalConf #idArea").val(id);
		
		$("#modalConf").modal("show");
	});
}

function Validate() {
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
	AddArea();
	EditArea();
	DeleteArea();
	Validate();
});