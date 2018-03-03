$(document).ready(function(){
    listorder();
    holditemid();
})
function url(){
    return "php/orders.php";
}
function listorder(){
    $.ajax({
        url: url(),
        method: "post",
        data: {action: "listorder"},
        beforeSend: function(){
            $("#tblorders").empty();
        },
        success: function(data){
            data = $.parseJSON(data);
            $("#tblorders").html(data);
        }
    })
}
function readyorder(){
    var orderid = document.getElementById("orderidholder");
    var quantity = document.getElementById("quantityholder");
    $.ajax({
        url: url(),
        method: "post",
        data: {orderid: orderid.value, quantity: quantity.value, action: "readyorder"},
        beforeSend: function(){
            $("#tblorders").empty();
            $("#modalreadyorder").modal('hide');
        },
        success: function(data){
            data = $.parseJSON(data);
            listorder();
        }
    })
}
function holditemid(){
	$('body').on('click', '#tblorders>tr', function(){
		$("#orderidholder").val($(this).attr('data-id'));
        $("#quantityholder").val($(this).closest('tr').find('.quantity').text());
	});
}