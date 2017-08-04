function AddUser() {
	$("#btn-usuario").click(function(e) {
		e.preventDefault();
		
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
		
		var id = $(this).data("leyenda");
		
		$("#modalUsuario .modal-header .modal-title").html("Editar usuario");
		$("#modalUsuario .modal-footer .btn-primary").html("Actualizar");
		
		$(".div-oculto").css("display", "block");
		$(".div-btn-datos").css("display", "none");
		
		$.post(
			"", 
			{"id": id}, 
			function(data) {
				try {
					var d = jQuery.parseJSON(data);
				} catch(e) {}
				
				if ( d ) {
					$("#hdnID").val(d.idUsuario);
					$("#numEmpleado").val(d.numEmpleado);
					$("#puesto").val(d.puesto);
					$("#area").val(d.area);
					$("#nombre").val(d.nombre);
					$("#apPaterno").val(d.apPaterno);
					$("#apMaterno").val(d.apMaterno);
					$("#extension").val(d.extension);
					$("#correo").val(d.correo);
					$("#nomUsuario").val(d.nombreUsuario);
					$("#password").val(d.password);
					
					$('input[name="activo"]').each(function() {
						if ( $(this).val() == d.activo ) {
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
			nombre: "Campo obligatorio",
			correo: "Campo obligatorio",
			nomUsuario: "Campo obligatorio",
			password: "Campo obligatorio"
		}
	});
}

$(function() {
	AddUser();
	EditUser();
	DeleteUser();
	CreateUserData();
	Validate();
});