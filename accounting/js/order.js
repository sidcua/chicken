$(document).ready(function(){
	listorder();
    loadaddordermodal();
})
function url(){
	return "./php/order.php";
}
function listorder(){
	$.ajax({
		url: url(),
		method: "post",
		data: {action: "listorder"},
        beforeSend: function(){
            $("#tblorder").empty();  
        },
		success: function(data){
			data = $.parseJSON(data);
			$("#tblorder").html(data);
		}
	})
}
function inititem(){
    $.ajax({
        url: url(),
        method: "post",
        data: {action: "inititem"},
        success: function(data){
            data = $.parseJSON(data);
            $("#slctitem").html(data);
        }
    })
}
function loadaddordermodal(){
    $("#modaladdorder").on('show.bs.modal', function(){
        inititem();
    })
}
function addorder(){
    var customer = document.getElementById("txtname");
    var slctitem = document.getElementById("slctitem");
    var quantity = document.getElementById("txtquantity");
    if(!customer.value.trim()){
        $("#errormsgaddorder").text("Customer name required");
    }
    else if(!quantity.value.trim()){
        $("#errormsgaddorder").text("Quantity required");
    }
    else{
        $.ajax({
            url: url(),
            method: "post",
            data: {customer: customer.value, item: slctitem.value, quantity: quantity.value, action: "addorder"},
            beforeSend: function(){
                $("#modaladdorder").modal('hide');
            },
            success: function(data){
                listorder();
            }
        })
    }
}