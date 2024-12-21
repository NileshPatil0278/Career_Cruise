<?php

    $conn = mysqli_connect("localhost","root","","careercruise") or die (mysqli_error($conn));
    
if($conn){
    echo "Connection is successful";
    }else{
        echo"connection failed";
}
