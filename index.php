<?php include('phpFile.php'); ?>
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
        <link rel="stylesheet"href="css/main.css"/>
       <link rel="stylesheet"href="css/about.css"/>
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
	<body dir="rtl">

    <header class="header">
		<div class="header_content">

			<!-- Logo -->
			<div class="logo_container d-flex flex-column align-items-center justify-content-center">
				<div class="logo">
					<a href="#" class="text-center">
						<div class="logo_subtitle">Company</div>
						<div class="logo_title">THE RENT</div>
						<div class="logo_stars">
							<ul class="d-flex flex-row align-items-start justfy-content-start">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>
						</div>
					</a>
				</div>

			</div>

			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_inner d-flex flex-row align-items-center justify-content-start">
							<a href="form.php" class="button_container header_button ml-auto">
                                <div class="button text-center">
                                    <span>تــسجــيل الــدخـول</span>
                                </div>
                            </a>
							<nav class="main_nav">
								<ul class="d-flex flex-row align-items-center justify-content-start">
                                    <li><a href="#pay"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>سدد ايجارك</span></div></a></li>
									<li><a href="#contact"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>تواصل معنا</span></div></a></li>
									<li>
                                       <div class="dropdown">
                                          <a style="color: #FFF ; padding-top: 50px">خدماتنا</a>
                                          <div class="dropdown-content">
                                          <a href="#servicesRenter">للمستأجر</a>
                                          <a href="#services">للمالك</a>

                                          </div>
                                        </div>
                                    </li>
									<li><a href="#about"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>من نحن</span></div></a></li>
									<li class="active"><a href="index.php"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>الرئيسية</span></div></a></li>

								</ul>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->



	<!-- sliders -->
            <div style="position: relative ; width: 100% ; height:650px;margin-bottom: 70px">
            <div class="overlayBackground" style="position: absolute ; width:100% ; height: 650px; z-index:2; background-color: #000;opacity: .8">

            </div>
                <!--Slider-->
            <div class="slider">

            </div>
            <div class="sliderContent ">
				<div class="text-center">
                    <div class="home_subtitle">THE RENT</div>
                    <div class="home_title">DPLYR & The Rent</div>
                    <a href="form.php" class="button_container home_button"><div class="button text-center"><span>تــسجــيل الــدخـول</span></div></a>
				</div>
            </div>
        </div>

        <!--Payment Section-->

        <div class="container" id="pay">
            <div dir="rtl" class="mainPayment">
                <form method="post" action="">
                    <div><input class="PayInput" name="name" type="text"placeholder="الاسم"></div>
                    <div><input class="PayInput" name="code" type="text"placeholder="كود المالك"></div>
                    <div><input class="PayInput" name="phone" type="text"placeholder="رقم التليفون"></div>
                    <div><input type="submit" name="pay" value="ادفــع"></div>
                </form>
            </div>
        </div>

                <!--About Us Section-->
        <section dir="ltr" class="aboutSection" id="about">
            <div class="AboutSection"></div>
             <div class="container">
                 <div  class="main">
                     <div class="content">
                        <h1 class="h1About" style="text-align: right ; margin-right: 10px ; ">من نحن ؟؟</h1>
                        <p style="margin-bottom: 30px ; font-size: 16px"><span>زارنت</span> هي منصة تتيح لك إدارة الوحدات السكنية الخاصة بك وجمع الإيجار بسهولة. إذا كنت تريد ذلك ، فيجب عليك تسجيل الدخول إلى موقع الويب الخاص بنا وسنقوم بادارته لك
                         </p>
                        <a href="form.php" class="activeButton">الــــبــدء</a>
                     </div>
                    <div class="Img"> <img class="img-responsive img-rounded"src="img/about_01.jpg"></div>
                 </div>
            </div>
        </section>

        <!------ Services Section -------->

        <section class="servicesSection"id="services">
            <div class="container">
                <div class="section-title">
                    <h2>خدماتنا للمالك</h2>
                    <p style="font-size: 19px">نحن نوفر لك اكثر من خدمة للحصول على الايجار من المستأجر وادارة جميع وحداتك السكنيه بسهوله </p>
                </div>
                <div class="mainServices">
                    <div>
                    <div class="allCardContent">
                            <img src="img/p1.jpeg">
                            <div class="CardContent">
                                <h5>تذكير المستأجرين بميعاد الدفع</h5>
                                <p>مش هتسيل هم انك تفكر المستأجرين بميعاد الدفع لان احنا هنسهل عليك انك تفكر المستأجرين كل شهر</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="allCardContent">
                            <img src="img/p3.jpeg">
                                <div class="CardContent">
                                    <h5>تقارير مفصلة بالدفع</h5>
                                    <p>هنوفر عليك انك تعرف سلوك وتقارير المستاجر في الاشهر القديمه</p>
                                </div>
                        </div>
                    </div>
                    <div>
                        <div class="allCardContent">
                            <img src="img/p2.jpeg">
                            <div class="CardContent">
                                <h5>توفير اكثر من وسيلة لتحصيل الايجار</h5>
                                <p>هنوفرلك اكثر من وسيله تقدر تحصل بيها ايجارك من المستأجر </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



