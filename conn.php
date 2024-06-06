<?php
   

try{
     $conn = new mysqli('localhost', 'root', '', 'cruddb');
}catch(Exception $e){
    echo "Error Occured ";
}

    // if(!$conn){
    //     echo "No Connection";
    // }
    // else{
    //     echo "Connected";
    // }
?>
