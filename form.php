<?php include('phpFile.php');?>
<!DOCTYPE HTML>
<html>
   <head>
	   <!--TO Support Many Language Include Arabic Language-->
        <meta charset="utf-8"/>

	   <!--For Internet Explorer-->
	    <meta http-equiv="X-UA-	Compatible"content="IE=edge">

	   <!--First mobilw meta-->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="description"content="mt company">
        <title>THE RENT</title>
        <!--call bootstrap-->
	    <link rel="stylesheet"href="css/bootstrap.css"/>
        <!--Page Style-->
        <link rel="stylesheet"href="css/form.css"/>
       <link rel="stylesheet" type="text/css" href="css/responsive.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	   <!--Internet Explorer-->
	    <script src="js/html5shiv.min.js"></script>
	   	<script src="js/respond.min.js"></script>
	   <!---->
	</head>
	<body>
        <div class="FlexPage">
            <div class="rightDiv">
                <div class="container">
                    <div>
                        <h3 class="rightcontent">THE RENT</h3>
                        <p class="rightcontent">زارنت هي منصة تتيح لك إدارة الوحدات السكنية الخاصة بك وجمع الإيجار بسهولة. إذا كنت تريد ذلك ، فيجب عليك تسجيل الدخول إلى موقع الويب الخاص بنا وسنقوم بادارته لك </p>
                        <p class="rightcontent">قم بتسجيل الدخول لشركتنا للحصول على خدماتنا </p>
                    </div>
                </div>
             </div>
             <div class="leftDiv" dir="rtl">
                <form class="loginForm" action="" method="post">
                    <div>
                        <a href="form.php"class="loginP">تــســجيل الدخـــول</a>
                        <a href="reg.php">تــســجيل</a>
                    </div>
                    <span style="color:red"><?php echo$err;?></span>
                    <input class="input" name="email"type="email"placeholder="الايميل" required>
                    <input class="input" name="pass"type="password"placeholder="كلمة المرور" required>
                    <div>
                        <input type="submit" name="login"value="تـســجـــــيل">
                        <a href="forget.php">استرجاع كلمة المرور ؟ </a>
                    </div>
                </form>
            </div>
            </div>
		<script src="js/jQuery 3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/home.js"></script>
	</body>


</html>
