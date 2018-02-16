<?php
        include '../../php/connect.php';
        header('Content-type: application/json');

        $username = trim($_POST['username']);

        $sql = "SELECT * FROM account WHERE username = '$username';";
        $result = mysqli_query($con,$sql);

        if($result -> num_rows > 0){
                while($rows = $result->fetch_assoc()){
                        $send['efname'] = $rows['name'];
                        $send['eposition'] = $rows['position'];
                        $send['eoffice'] = $rows['office'];
                }
        }
        echo json_encode($send);
?>