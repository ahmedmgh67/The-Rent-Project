<?php
    include('phpFile.php');
?>
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
       <link rel="stylesheet" type="text/css" href="css/responsive.css">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
       <link href="https://fonts.googleapis.com/css?family=Tajawal&display=swap" rel="stylesheet">
       <!---AOS LAIBIRARY-->
       <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	   <!--Internet Explorer-->
	    <script src="js/html5shiv.min.js"></script>
	   	<script src="js/respond.min.js"></script>
	   <!---->
       </head>
    <body >
        <div class="col-md-6 offset-md-3">
            <hr class="my-4">
                <div class="card"style="text-align: right ; border-radius: 30px; padding: 30px">
                    <div class="card-body">
                        <h3 class="text-center">الدفع عن طريق بطاقة الائتمان</h3>
                        <hr>
                        <div class="alert alert-info p-2 pb-3 text-center">
                            <a class="close font-weight-normal initialism" data-dismiss="alert" href="#"><samp>×</samp></a>
                            رمز التحقق هو الرمز المؤلف من 3 ارقام فى ظهر البطاقة
                        </div>
                        <form class="form" role="form" autocomplete="off" method="post" action="">
                            <div class="form-group" >
                                <label for="cc_name">اسم حامل البطاقة ثلاثى</label>
                                <input type="text" class="form-control" id="cc_name" name="name"required="required">
                            </div>
                            <div class="form-group">
                                <label>رقم الحساب</label>
                                <input type="text" name="credit_number"class="form-control" autocomplete="off" maxlength="20" pattern="\d{16}" title="Credit card number" required="">
                            </div>
                            <div class="form-group row">
                                <label class="col-md-12">تاريخ انتهاء البطاقة</label>
                                <div class="col-md-4">
                                    <select class="form-control" name="cc_exp_mo" size="0">
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" name="cc_exp_yr" size="0">
                                        <option>2019</option>
                                        <option>2020</option>
                                        <option>2021</option>
                                        <option>2022</option>
                                        <option>2023</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" autocomplete="off" maxlength="3" pattern="\d{3}" title="لرقم مكون من 3 ارقام فقط" required="required" placeholder="رمز التحقق">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cc_name">الأيجار بالجنيه المصرى</label>
                                <input type="text" class="form-control" id="cc_name" required>
                            </div>

                            <hr>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <button type="reset" class="btn btn-default btn-lg btn-block"><a href="index.php">الغاء</a></button>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success btn-lg btn-block" name="done">دفع</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>

		<script src="js/jQuery3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script src="js/e.js"></script>
	</body>


</html>
