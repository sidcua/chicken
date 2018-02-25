$(document).ready(function(){
	listorder();
})
function url(){
	return "./php/order.php";
}
function listorder(){
	$.ajax({
		url: url(),
		method: "post",
		data: {action: "listorder"},
		success: function(data){
			alert(data)
			data = $.parseJSON(data);
			$("#tblorder").html(data);
		}
	})
}