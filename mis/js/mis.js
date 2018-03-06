
//======================================================
//                         ANGULAR
//======================================================

(function(){
    'use strict';
    var fname = "";
    var username = "";
    var app = angular.module("appMIS",[]);
    var id = "";
    var empLens = -1;
    var datalen = 0;
    var empHistLen = 0;
    var empLog = -1;
    app.controller("ctrlMIS", function($scope,$compile,$timeout){

        $scope.modFname = "";        
        $scope.modPosition = "";
        $scope.modOffice = "";
        $scope.person = [];        
        $scope.person2 = [];
        $scope.person3 = [];        
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
            // document.getElementById('declineEmpForm').reset();
            $("label[for='empname']").addClass("active");
        }

        function removeClear2() {
            document.getElementById('declineEmpForm').reset();
            $("[for='empname']").addClass("active");
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
       
        $scope.accDecline = function(){
            var contents = $('#declineEmpForm').serialize();
            console.log(contents);
            console.log(username);
            $.ajax({
                url: './php/declineAcc.php',
                dataType: 'json',
                type: 'post',
                data: contents + "&username=" + username,
                cache: false,
                success: function(data){
                    messageBox(data.titles,data.message,true);
                    $('#modalDecline').modal('hide');
                    $('#modalDec').modal('hide');                    
                    removeClear2();
                    $scope.refresh();
                    $scope.$apply();
                },
                error: function(a,b,c){
                    console.log('Error: ' + a + " " + b + " " + c);
                }
            });
        }

        $scope.accApprove = function(){
            console.log(username);
            $.ajax({
                url: './php/approveAcc.php',
                dataType: 'json',
                type: 'post',
                data: "&username=" + username,
                cache: false,
                success: function(data){
                    messageBox(data.titles,data.message,true);
                    $('#modalApprove').modal('hide');
                    $scope.refresh();
                },
                error: function(a,b,c){
                    console.log('Error: ' + a + " " + b + " " + c);
                }
            });
        }

        $scope.declineAcc = function($event){
            username = angular.element($event.currentTarget).parent().parent().parent().find("span").text();
            console.log(username);
            Autofill(username);
           
                }

        $scope.approveAcc = function($event){
            username = angular.element($event.currentTarget).parent().parent().parent().find("span").text();
            console.log(username);
            // Autofill(username);
           
    }
        function Autofill(username){
            removeClear();
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

            function totalEmployee(){
                $.ajax({
                    url:'./php/totalEmp.php',
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

        // $scope.addEmp = function(){
        //     var contents = $('#addEmpForm').serialize();
        //     console.log(contents);
        //     $.ajax({
        //         url: './php/addemployee.php',
        //         dataType: 'JSON',
        //         type: 'POST',
        //         data: contents,
        //         cache: false,
        //         success: function(data){
        //           if(data.match && data.exist && data.check && data.leng == true){
        //             messageBox(data.titles,data.message,true);  
        //             addClear();
        //             $('#modalReg').modal('hide');
        //             $scope.clearTable();
        //             $scope.refresh();
        //             $scope.$apply();
        //           }else{
        //             messageBox(data.titles,data.message,true);                    
        //           }
        //     },
        //         error: function(a,b,c){
        //             console.log('Error: ' + a + " " + b + " " + c);
        //         }
        //     });
        // }
        // $scope.deleteEmpHist = function(id){
        //     var formData = new FormData();
        //     formData.append('id',id);
        //     $.ajax({
        //         url: './php/clearEmpHistory.php',
        //         dataType: 'JSON',
        //         type: 'POST',
        //         data: formData,
        //         contentType: false,
        //         processData: false,
        //         success: function(data){
        //             $scope.refresh();
        //             $('#modalConfirmClear').modal('hide');
        //             $scope.$apply();
        //             messageBox(data.titles,data.message,true); 
        //     },
        //         error: function(a, b, c){
        //             console.log("error: " + a + b + c);
        //         }
        //     });
        // }

        

        function loadEmphist(){
            $.ajax({
                url: './php/loadEmphist.php',
                dataType: 'JSON',
                type: 'GET',
                success: function(data){
                    if( data[data.length-1].lenss != empHistLen || data[0].lenss == 10){
                        empHistLen = data[data.length-1].lenss;
                        $('#tableemphist').children('.emname').remove();
                        $scope.accounts3= [];
                        for(var x = 0; x < data.length; x++){
                            var info = {
                        empname: data[x].empname,                            
                        empreason: data[x].empreason,
                        empdate: data[x].empdate,
                        empstatus: data[x].empstats,                            
                    }
                    $scope.accounts3.push(info);
                }
                $scope.$apply();
              }
              if(data[0].lenss == 10){
                $('#emphist').after($compile(
                    "<tr class='emname'>"+
                    "<td colspan = 4 style='text-align:center; font-size:3em; color:#ddd; letter-spacing:0.7em;'> NO HISTORY RECORDS </td> "+
                "</tr> "
                )($scope));
             }
            },
                error: function(a, b, c){
                    console.log("error: " + a + b + c);
                }
            });
    }


         function loadEmp(){
                $.ajax({
                    url: './php/loadEmp.php',
                    dataType: 'JSON',
                    type: 'GET',
                    success: function(data){
                        if(data[0].emlen == 0 && empLog != data[0].emlen){
                            $('#tableacc').children('.hname').remove();
                            empLog = data[0].emlen;
                            $('#haccounts').after($compile(
                                "<tr class='hname'>"+
                                "<td colspan = 6 style='text-align:center; font-size:3em; color:#ddd; letter-spacing:0.7em;'> NO EMPLOYEE RECORDS </td> "+ "</tr> "
                            )($scope));
                        }else if(data[0].emlen != 0){
                    $('#tableacc').children('.hname').remove();
                    console.log(data[0].nam);
                    empLog = data[0].emlen; 
                            $scope.accounts2 = [];
                            for(var x = 0; x < data.length; x++){
                                var info = {
                            name2: data[x].nam2,                            
                            position2: data[x].position2,
                            username2: data[x].username2,
                            office2: data[x].office2,                            
                        }
                        $scope.accounts2.push(info);
                    }
                    $scope.$digest();
                  }
                },
                    error: function(a, b, c){
                        console.log("error: " + a + b + c);
                    }
                });
        }

        $scope.refresh = function(){
            if(localStorage.getItem('status') == 'true'){
                $('#pname').text(localStorage.getItem('name'));                
                $.ajax({
                    url: './php/loadAccount.php',
                    dataType: 'JSON',
                    type: 'GET',
                    success: function(data){
                        loadEmp();      
                        loadEmphist();
                        totalEmployee();
                        console.log(data);
                        console.log("outer:" + empLens + " " + data.length);                  
                        if(empLens != data.length && data[0].lens == 0){
                            empLens = data.length;
                            $('#tabletrans').children('.tname').remove();
                            console.log("inner:" + empLens + " " + data.length + " :AJHSDJKHWQDQWHDKJHWQWQW");
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
                if(data[0].lens == 10 && data[0].lens != datalen ){
                    console.log("KOSA BA TA PASA?");
                    datalen = data[0].lens;
                    empLens = -1;
                    $('#tabletrans').html("");
                    $('#tabletrans').after($compile(
                        "<tr class='tname'>"+
                        "<td colspan = 6 style='text-align:center; font-size:3em; color:#ddd; letter-spacing:0.7em;'> NO TRANSACTIONS </td> "+
                        "</tr> "
                    )($scope));
                }
                $timeout(()=>{
                    $scope.refresh();
                },1000);
            },
            error: function(a, b, c){
                console.log("error: " + a + b + c);
            }
            });
            }else{
                window.location = "./404.html";
            }
        }

        // data-id='"+ data[x].idacc +"'
        // $scope.refresh = function(){
        //     $('#tables').children('.sname').remove();
        //     totalEmployees();
        //     if(localStorage.getItem('status') == 'true'){
        //         $('#pname').text(localStorage.getItem('name'));
        //         $.ajax({
        //             url: './php/loadaccounts.php',
        //             dataType: 'JSON',
        //             type: 'GET',
        //             success: function(data){
        //                 $scope.accounts = [];
        //             for(var x = 0; x < data.length; x++){
        //                 var info = {
        //                     name: data[x].nam,
        //                     position: data[x].position,
        //                     username: data[x].username,
        //                     office: data[x].office
        //                 }
        //                 if(data[x].idhist){
        //                     $('#empHistory').after($compile(
        //                         "<tr class='sname'>"+
        //                         "<td> " + data[x].nam2 + "</td> "+
        //                         "<td> " + data[x].reason + " </td>"+
        //                         "<td> " + data[x].date + " </td>"+
        //                         "<td><a><span ng-click='deleteEmpHist("+ data[x].idhist +");' data-toggle='modal' data-target='' class='badge badge-danger'><i class='fa fa-trash-o fa-2x' aria-hidden='true'></i></span></a></td>"+
        //                     "</tr> "
        //                     )($scope));
        //                 }
        //                  $scope.accounts.push(info);
        //             }
        //             $scope.$digest();
        //         },
        //             error: function(a, b, c){
        //                 console.log("error: " + a + b + c);
        //             }
        //         })
        //     }else{
        //         window.location = "./404.html";
        //     }
        // }
    });
})();

