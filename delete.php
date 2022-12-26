<?php 

include "conn.php"; 

if (isset($_GET['del'])) {

    $id = $_GET['del'];

    $sql = "DELETE FROM `users` WHERE `id`='$id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";
        header("location : data.php");

    }
    else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 
else{
    header("location: data.php");
}

?>