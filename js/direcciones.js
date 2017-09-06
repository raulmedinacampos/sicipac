function GetAddress(x = "") {
	var m = "";
	var municipios = "";
	
	if ( x != "" ) {
		m = x;
	} 
	
	$("#entidad").change(function() {
		var entidad = $(this).val();
		
		municipios = '<option value="">Seleccione</option>';
		
		$.post(
			"../direcciones/cargar-municipios", 
			{"entidad": entidad}, 
			function(data) {
				try {
					var d = jQuery.parseJSON(data);
				} catch(e) {}
				
				if ( d ) {
					$.each(d, function(i, obj) {
						municipios += '<option value="'+obj.IDMUNICIPIO+'"';
						if ( obj.IDMUNICIPIO == m ) {
							municipios += ' selected="selected"';
						}
						municipios += '>'+obj.MUNICIPIO+'</option>';
					});
					
					$("#municipio").html(municipios);
				}
			}
		);
	});
	
	$("#cp").keyup(function() {
		var cp = $(this).val();
		var opt = "";
		$(".dropdown-colonia").css("display", "none");
		$(".dropdown-colonia").html("");
		
		if ( cp.length > 4 ) {
			$.post(
				"../direcciones/buscar", 
				{"cp": cp}, 
				function(data) {
					try {
						var d = jQuery.parseJSON(data);
					} catch(e) {}
					
					if ( d ) {
						var c = 0;
						$("#municipio option").prop("selected", false);
						
						$.each(d, function(i, obj) {
							c++;
						});
						
						$.each(d, function(i, obj) {
							if ( c == 1 ) {
								$("#colonia").val(obj.COLONIA);
							} else {
								$("#colonia").val("");
								opt += '<li><a href="#">'+obj.COLONIA+'</a></li>';
							}
							//alert(m);

							m = obj.MUNICIPIO;
							$("#entidad").val(obj.ENTIDAD).change();
						});
						
						if ( c > 1 ) {
							$(".dropdown-colonia").append(opt);
							$(".dropdown-colonia").css("display", "block");
						}
						
						$(".dropdown-colonia li a").click(function(e) {
							e.preventDefault();
							
							$("#colonia").val($(this).text());
							
							$(".dropdown-colonia").css("display", "none");
						});
					}
				}
			);
		}
	});
}

$(function() {
	GetAddress();
});