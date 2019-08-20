<?php
    session_start();
    include('connection.php');

    $testmoney=$testprice=$testphone="";
    if(isset($_POST['add'])){
        $name = htmlentities(mysqli_real_escape_string($con,$_POST['name']));
		$price = htmlentities(mysqli_real_escape_string($con,$_POST['price']));
		$money = htmlentities(mysqli_real_escape_string($con,$_POST['money']));
        $phone = htmlentities(mysqli_real_escape_string($con,$_POST['phone']));
        if (!preg_match("/^(012|011|010)[0-9]{8}$/",$phone))
            $testphone = " *not a valid phone number<br>";
        if (!preg_match("/^[0-9]*$/",$money))
            $testmoney=" *Only numbers are allowed<br>";
        if(!preg_match("/^[0-9]*$/",$price))
            $testprice=" *Only numbers are allowed<br>";
        if($price>$money)
            $testprice=" *this should be less than total money<br>";
        if($testmoney==""&&$testphone==""&&$testprice==""){
            $code=rand(10000000,99999999);
            $id=$_SESSION['id'];
            $x=$money/$price;
            if($money%$price!=0)
                $x++;
            $q="INSERT INTO tenant(name,mony,phone,code,user_id,monthsNotPaid,price) VALUES ('$name','$money','$phone','$code','$id','$x','$price')";
            $q=mysqli_query($con,$q);
            header('refresh:0;url=projects.php');
        }
    }

    $emailErr=$passErr=$rePass=$phoneErr="";
    if(isset($_POST['reg'])){
        $name = htmlentities(mysqli_real_escape_string($con,$_POST['name']));
		$pass = htmlentities(mysqli_real_escape_string($con,$_POST['pass']));
        $re_pass = htmlentities(mysqli_real_escape_string($con,$_POST['re_pass']));
		$email= htmlentities(mysqli_real_escape_string($con,$_POST['email']));
        $phone = htmlentities(mysqli_real_escape_string($con,$_POST['phone']));
        if($pass!=$re_pass)
            $rePass="Passwords should be same";
        if(strlen($pass) <8 )
            $passErr="Password should be at least 8 digits";
        if (!preg_match("/^(012|011|010)[0-9]{8}$/",$phone))
            $phoneErr = " *Only numbers are allowed";
        $q="SELECT * FROM users WHERE email='$email'";
        $q=mysqli_query($con,$q);
        $q=mysqli_num_rows($q);
        if($q==1)
            $emailErr="this account has been taken, please choose another one";
        if($emailErr==""&&$passErr==""&&$rePass==""&&$phoneErr==""){
            $hashedPass=md5($pass);
            $q="INSERT INTO users(name,email,password,phone) VALUES('$name','$email','$hashedPass','$phone')";
            $q=mysqli_query($con,$q);
            header('refresh:0;url=form.php');
        }
    }

    $err="";
    if(isset($_POST['login'])){
        $pass = htmlentities(mysqli_real_escape_string($con,$_POST['pass']));
		$email = htmlentities(mysqli_real_escape_string($con,$_POST['email']));
        $pass=md5($pass);
        $q="SELECT * FROM users WHERE email='$email' AND password='$pass'";
        $q=mysqli_query($con,$q);
        $query=mysqli_num_rows($q);
        if($query==1){
            while($row=mysqli_fetch_array($q)){
                $_SESSION['name']=$row['name'];
                $_SESSION['id']=$row['id'];
            }
            header('refresh:0;url=dash/production/projects.php');
        }
        else{
            $err="This account isn't found";
        }
    }

    if(isset($_POST['send'])){
        $name = htmlentities(mysqli_real_escape_string($con,$_POST['name']));
        $email= htmlentities(mysqli_real_escape_string($con,$_POST['email']));
        $message= htmlentities(mysqli_real_escape_string($con,$_POST['message']));
        $q="INSERT INTO messages(name,email,message) VALUES ('$name','$email','$message')";
        $q=mysqli_query($con,$q);
    }

    if(isset($_POST['pay'])){
        $name = htmlentities(mysqli_real_escape_string($con,$_POST['name']));
        $code= htmlentities(mysqli_real_escape_string($con,$_POST['code']));
        $phone= htmlentities(mysqli_real_escape_string($con,$_POST['phone']));
        $q="SELECT * FROM tenant WHERE name='$name' AND phone='$phone' AND code='$code'";
        $q=mysqli_query($con,$q);
        $query=mysqli_num_rows($q);
        if($query>=1){
            while($row=mysqli_fetch_array($q)){
                $_SESSION['tenantId']=$row['id'];
                $_SESSION['tenantUser']=$row['user_id'];
            }

            $_SESSION['tenantName']=$name;
            $_SESSION['code']=$code;
            $_SESSION['phone']=$phone;
            header('refresh:0;url=pay.php');
        }
    }

    if(isset($_POST['edit'])){
        $name=$price=$money=$phone="";
        if(isset($_POST['name']))
            $name = htmlentities(mysqli_real_escape_string($con,$_POST['name']));
        if(isset($_POST['money']))
            $money = htmlentities(mysqli_real_escape_string($con,$_POST['money']));
        if(isset($_POST['price']))
            $price = htmlentities(mysqli_real_escape_string($con,$_POST['price']));
        if(isset($_POST['phone']))
            $phone = htmlentities(mysqli_real_escape_string($con,$_POST['phone']));
        $id=$_GET['id'];
        $q="UPDATE tenant SET ";
        $r="";
        if($name!="")
            $r="name='$name'";
        if($phone!=""){
            if($r=="")
                $r="phone='$phone'";
            else
                $r.=",phone='$phone'";
        }
        if($price!=""){
            if($r=="")
                $r="price='$price'";
            else
                $r.=",price='$price'";
        }
        if($money!=""){
            if($r=="")
                $r="mony='$money'";
            else
                $r.=",mony='$money'";
        }
        $q.=$r;
        $q.="WHERE id='$id'";
        $q=mysqli_query($con,$q);
        header('refresh:0;url=dash/production/projects.php');
    }
    if(isset($_POST['done'])){
        $name=$_SESSION['tenantName'];
        $code=$_SESSION['code'];
        $phone=$_SESSION['phone'];
        $id=$_SESSION['tenantId'];
        $user_xid=$_SESSION['tenantUser'];
        $q="SELECT * FROM tenant WHERE name='$name' AND phone='$phone' AND code='$code'";
        $q=mysqli_query($con,$q);
        $query=mysqli_num_rows($q);
        if($query>=1){
            while($row=mysqli_fetch_array($q)){
                $months=--$row['monthsNotPaid'];
                $money=($row['mony']-$row['price']);
            }
        }
        $dd='<span><i class="fa fa-check"></i></span>';
        $q="UPDATE tenant SET day_date='$dd',mony='$money',monthsNotPaid='$months'WHERE id='$id'";
        $q=mysqli_query($con,$q);

        $d=date("m");
        if($d==1)
            $r="شهر يناير";
        if($d==2)
            $r="شهر فبراير";
        if($d==3)
            $r="شهر مارس";
        if($d==4)
            $r="شهر ابريل";
        if($d==5)
            $r="شهر مايو";
        if($d==6)
            $r="شهر يونيه";
        if($d==7)
            $r="شهر يوليو";
        if($d==8)
            $r="شهر اغسطس";
        if($d==9)
            $r="شهر سبتمبر";
        if($d==10)
            $r="شهر اكتوبر";
        if($d==11)
            $r="شهر نوفمبر";
        if($d==12)
            $r="شهر ديسمبر";
        $date = date("g:i");
        $x=" تم دفع ايجار ".$r." من قبل ".$name;
        $qw="INSERT INTO paid(user_xid,description,paidTime) VALUES ('$user_xid','$x','$date')";
        $qw=mysqli_query($con,$qw);
        header('refresh:0;url=index.php');
    }
?>
