<?php
    $id=$_SESSION['id'];
    $q="SELECT * FROM tenant WHERE user_id='$id'";
    $q=mysqli_query($con,$q);
    $i=1;
    while($row=mysqli_fetch_array($q)){
        echo "<tr>";
        echo "<td>$i</td>";$i++;
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['price']."</td>";
        if($row['day_date']=='<span><i class="fa fa-times"></i></span>')
            echo "<td class='text-center' style='color:red'>".$row['day_date']."</td>";
        else
            echo "<td class='text-center' style='color:green'>".$row['day_date']."</td>";
        echo "<td>".$row['monthsNotPaid']."</td>";
        echo "<td>".$row['mony']."</td>";
        $qqid=$row['id'];
        echo"<td>
          <a href='../../edit.php?id=$qqid' class='btn btn-info btn-xs'><i class='fa fa-pencil'></i> تعديل </a>
          <a href='../../delete_tenant.php?id=$qqid' class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i> حذف </a>
        </td>";
        echo "</tr>";
    }
?>
