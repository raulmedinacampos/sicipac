function AddArea() {
	$("#btn-area").click(function(e) {
		e.preventDefault();
		
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
		
		$("#modalArea .modal-header .modal-title").html("Editar área administrativa");
		$("#modalArea .modal-footer .btn-primary").html("Actualizar");
		
		$.post(
			"", 
			{"id": id}, 
			function(data) {
				try {
					var d = jQuery.parseJSON(data);
				} catch(e) {}
				
				if ( d ) {
					$("#hdnID").val(d.idArea);
					$("#area").val(d.area);
					$("#siglas").val(d.siglas);
					$("#areaPadre").val(d.areaPadre);
					$("#descripcion").val(d.descripcion);
					
					$('input[name="activo"]').each(function() {
						if ( $(this).val() == d.activo ) {
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
	AddArea();
	EditArea();
	DeleteArea();
	Validate();
});