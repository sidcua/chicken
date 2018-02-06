(function(){
    'use strict';
    var app = angular.module("appHR",[]);

    app.controller("ctrlHR", function($scope,$compile){
        $scope.delete = function(){
            $("#table").children('.sname').remove();
        };
        $scope.logout = function(){
            localStorage.clear();
            window.location = "../";
        }
        $scope.refresh = function(){
            if(localStorage.getItem('status') == 'true'){
                $('#pname').text(localStorage.getItem('name'));
                $.ajax({
                    url: './loadaccounts.php',
                    dataType: 'JSON',
                    type: 'GET',
                    success: function(data){
                        for(var x = 0; x < data.length; x++){
                        $("#accounts").before($compile(
                        "<tr class='sname'>" +
                            "<td>"+ data[x].nam +"</td>" +  
                            "<td>"+ data[x].position +"</td>" +
                            "<td>"+ data[x].username +"</td>" +
                            "<td>"+ data[x].level +"</td>" +
                            "<td>"+ data[x].office +"</td>" +
                            "<td>"+ data[x].stats +"</td>" +
                            "<td><button class='btn btn-primary' id='btn1'> <i class='fa fa-bomb' aria-hidden='true'></i>  </button></td>" +
                        "</tr>"    
                        )($scope));
                    }
                },
                    error: function(a, b, c){
                        console.log("error: " + a + b + c);
                    }
                })
            }else{
                window.location = "./404.html";
            }
        }
    });
})();

