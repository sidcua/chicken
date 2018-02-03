function url(){
	return "php/login.php";
}
function login(){
	var username = document.getElementById("txtusername");
	var password = document.getElementById("txtpassword");
	if(!username.value.trim() && !password.value.trim()){
		$("#errormsglogin").html("<strong>Please enter your acc details</strong>");
	}
	else if(!username.value.trim()){
		$("#errormsglogin").html("<strong>Please enter your username</strong>");
	}
	else if(!password.value.trim()){
		$("#errormsglogin").html("<strong>Please enter your password</strong>");
	}
	else{
		$.ajax({
			url: url(),
			method: "post",
			data: {username: username.value, password: password.value, action: "login"},
			beforeSend: function(){

			},
			success: function(data){
				data = $.parseJSON(data);
				if(data){
					window.location = "supply/";
				}
				else{
					$("#errormsglogin").html("<strong>Username and password not found</strong>");
				}
			}
		})
	}
}