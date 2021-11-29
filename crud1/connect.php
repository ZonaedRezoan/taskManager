<?php

$con = mysqli_connect("localhost:3307", "root", "", "crudOperation");

if(!$con){
    echo "Failed to connect";
}

// #for checking connection purpose
// if($con){
//     echo "connected";
// }else{
//     echo "Not connected";
// }

?>