<!------ Services Section -------->
        <section class="servicesSection"id="servicesRenter" style="margin-top: 0px ; margin-bottom: 100px;">
            <div class="container">
                <div class="section-title">
                    <h2>خدماتنا للمستأجر</h2>
                </div>
                <div class="mainServices">
                    <div>
                    <div class="allCardContent">
                            <img src="img/1.jpeg">
                            <div class="CardContent">
                                <h5>التذكير بميعاد الدفع</h5>
                                <p>سوف تصلك رساله تلقائيع على موبايلك قبل السداد للتكير</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="allCardContent">
                            <img src="img/2.jpeg">
                                <div class="CardContent">
                                    <h5>استلام إشعار لتسديد الإيجار</h5>
                                    <p>استلام رسالة نصية و بريداً الكترونياً بهما رابط يأخذك إلى صفحة التسديد الخاصة بصاحب العقار</p>
                                </div>
                        </div>
                    </div>
                    <div>
                        <div class="allCardContent">
                            <img src="img/3.jpeg">
                            <div class="CardContent">
                                <h5>التسديد باستخدام بوابة الدفع</h5>
                                <p>سوف يتم ارسال رساله نصيه للمستأجر تتضمن كود المالك وصفحة التسديد</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!---------------------------- Common question Section----------------------------->

        <div class="container">
            <div class="section-title"style="margin-bottom: 70px">
                <h2>اسئلة شائعه</h2>
            </div>
            <div class="row" style="margin-bottom: 100px">
                <div class="col-md-6" >
                    <div style="margin-bottom: 30px ; transition: all .5s ">
                        <div id="d1"style="background-color: #FFF ; box-shadow: 2px 2px 10px #333 ; padding: 10px" class="row">
                            <div class="col-sm-3">هل زارنت آمن؟</div>
                            <div class="col-sm-9"><i class="fas fa-plus"></i></div>

                            </div>
                        <p id="p1"style="font-size: 16px ; text-align: right ; display: none ;transition: all 0.7s ease 0s;">نستخدم احدث التكنولوجيا للحفاظ على معلوماتك بشكل آمن ومحفظ. يهمنا جداً تشفير معلوماتك السرية وتأمينها.</p>

                    </div>
                    <div style="margin-bottom: 30px ; transition: all .5s ">
                        <div id="d2" style="background-color: #FFF ; box-shadow: 2px 2px 10px #333 ; padding: 10px" class="row">
                            <div class="col-sm-6">ماذا سيحدث ان لم يتم السداد فورياً؟</div>
                            <div class="col-sm-6"><i class="fas fa-plus"></i></div>

                            </div>
                        <p id="p2"style="font-size: 16px ; text-align: right ; display: none ;transition: all 0.7s ease 0s;">يستلم المستأجر تذكير تلقائي بعد 3 ايام من الرسالة الأولى. يمكنه الضغط على اي رابط من الروابط المرسلة والسداد في اي وقت.</p>

                    </div>
                </div>
                <div class="col-md-6">
                    <div style="margin-bottom: 30px ; transition: all .5s ">
                        <div id="d3"style="background-color: #FFF ; box-shadow: 2px 2px 10px #333 ; padding: 10px" class="row">
                            <div class="col-sm-6">كيف يمكننى استخدام خدمة زارنت ؟ </div>
                            <div class="col-sm-6"><i class="fas fa-plus"></i></div>

                            </div>
                        <p id="p3" style="font-size: 16px ; text-align: right ; display: none ;transition: all 0.7s ease 0s;">من خلال تسجيل بياناتك فى موقعنا ثم الدخول الى صفحة تسجيل المستأجر </p>

                    </div>
                    <div style="margin-bottom: 30px;transition: all .5s ">
                        <div id="d4"style="background-color: #FFF ; box-shadow: 2px 2px 10px #333 ; padding: 10px" class="row">
                                <div class="col-sm-6">كيف يمكنني السداد دون هاتف ذكي؟</div>
                            <div class="col-sm-6"><i class="fas fa-plus"></i></div>

                            </div>
                        <p id="p4"style="font-size: 16px ; text-align: right ; display: none ; transition: all 0.7s ease 0s;">يمكنك استخدام اي كومبيوتر او جهاز موصول بالانترنت.</p>

                    </div>
                </div>


            </div>
        </div>

    <section class="contact-area section-padding" data-stellar-background-ratio="0.6">
         <!------ contact ways Section -------->
        <div class="section-title">
            <h2>مرحبا بك</h2>
            <p>يمكنك التحدث معنا فى اى وقت</p>
        </div>
        <section class="ContacyWaySection"id="contact">
            <div class="container">
                <div class="mainServices">

                    <div class="serv">
                    <div class="allCardContent">
                        <i class="icon icon-location2"></i>
                            <div class="CardContent text-center">
                                <h1 class="H1">المقر الرئيسي</h1>
                                <p>مصر - اسيوط - شارع يسرى راغب</p>
                            </div>
                        </div>
                    </div>
                    <div class="serv">
                        <div class="allCardContent">
                            <i class="icon icon-location2"></i>
                                <div class="CardContent text-center">
                                    <h1 class="H1">ايميل</h1>
                                    <p>info@yoursite.com </p>
                                    <p>info@yoursite.com </p>
                                </div>
                        </div>
                    </div>
                    <div class="serv">
                        <div class="allCardContent">
                            <i class="icon icon-location2"></i>
                            <div class="CardContent text-center">
                                <h1 class="H1">اتصل بنا</h1>
                                <p>+61 3 8376 6284 </p>
                                <p>+61 3 8376 6284 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="contact-form-design-area">
                <div class="">
                    <!-- START CONTACT FORM DESIGN AREA -->
                    <div class="contact-form dispaly:flex ; justify-content:center"id="review">
                        <form id="contact-form" method="post" action="" enctype="multipart/form-data">
                            <div class="">
                                <div class="form-group col-md-12">
                                    <input type="text" name="name" class="form-control" id="first-name" placeholder="الأسم" required="required">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="الايميل" required="required">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea rows="6" name="message" class="form-control" id="description" placeholder="رسالتك" required="required"></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <div class="actions">
                                        <input type="submit" value="ارسال الرساله" name="send" id="submitButton" class="btn btn-lg btn-contact-bg" title="Submit Your Message!">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- / END CONTACT FORM DESIGN AREA -->
                </div>
            </div>
        </div>
        <!-- START CONTACT DESIGN AREA -->
    </section>
    <!-- / END CONTACT DESIGN AREA -->









		<script src="js/jQuery3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script src="js/e.js"></script>
	</body>


</html>
