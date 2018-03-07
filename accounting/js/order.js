$(document).ready(function(){
	listorder();
    loadaddordermodal();
    holdorderid();
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
    else if(quantity.value < 1){
        $("#errormsgaddorder").text("Quantity error");
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
function holdorderid(){
    $('body').on('click', '#tblorder>tr', function(){
        $("#orderidholder").val($(this).attr('data-id'));
    })
}
function declineorder(){
    var orderid = document.getElementById("orderidholder");
    $.ajax({
        url: url(),
        method: "post",
        data: {orderid: orderid.value, action: "declineorder"},
        beforeSend: function(){
            $("#modaldeclineorder").modal('hide');  
        },
        success: function(data){
            listorder();
        }
    })
}
function completeorder(){
    var orderid = document.getElementById("orderidholder");
    $.ajax({
        url: url(),
        method: "post",
        data: {orderid: orderid.value, action: "completeorder"},
        beforeSend: function(){
            $("#modalcompleteorder").modal('hide');
        },
        success: function(data){
            data = $.parseJSON(data);
            if(!data.status){
                $("#errormsgtblorder").text("Order has not yet confirmed by the supply department");
                setTimeout(function(){
                    $("#errormsgtblorder").empty();
                }, 5000)
            }
            else if(!data.quantity){
                $("#errormsgtblorder").text("Stock is not enough");
                setTimeout(function(){
                    $("#errormsgtblorder").empty();
                }, 5000)
            }
            else{
                listorder();
            }
        }
    })
}