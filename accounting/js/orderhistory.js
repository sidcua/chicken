$(document).ready(function(){
    listhistory();
})
function url(){
    return "./php/orderhistory.php";
}
function listhistory(){
    $.ajax({
        url: url(),
        method: "post",
        data: {action: "listhistory"},
        beforeSend: function(){
            $("#tblhistory").empty();
        },
        success: function(data){
            data = $.parseJSON(data);
            $("#tblhistory").html(data);
        }
    })
}
function clearhistory(){
    $.ajax({
        url: url(),
        method: "post",
        data: {action: "clearhistory"},
        success: function(){
            listhistory();
        }
    })
}