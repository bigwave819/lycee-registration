<?php
 
 include('connection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM crud WHERE id='$id'";
    $result=mysqli_query($conn, $sql);
    if ($result) {
        header('location:retrive.php');
    }
}

?>