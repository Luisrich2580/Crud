<?php
    include("conn.php");
    if(isset($_GET['id'])){
        $id = $_GET['id']; 


        $sql = "DELETE FROM `students` WHERE `id` = '$id'";
        $result = mysqli_query($conn, $sql);

        if(!$result){
            die("Failed to delete");
        }
        else{
            header("location:home.php?smg= You deleted the file");
        }

    }
?>