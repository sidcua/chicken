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
<<<<<<< HEAD
=======
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
>>>>>>> 5a5f769539a2bc04cca1fd0803590810684255ca
        }
    })
}