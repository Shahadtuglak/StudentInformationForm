<?php

        //Connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "studentinfo";
 
        $conn = mysqli_connect($servername,$username,$password,$database);
 
        if(!$conn){
            die("Connection is not Successfull due to this Error " .mysqli_connect_error($conn));
        }
      














?>