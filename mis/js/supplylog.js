$(document).ready(function(){
    listsupply();
    listtransaction();
})
function url(){
    return "./php/supplylog.php";
}
function listsupply(){
    $.ajax({
        url: url(),
        method: "post",
        data: {action: "listsupply"},
        beforeSend: function(){
            $("#tblsupply").empty();
        },
        success: function(data){
            data = $.parseJSON(data);
            $("#tblsupply").html(data);
        }
    })
}
function listtransaction(){
    $.ajax({
        url: url(),
        method: "post",
        data: {action: "listtransaction"},
        beforeSend: function(){
            $("#tbltransaction").empty();
        },
        success: function(data){
            data = $.parseJSON(data);
            $("#tbltransaction").html(data);
        }
    })
}
function printsupply(){
    window.open("print.php?print=supply")
}
function printtransaction(){
    window.open("print.php?print=transaction")
}