
//======================================================
//                         ANGULAR
//======================================================

(function(){
    'use strict';
    var fname = "";
    var username = "";
    var app = angular.module("appHR",[]);
    var id = "";
    var empLen = 0;
    var empHistLen = 0;
    app.controller("ctrlHR", function($scope,$compile,$timeout){

        $scope.modFname = "";        
        $scope.modPosition = "";
        $scope.modOffice = "";
        $scope.person = [];
        $scope.employee = [];
        
        $scope.offices = [
            { label: "All" , value: ""},
            { label: "Accounting" , value: "Accounting"},
            { label: "Supply" , value: "Supply"},
            { label: "HR" , value: "HR"},
        ];
        $('#searchOff option:first').text("All");
        
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

        function editClear2() {
            // document.getElementById('editEmpForm').reset();
            $("label[for='efname']").addClass("active");
            $("label[for='eposition']").addClass("active");
            $("label[for='eoffice']").addClass("active");
            $("label[for='empname']").addClass("active");
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
                    $scope.clearTable();
                    $scope.refresh();
                    // $scope.$apply();
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
            Autofill(username);
           
                }

        $scope.editAcc = function($event){
            username = angular.element($event.currentTarget).parent().parent().parent().find("span").text();
            console.log(username);
            Autofill(username);
           
    }
        function Autofill(username){
            editClear2();
            $.ajax({
                url:'./php/autofill.php',
                dataType: 'JSON',
                type: 'POST',
                data: "username=" + username, 
                cache: false,
                success:function(data){
                    fname = data.efname;
                    $scope.modFname = data.efname;
                    $scope.modPosition = data.eposition;
                    $scope.modOffice = data.eoffice;
                    $scope.modDFname = fname;
                    $scope.$apply();
                },
                error: function(a,b,c){
                    console.log('Error: ' + a + " " + b + " " + c);
            }
        });

        }

            function totalEmployees(){
                $.ajax({
                    url:'./php/totalemp.php',
                    dataType: 'JSON',
                    type: 'GET',
                    success:function(data){
                        // data = $.parseJSON(data);
                        $scope.Hr = data.hr;
                        $scope.Supply = data.supply;
                        $scope.Accounting = data.accounting;
                    },
                    error: function(a,b,c){
                        console.log('Error: ' + a + " " + b + " " + c);
                }
            });
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
        $scope.deleteEmpHist = function(id){
            var formData = new FormData();
            var del = false;
            formData.append('id',id);
            $.ajax({
                url: './php/clearEmpHistory.php',
                dataType: 'JSON',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(data){
                    del = true;
                    messageBox(data.titles,data.message,true); 
            },
                error: function(a, b, c){
                    console.log("error: " + a + b + c);
                }
            });
            if(del == true){
                $scope.refresh();
            }
        }
        // data-id='"+ data[x].idacc +"'
        $scope.refresh = function(){
            
            totalEmployees();
            if(localStorage.getItem('status') == 'true'){
                $('#pname').text(localStorage.getItem('name'));
                $.ajax({
                    url: './php/loadaccounts.php',
                    dataType: 'JSON',
                    type: 'GET',
                    success: function(data){
                        console.log(empLen + " " + data.length);
                        if(empLen != data.length){
                            empLen = data.length;
                            $('#table').children('.sname').remove();
                            
                        $scope.accounts = [];
                    for(var x = 0; x < data.length; x++){
                        var info = {
                            name: data[x].nam,
                            position: data[x].position,
                            username: data[x].username,
                            office: data[x].office,
                            status: data[x].stats,  
                        }
                        $scope.accounts.push(info);
                    }
                    $scope.$digest();
                }

                if( data[data.length-1].len != empHistLen || data[0].lens == 10){
                    empHistLen = data[data.length-1].len;
                    $('#tables').children('.ename').remove();
                    for(var x = 0; x < data.length; x++){
                        if(data[x].idhist){
                            $('#empHistory').after($compile(
                                "<tr class='ename'>"+
                                "<td> " + data[x].nam2 + "</td> "+
                                "<td> " + data[x].reason + " </td>"+
                                "<td> " + data[x].date + " </td>"+
                                "<td><a><span ng-click='deleteEmpHist("+ data[x].idhist +");' data-toggle='modal' data-target='' class='badge badge-danger'><i class='fa fa-trash-o fa-2x' aria-hidden='true'></i></span></a></td>"+
                            "</tr> "
                            )($scope));
                        }
                    }
                    $scope.$digest();
                }
                    $timeout(()=>{
                        $scope.refresh();
                    },1000);
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

