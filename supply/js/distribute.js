$(document).ready(function(){
	listitem();
	initmodaldistribute();
	holditemid();
})
function url(){
	return "php/distribute.php";
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
function holditemid(){
	$('body').on('click', '#tblitems>tr', function(){
		$("#itemidholder").val($(this).attr('data-id'));
	});
}
function initmodaldistribute(){
	$("#modaldistributeitem").on('show.bs.modal', function(){
		$("[for='slctdist']").text($("#slctdistribution").val());
		loaddistribution($("#slctdistribution").val());
		$("#errormsgdistributeitem").text("");
		$("#txtquantity").val("");
		$("[for='txtquantity']").removeClass("active");
	})
}
function loaddistribution(type){
	$.ajax({
		url: url(),
		method: "post",
		data: {type: type, action: "loaddistribution"},
		beforeSend: function(){

		},
		success: function(data){
			data = $.parseJSON(data);
			$("#slctdist").html(data);
		}
	})
}
function distribute(){
	var type = document.getElementById("slctdistribution");
	var quantity = document.getElementById("txtquantity");
	var itemid = document.getElementById("itemidholder");
	if(type.value == "Office"){
		var office = document.getElementById("slctdist");
	}	
	else{
		var name = document.getElementById("slctdist");
	}
	if(!quantity.value){
		$("#errormsgdistributeitem").html("Quantity required");
	}
	else{
		if(type.value == "Office"){
			$.ajax({
				url: url(),
				method: "post",
				data: {itemid: itemid.value, office: office.value, quantity: quantity.value, action: "distribute_office"},
				beforeSend: function(){

				},
				success: function(data){
					data = $.parseJSON(data)
					if(!data){
						$("#errormsgdistributeitem").html("Stock is not enough to distribute");
					}
					else{
						$("#modaldistributeitem").modal('hide');
						listitem();
					}
				}
			})
		}
		else{
			$.ajax({
				url: url(),
				method: "post",
				data: {itemid: itemid.value, name: name.value, quantity: quantity.value, action: "distribute_account"},
				beforeSend: function(){

				},
				success: function(data){
					data = $.parseJSON(data)
					if(!data){
						$("#errormsgdistributeitem").html("Stock is not enough to distribute");
					}
					else{
						$("#modaldistributeitem").modal('hide');
						listitem();
					}
				}
			})
		}
	}
}