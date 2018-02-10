$(document).ready(function(){
	listtransaction();
})
function url(){
	return "php/transaction.php";
}
function listtransaction(){
	$.ajax({
		url: url(),
		method: "post",
		data: {action: "listtransaction"},
		beforeSend: function(){

		},
		success: function(data){
			data = $.parseJSON(data);
			$("#tbltransaction").html(data);
			totaltransaction();
		}
	})
}
function cleartransaction(){
	$.ajax({
		url: url(),
		method: "post",
		data: {action: "cleartransaction"},
		beforeSend: function(){
			$("#modalcleartransaction").modal('hide');
		},
		success: function(data){
			listtransaction();
		}
	})
}
function totaltransaction(){
	$.ajax({
		url: url(),
		method: "post",
		data: {action: "totaltransaction"},
		beforeSend: function(){

		},
		success: function(data){
			data = $.parseJSON(data);
			$("#totaltransaction").text("Total Transaction: " + data);
		}
	})
}