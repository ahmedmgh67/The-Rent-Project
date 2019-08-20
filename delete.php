<?php
    include('phpFile.php');
    $id=$_SESSION['id'];
    $q="DELETE FROM users WHERE id='$id'";
    $q=mysqli_query($con,$q);
    session_destroy();
    header('refresh:0;url=reg.php');
?>
