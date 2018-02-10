//======================================================
//                         ANGULAR
//======================================================

(function(){
    'use strict';
    var app = angular.module("appHR",[]);

    app.controller("ctrlHR", function($scope,$compile){

        var username = "";
        //Modal MessageBox

        // $(document).ready(function(){
        //     holdaccid();
        // })

        function messageBox(titles,message){
            $scope.modalTitle = titles;
            $scope.modalText = message;
            $("#myModal").modal('show');
            $scope.$apply();
        }

        function addClear() {
            document.getElementById('addEmpForm').reset();
            $("[for='fname']").removeClass("active");
            $("[for='position']").removeClass("active");
            $("[for='username']").removeClass("active");
            $("[for='password']").removeClass("active");
            $("[for='cpassword']").removeClass("active");
            $("[for='office']").removeClass("active");
        }

        
        function removeClear() {
            document.getElementById('removeEmpForm').reset();
            $("[for='empname']").removeClass("active");
            $("[for='reason']").removeClass("active");
        }

        function editClear() {
            document.getElementById('editEmpForm').reset();
            $("[for='efname']").removeClass("active");
            $("[for='eposition']").removeClass("active");
            $("[for='eoffice']").removeClass("active");
        }

        // function holdaccid(){
        //     $('body').on('click', '#table>tr', function(){
        //         $("#taccount").val($(this).attr('data-id'));
        //     });
        // }

        $scope.clearTable = function(){
            $("#table").children('.sname').remove();

        };
        $scope.logout = function(){
            localStorage.clear();
            window.location = "../";
        }
       
        $scope.accRem = function(){
            var contents = $('#removeEmpForm').serialize();
            // var username = angular.element($event.currentTarget).parent().parent().parent().find("span").text();
            console.log(contents);
            console.log(username);
            $.ajax({
                url: './php/removeEmp.php',
                dataType: 'json',
                type: 'post',
                data: contents + "&username=" + username,
                cache: false,
                success: function(data){
                    messageBox(data.titles,data.message,true);
                    $('#modalRem').modal('hide');
                    $('#modalConfirmRem').modal('hide');
                    removeClear();
                },
                error: function(a,b,c){
                    console.log('Error: ' + a + " " + b + " " + c);
                }
            });
        }

        $scope.accEdit = function(){
            var contents = $('#editEmpForm').serialize();
            console.log(contents);
            console.log(username);
            $.ajax({
                url: './php/editEmp.php',
                dataType: 'json',
                type: 'post',
                data: contents + "&username=" + username,
                cache: false,
                success: function(data){
                    messageBox(data.titles,data.message,true);
                    editClear();
                    $('#modalEdit').modal('hide');
                    $scope.clearTable();
                    $scope.refresh();
                    // $scope.$apply();
                },
                error: function(a,b,c){
                    console.log('Error: ' + a + " " + b + " " + c);
                }
            });
        }

        $scope.removeAcc = function($event){
            username = angular.element($event.currentTarget).parent().parent().parent().find("span").text();
            console.log(username);
                }

        $scope.editAcc = function($event){
            username = angular.element($event.currentTarget).parent().parent().parent().find("span").text();
            console.log(username);
                }

        // $scope.remove = function(){
        //     console.log(username);
        //     $.ajax({
        //         url: './php/removeEmp.php',
        //         dataType: 'json',
        //         type: 'post',
        //         data: "username=" + username,
        //         cache: false,
        //         success: function(data){

        //             console.log("Success");
        //         },
        //         error: function(a,b,c){
        //             console.log('Error: ' + a + " " + b + " " + c);
        //         }
        //         });
        //     }

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
                  if(data.match && data.exist && data.check && data.leng == true){
                    messageBox(data.titles,data.message,true);  
                    addClear();
                    $('#modalReg').modal('hide');
                    $scope.clearTable();
                    $scope.refresh();
                    $scope.$apply();
                  }else{
                    messageBox(data.titles,data.message,true);                    
                  }
            },
                error: function(a,b,c){
                    console.log('Error: ' + a + " " + b + " " + c);
                }
            });
        }
        // data-id='"+ data[x].idacc +"'
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
                            "<td><span>"+ data[x].username +"</span></td>" +
                            "<td>"+ data[x].office +"</td>" +
                            "<td><a><span ng-click='editAcc($event);' data-toggle='modal' data-target='#modalEdit' class='badge badge-warning edititem'><i class='fa fa-pencil fa-2x' aria-hidden='true'></i></span></a> <a><span ng-click='removeAcc($event);' data-toggle='modal' data-target='#modalRem' class='badge badge-danger'><i class='fa fa-trash-o fa-2x' aria-hidden='true'></i></span></a></td>" +
                        "</tr>"    
                        )($scope));
                    }
                    $scope.$apply();
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

