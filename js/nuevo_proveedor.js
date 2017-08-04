function Init() {
	$("#tipoContribuyente").change(function() {
		var tc = $(this).val();
		
		if ( tc == "") {
			$(".p-fisica").css("display", "none");
			$(".p-moral").css("display", "none");
		}
		
		if ( tc == "pf") {
			$(".p-fisica").css("display", "block");
			$(".p-moral").css("display", "none");
		}
		
		if ( tc == "pm") {
			$(".p-fisica").css("display", "none");
			$(".p-moral").css("display", "block");
		}
	});
}

function AddAgent() {
	$("#btnNuevoRepresentante").click(function(e) {
		e.preventDefault();
		
		$("#modalRepresentante .modal-header .modal-title").html("Agregar representante");
		$("#modalRepresentante .modal-footer .btn-primary").html("Guardar");
		
		$('#modalRepresentante .modal-body input[type="text"]').each(function() {
			$(this).val("");
		});
		
		$("#modalRepresentante .modal-body textarea").each(function() {
			$(this).val("");
		});
		
		$("#modalRepresentante .modal-body select").each(function() {
			$(this).val("");
		});
		
		$('input[name="activo"]').each(function() {
			if ( $(this).val() == "S" ) {
				$(this).trigger("click");
			}
		});
		
		$(".tabla-contacto").css("display", "none");
		$(".div-oculto").css("display", "none");
		$(".div-btn-contacto").css("display", "block");
		
		$("#modalRepresentante").modal("show");
	});
}

function EditAgent() {
	$("#registros .glyphicon-pencil").click(function(e) {
		e.preventDefault();
		
		var id = $(this).data("rep");
		
		$("#modalRepresentante .modal-header .modal-title").html("Editar representante");
		$("#modalRepresentante .modal-footer .btn-primary").html("Actualizar");
		
		$(".tabla-contacto").css("display", "block");
		$(".div-oculto").css("display", "none");
		$(".div-btn-contacto").css("display", "block");
		
		$.post(
			"", 
			{"id": id}, 
			function(data) {
				try {
					var d = jQuery.parseJSON(data);
				} catch(e) {}
				
				if ( d ) {
					$("#hdnID").val(d.idRepresentante);
					$("#tipo").val(d.tipo);
					$("#nombre").val(d.nombre);
					$("#apPaterno").val(d.apPaterno);
					$("#apMaterno").val(d.apMaterno);
					
					$('input[name="activo"]').each(function() {
						if ( $(this).val() == d.activo ) {
							$(this).trigger("click");
						}
					});
				}
			}
		);
		
		$("#modalRepresentante").modal("show");
	});
}

function DeleteAgent() {
	$("#registros .glyphicon-trash").click(function(e) {
		e.preventDefault();
		
		var id = $(this).data("rep");
		
		$("#modalConf #idRepresentante").val(id);
		
		$("#modalConf").modal("show");
	});
}

function AddContact() {
	$("#btnContacto").click(function(e) {
		e.preventDefault();
		
		$(".div-oculto").css("display", "block");
		$(".div-btn-contacto").css("display", "none");
	});
}

function EditContact() {
	$(".tabla-contacto .glyphicon-pencil").click(function(e) {
		e.preventDefault();
		
		var elem = $(this);
		var contacto = elem.data("contacto");
		var txt = elem.parents("tr").children("td:nth-child(3)");
		var valor = txt.text();
		var i;
		
		i = '<input id="" name="" class="form-control" value="'+valor+'" />';
		txt.html(i);
	});
}

$(function() {
	Init();
	AddAgent();
	EditAgent();
	DeleteAgent();
	AddContact();
	EditContact();
});