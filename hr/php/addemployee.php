<?php
    session_start();
    include '../../php/connect.php';

    header('Content-type: application/json'); 

    
    // if(isset($_POST['addEmp'])){
        // if(empty($_POST['username']) || empty($_POST['password'])){
        //     echo '<script>alert("Must fill out Username and Password field!")</script>';
        // }
        // else{
        $fname = $_POST['fname'];
        $username = $_POST['username'];
        $position=$_POST['position'];
        $password=$_POST['password'];
        $office=$_POST['office'];
        
            if(trim($fname == '') || trim($username == '') || trim($position == '') || trim($password == '') || trim($office == '')){
                // echo '<script>alert("Please Fill-up all fields!")</script>';
                $send['titles'] = "Empty Fields!";
                $send['message'] = "Please fill-out all fields!";
                $send['check'] = true;
                echo json_encode($send);
            }
                else if(!preg_match(("/[^[:alnum:]]/"), $username)){

                $query = mysqli_query($con,"SELECT * FROM account WHERE username='$_POST[username]'");
                $rows = mysqli_num_rows($query);

                if($rows == 0){
                     if(strlen($password) >= 6){
                    if($_POST['password']==$_POST['cpassword']){
                    
                        
                        mysqli_query($con, "INSERT INTO account(name,position,username,password,office) VALUES('$fname','$position','$username','$password','$office')"); 
                        $send['match'] = true;
                        $send['exist'] = true;
                        $send['leng'] = true;
                        $send['titles'] = "Employee/Account Added";
                        $send['message'] = "Thank you for adding an Employee in " . $_POST['office'] . " Office!";
                        $send['check'] = true;
                        echo json_encode($send);
                        // header('Refresh:4; url=./hr');
                        
                        // echo '<script>alert("register successful!")</script>';
                    
                }else{
                    $send['titles'] = "Password not matched!";
                    $send['message'] = "Please make sure your passwords are matched!";
                    $send['match'] = false;
                    echo json_encode($send);
                    // echo '<script>alert("password not matched!")</script>';
                    }
                
            }else{
                $error['titles'] = "Password length is too short!";
                $error['message'] = "Please enter more than 6 characters.";
                $error['leng'] = false;
                echo json_encode($error);
               
                // echo '<script>alert("username is already existing!")</script>';
            }
        }else{
            $send['titles'] = "Existing Username!";
            $send['message'] = "Sorry, Username is already existing";
            $send['exist'] = false;
            echo json_encode($send);
        }
        }else{
            $send['titles'] = "Non-Alpha Numeric!";
            $send['message'] = "Username only contains Alpha Nuemeric!";
            $send['check'] = true;
            echo json_encode($send);
            // echo '<script>alert("Username only contains alpha numeric!")</script>';
                }
            // }
        
    // }
?>