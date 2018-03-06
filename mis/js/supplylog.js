$(document).ready(function(){
    listsupply();
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
            alert(data)
            data = $.parseJSON(data);
            $("tblsupply").html(data);
        }
    })
}