$(document).ready(function(){
	listitem();
	holdaccid();
	resetmodaladditem();
	transferitemdetails();
	resetmodalchangequantity();
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
			// alert(data);
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
		$("#edittxtname").val(name);
		$("[for='edittxtname']").addClass("active");
	});
}
function edititem(){
	var itemid = document.getElementById("itemidholder");
	var name = document.getElementById("edittxtname");
	if(!name.value.trim()){
		$("#errormsgeditquantity").html('<strong>Name required</strong>');
	}
	else{
		$.ajax({
			url: url(),
			method: "post",
			data: {itemid: itemid.value, name: name.value.trim(), action: "edititem"},
			beforeSend: function(){
				$("#tblitems").html("");
			},
			success: function(data){
				data = $.parseJSON(data);
				if(!data){
					$("#errormsgeditquantity").html('<strong>Name already existed</strong>');
				}
				else{
					$("#modaledititem").modal('hide');
					listitem();
				}
			}
		})
	}
}		
function increasequantity(){
	var itemid = document.getElementById("itemidholder");
	var quantity = document.getElementById("txtincrease");
	if(!quantity.value.trim()){
		$("#errormsgincreasequantity").html('<strong>Input Quantity</strong>');
	}
	else{
		$.ajax({
			url: url(),
			method: "post",
			data: {itemid: itemid.value, quantity: quantity.value, action: "increasequantity"},
			beforeSend: function(){
				$("#tblitems").html("");
				$("#modalincreasequantity").modal('hide');
			},
			success: function(data){
				listitem();
			}
		})
	}
}
function decreasequantity(){
	var itemid = document.getElementById("itemidholder");
	var quantity = document.getElementById("txtdecrease");
	if(!quantity.value.trim()){
		$("#errormsgdecreasequantity").html('<strong>Input Quantity</strong>');
	}
	else{
		$.ajax({
			url: url(),
			method: "post",
			data: {itemid: itemid.value, quantity: quantity.value, action: "decreasequantity"},
			beforeSend: function(){
			},
			success: function(data){
				data = $.parseJSON(data);
				if(!data){
					$("#errormsgdecreasequantity").html('<strong>Supply is not enough</strong>');
				}
				else{
					$("#modaldecreasequantity").modal('hide');
					listitem();
				}
			}
		})
	}
}
function resetmodalchangequantity(){
	$("#modalincreasequantity").on("hidden.bs.modal", function(){
		$("#errormsgincreasequantity").html("");
		$("#txtincrease").val("");
		$("[for='txtincrease'").removeClass("active");
	})
	$("#modaldecreasequantity").on("hidden.bs.modal", function(){
		$("#errormsgdecreasequantity").html("");
		$("#txtdecrease").val("");
		$("[for='txtdecrease'").removeClass("active");
	})
}