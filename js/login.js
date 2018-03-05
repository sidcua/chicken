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
				localStorage.setItem('name',data.name);
				localStorage.setItem('status','true')
				if(data.access == true){
					if(data.office == "Supply"){
						window.location = "supply/";
					}
					else if(data.office == "HR"){
						localStorage.setItem('HR', 'true');
						window.location = "hr/";
					}
					else if(data.office == "Accounting"){
						localStorage.setItem('Accounting', 'true');
						
						window.location = "accounting/";
					}
					else if(data.office == "MIS"){
						localStorage.setItem('MIS', 'true');
						window.location = "mis/";
					}
				}
				else{
					$("#errormsglogin").html("<strong>Username and password not found</strong>");
				}
			}
		})
	}
}