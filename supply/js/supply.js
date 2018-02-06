$(document).ready(function(){
	listitem();
	holdaccid();
	resetmodaladditem();
	transferitemdetails();
})
function url(){
	return "php/supply.php";
}
function listitem(){
	$.ajax({
		url: url(),
		method: "post",
		data: {action: "listitem"},
		beforeSend: function(){
			$("#tblitems").html("");
		},
		success: function(data){
			data = $.parseJSON(data);
			$("#tblitems").html(data);
		}
	})
}
function holdaccid(){
	$('body').on('click', '#tblitems>tr', function(){
		$("#itemidholder").val($(this).attr('data-id'));
	});
}
function additem(){
	var name = document.getElementById("txtname");
	var quantity = document.getElementById("txtquantity");
	if(!name.value.trim() && !quantity.value.trim()){
		$("#errormsgaddquantity").html('<strong>Input item details</strong>');
	}
	else if(!name.value.trim()){
		$("#errormsgaddquantity").html('<strong>Name required</strong>');
	}
	else if(!quantity.value.trim()){
		$("#errormsgaddquantity").html('<strong>Quantity required</strong>');
	}
	else{
		$.ajax({
			url: url(),
			method: "post",
			data: {name: name.value.trim(), quantity: quantity.value, action: "additem"},
			beforeSend: function(){
				$("#tblitems").html("");
				$("#modaladditem").modal('hide');
			},
			success: function(data){
				data = $.parseJSON(data);
				if(!data){
					$("#errormsgaddquantity").html('<strong>Item already existed</strong>');
				}
				else{
					listitem();
				}
			}
		})
	}
}
function deleteitem(){
	var itemid = document.getElementById("itemidholder");
	$.ajax({
		url: url(),
		method: "post",
		data: {itemid: itemid.value, action: "deleteitem"},
		beforeSend: function(){
			$("#tblitems").html("");
			$("#modaldeleteitem").modal('hide');
		},
		success: function(data){
			listitem();
		}
	})
}
function resetmodaladditem(){
	$("#modaladditem").on('hidden.bs.modal', function(){
		$("#txtname").val("");
		$("#txtquantity").val("");
		$("[for='txtname']").removeClass("active");
		$("[for='txtquantity']").removeClass("active");
	})
}
function transferitemdetails(){
	$('body').on('click', '.edititem', function(){
		var name = $(this).closest('tr').find('.name').text();
		var quantity = $(this).closest('tr').find('.quantity').text();
		$("#edittxtname").val(name);
		$("#edittxtquantity").val(quantity);
		$("[for='edittxtname']").addClass("active");
		$("[for='edittxtquantity']").addClass("active");
	});
}
function edititem(){
	var itemid = document.getElementById("itemidholder");
	var name = document.getElementById("edittxtname");
	var quantity = document.getElementById("edittxtquantity");
	if(!name.value.trim() && !quantity.value.trim()){
		$("#errormsgeditquantity").html('<strong>Input item details</strong>');
	}
	else if(!name.value.trim()){
		$("#errormsgeditquantity").html('<strong>Name required</strong>');
	}
	else if(!quantity.value.trim()){
		$("#errormsgeditquantity").html('<strong>Quantity required</strong>');
	}
	else{
		$.ajax({
			url: url(),
			method: "post",
			data: {itemid: itemid.value, name: name.value.trim(), quantity: quantity.value.trim(), action: "edititem"},
			beforeSend: function(){
				$("#tblitems").html("");
				$("#modaledititem").modal('hide');
			},
			success: function(data){
				data = $.parseJSON(data);
				if(!data){
					$("#errormsgeditquantity").html('<strong>Name already existed</strong>');
				}
				else{
					listitem();
				}
			}
		})
	}
}		