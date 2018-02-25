$(document).ready(function(){
	listexpense();
});
function url(){
	return "./php/expense.php";
}
function listexpense(){
	$.ajax({
		url: url(),
		method: "post",
		data: {action: "listexpense"},
		success: function(data){
			data = $.parseJSON(data);
			$("#tblexpense").html(data);
		}
	});
}
function clearexpense(){
	$.ajax({
		url: url(),
		method: "post",
		data: {action: "clearexpense"},
		beforeSend: function(){
			$("#tblexpense").empty();
		},
		success: function(data){
			listexpense();
		}
	})
}