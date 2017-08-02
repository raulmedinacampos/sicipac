function VerDetalle() {
	$(".icon_documents_alt").click(function() {
		$("#modalDetalle").modal('show');
	});
}

function SeleccionarPartida() {
	$("#tblPartidas td").click(function() {
		var elem = $(this);
		var tr = elem.parent();
		
		if ( tr.hasClass("selected") ) {
			tr.removeClass("selected");
		} else {		
			$("#tblPartidas tr").each(function() {
				$(this).removeClass("selected");
			});
			
			tr.addClass("selected");
		}
	});
}

$(function() {
	VerDetalle();
	SeleccionarPartida();
});