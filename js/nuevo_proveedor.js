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
	
	$("#fileDocumento").fileinput({
		browseLabel: "Buscar"
	});
}

function AddProv() {
	$("#btn-usuario").click(function(e) {
		e.preventDefault();
		
		$("#modalUsuario #formUsuarios").attr("action", "/configuracion/usuarios/agregar");
		$("#modalUsuario .modal-header .modal-title").html("Agregar usuario");
		$("#modalUsuario .modal-footer .btn-primary").html("Guardar");
		
		$('#modalUsuario .modal-body input[type="text"]').each(function() {
			$(this).val("");
		});
		
		$("#modalUsuario .modal-body textarea").each(function() {
			$(this).val("");
		});
		
		$("#modalUsuario .modal-body select").each(function() {
			$(this).val("");
		});
		
		$('input[name="activo"]').each(function() {
			if ( $(this).val() == "S" ) {
				$(this).trigger("click");
			}
		});
		
		$(".div-oculto").css("display", "none");
		$(".div-btn-datos").css("display", "block");
		
		$("#modalUsuario").modal("show");
	});
}








function EditProv() {
	$("#registros .glyphicon-pencil").click(function(e) {
		e.preventDefault();
		
		var id = $(this).data("proveedor");
		
		$("#modalProveedor #formProveedor").attr("action", "/proveedores/editar");
		$("#modalProveedor .modal-header .modal-title").html("Editar proveedor");
		$("#modalProveedor .modal-footer .btn-primary").html("Actualizar");
		
		$(".div-oculto").css("display", "block");
		$(".div-btn-datos").css("display", "none");
		
		$.post(
			"/proveedores/consultar-proveedor", 
			{"id": id}, 
			function(data) {
				try {
					var d = jQuery.parseJSON(data);
				} catch(e) {}
				
				if ( d ) {
					d = d[0];
					
					if ( d.TIPOCONTRIBUYENTE == "pf" ) {
						$(".p-fisica").css("display", "block");
						$(".p-moral").css("display", "none");
					}
					
					if ( d.TIPOCONTRIBUYENTE == "pm" ) {
						$(".p-fisica").css("display", "none");
						$(".p-moral").css("display", "block");
					}
				
					$("#hdnID").val(d.IDPROVEEDOR);
					$("#tipoContribuyente").val(d.TIPOCONTRIBUYENTE);
					$("#rfc").val(d.RFC);
					$("#nombre").val(d.NOMBRE);
					$("#apPaterno").val(d.APPATERNO);
					$("#apMaterno").val(d.APMATERNO);
					$("#razonSocial").val(d.RAZONSOCIAL);
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
		
		$("#modalProveedor").modal("show");
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

function Validate() {
	$("#formProveedores").validate({
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
			tipoContribuyente: {
				required: true
			},
			rfc: {
				required: true,
				minlength: function() {
					if ( $("#tipoContribuyente").val() == "pf") {
						return 13;
					}
					
					if ( $("#tipoContribuyente").val() == "pm") {
						return 12;
					}
				},
				maxlength: function() {
					if ( $("#tipoContribuyente").val() == "pf") {
						return 13;
					}
					
					if ( $("#tipoContribuyente").val() == "pm") {
						return 12;
					}
				}
			},
			nombre: {
				required: function() {
					return $("#tipoContribuyente").val() == "pf";
				}
			},
			razonSocial: {
				required: function() {
					return $("#tipoContribuyente").val() == "pm";
				}
			},
			cp: {
				digits: true
			}
		},
		messages: {
			tipoContribuyente: "Campo obligatorio",
			rfc: {
				required: "Campo obligatorio",
				minlength: "Faltan caracteres",
				maxlength: "Sobran caracteres",
			},
			nombre: "Campo obligatorio",
			razonSocial: "Campo obligatorio",
			cp: "Deben ser solo números"
		}
	});
}

$(function() {
	Init();
	AddAgent();
	EditAgent();
	DeleteAgent();
	AddContact();
	EditContact();
	AddProv();
	Validate();
});