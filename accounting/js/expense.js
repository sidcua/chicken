$(document).ready(function(){
    initmonth();
});
function url(){
	return "./php/expense.php";
}
function listexpense(month, year){
	$.ajax({
		url: url(),
		method: "post",
		data: {month: month, year: year, action: "listexpense"},
		success: function(data){
			data = $.parseJSON(data);
			$("#tblexpense").html(data);
		}
	});
}
function clearexpense(){
	$.ajax({
		url: url(),
		method: "post",
		data: {action: "clearexpense"},
		beforeSend: function(){
			$("#tblexpense").empty();
		},
		success: function(data){
			listexpense();
		}
	})
}
function initmonth(){
    $.ajax({
        url: url(),
        method: "post",
        data: {action: "initmonth"},
        success: function(data){
            data = $.parseJSON(data);
            $("#slctmonth").html(data);
        },
        complete: function(){
            inityear();
        }
    })
}
function inityear(){
    $.ajax({
        url: url(),
        method: "post",
        data: {action: "inityear"},
        success: function(data){
            data = $.parseJSON(data);
            $("#slctyear").html(data);
        },
        complete: function(){
            listexpense($("#slctmonth").val(), $("#slctyear").val());
        }
    })
}
function month(month){
    listexpense(month, $("#slctyear").val());
}
function year(year){
    listexpense($("#slctmonth").val(), year);
}