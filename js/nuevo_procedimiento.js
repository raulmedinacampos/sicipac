function Init() {
	$(".datepicker").datetimepicker({
		format: "DD/MM/YYYY"
	});
	
	$(".timepicker").datetimepicker({
		format: "LT"
	});
	
	$("#fileDocumento").fileinput({
		browseLabel: "Buscar"
	});
}

function ToggleClarification() {
	$('input[name="aclaraciones"]').change(function() {
		if ( $(this).val() == 0 ) {
			$(".div-aclaracion").css("display", "none");
		} else {
			$(".div-aclaracion").css("display", "table");
		}
	});
}

$(function() {
	Init();
	ToggleClarification();
});