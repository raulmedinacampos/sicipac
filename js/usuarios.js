function Init() {
	$("#registros").DataTable({
		"fnDrawCallback": function(oSettings) {
			// Muestra u oculta paginación
			if (oSettings._iDisplayLength >= oSettings.fnRecordsDisplay()) {
				$(oSettings.nTableWrapper).find('.dataTables_paginate').hide();
			}
			
			EditUser();
			DeleteUser();
	    },
	    "oLanguage": {
            "oPaginate": {
	            "sPrevious": "&#171;",
	            "sNext": "&#187;"
		    },
		    "sInfo": "Usuarios _START_ de _END_ de un total de _TOTAL_",
		    "sZeroRecords": "No se encontraron resultados"
	    },
	    "bLengthChange": false,
		"pageLength": 15
	});
}

function AddUser() {
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

function EditUser() {
	$("#registros .glyphicon-pencil").click(function(e) {
		e.preventDefault();
		
		var id = $(this).data("usuario");
		
		$("#modalUsuario #formUsuarios").attr("action", "/configuracion/usuarios/editar");
		$("#modalUsuario .modal-header .modal-title").html("Editar usuario");
		$("#modalUsuario .modal-footer .btn-primary").html("Actualizar");
		
		$(".div-oculto").css("display", "block");
		$(".div-btn-datos").css("display", "none");
		
		$.post(
			"/configuracion/usuarios/consultar", 
			{"id": id}, 
			function(data) {
				try {
					var d = jQuery.parseJSON(data);
				} catch(e) {}
				
				if ( d ) {
					d = d[0];
					var correo = d.CORREO.split("@");
					
					$("#hdnID").val(d.IDUSUARIO);
					$("#numEmpleado").val(d.NUMEMPLEADO);
					$("#puesto").val(d.PUESTO);
					$("#area").val(d.AREA);
					$("#nombre").val(d.NOMBRE);
					$("#apPaterno").val(d.APPATERNO);
					$("#apMaterno").val(d.APMATERNO);
					$("#extension").val(d.EXTENSION);
					$("#correo").val(correo[0]);
					$("#nomUsuario").val(d.NOMBREUSUARIO);
					$("#password").val(d.PASSWORD);
					
					$('input[name="activo"]').each(function() {
						if ( $(this).val() == d.ACTIVO ) {
							$(this).trigger("click");
						}
					});
				}
			}
		);
		
		$("#modalUsuario").modal("show");
	});
}

function DeleteUser() {
	$("#registros .glyphicon-trash").click(function(e) {
		e.preventDefault();
		
		var id = $(this).data("usuario");
		
		$("#modalConf #idUsuario").val(id);
		
		$("#modalConf").modal("show");
	});
}

function CreateUserData() {
	$("#btnDatos").click(function(e) {
		e.preventDefault();
		
		if ( $("#correo").valid() ) {
			$("#nomUsuario").val($("#correo").val()+'@cofaa.ipn.mx');
			$("#password").val($("#correo").val()+Math.floor((Math.random() * 999) + 1));
			
			$(".div-oculto").css("display", "block");
			$(".div-btn-datos").css("display", "none");
		}
	});
}

function Validate() {
	$("#formUsuarios").validate({
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
			numEmpleado: {
				digits: true
			},
			nombre: {
				required: true
			},
			correo: {
				required: true
			},
			nomUsuario: {
				required: true
			},
			password: {
				required: true
			}
		},
		messages: {
			numEmpleado: "Deben ser solo números",
			nombre: "Campo obligatorio",
			correo: "Campo obligatorio",
			nomUsuario: "Campo obligatorio",
			password: "Campo obligatorio"
		}
	});
}

$(function() {
	Init();
	AddUser();
	EditUser();
	DeleteUser();
	CreateUserData();
	Validate();
});