//======================================================
//                         ANGULAR
//======================================================

(function(){
    'use strict';
    var app = angular.module("appHR",[]);

    app.controller("ctrlHR", function($scope,$compile){

        //Modal MessageBox

        function messageBox(titles,message){
            $scope.modalTitle = titles;
            $scope.modalText = message;
            $("#myModal").modal('show');
            $scope.$apply();
        }

        function clear() {
            document.getElementById('#addEmpForm').reset();
        }


        $scope.delete = function(){
            $("#table").children('.sname').remove();

        };
        $scope.logout = function(){
            localStorage.clear();
            window.location = "../";
        }
        
        

        $scope.addEmp = function(){
            var contents = $('#addEmpForm').serialize();
            console.log(contents);
            $.ajax({
                url: './php/addemployee.php',
                dataType: 'JSON',
                type: 'POST',
                data: contents,
                cache: false,
                success: function(data){
                  if(data.match && data.exist && data.check == true){
                    messageBox(data.titles,data.message,true);  
                             
                  }else{
                    messageBox(data.titles,data.message,true);                    
                  }
            },
                error: function(a,b,c){
                    console.log('Error: ' + a + " " + b + " " + c);
                }
            });
        }
        
        $scope.refresh = function(){
            if(localStorage.getItem('status') == 'true'){
                $('#pname').text(localStorage.getItem('name'));
                $.ajax({
                    url: './php/loadaccounts.php',
                    dataType: 'JSON',
                    type: 'GET',
                    success: function(data){
                        for(var x = 0; x < data.length; x++){
                        $("#accounts").before($compile(
                        "<tr class='sname'>" +
                            "<td>"+ data[x].nam +"</td>" +  
                            "<td>"+ data[x].position +"</td>" +
                            "<td>"+ data[x].username +"</td>" +
                            "<td>"+ data[x].office +"</td>" +
                            "<td><a><span data-toggle='modal' data-target='#modalEdit' class='badge badge-warning edititem'><i class='fa fa-pencil fa-2x' aria-hidden='true'></i></span></a> <a><span data-toggle='modal' data-target='#modalRem' class='badge badge-danger'><i class='fa fa-trash-o fa-2x' aria-hidden='true'></i></span></a></td>" +
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

