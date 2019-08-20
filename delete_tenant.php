<?php
    include('phpFile.php');
    $id=$_GET['id'];
    $q="DELETE FROM tenant WHERE id='$id'";
    $q=mysqli_query($con,$q);
    header('refresh:0;url=dash/production/projects.php');
?>
