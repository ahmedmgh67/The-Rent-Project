<?php
    include('../../phpFile.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>THE RENT</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="../../index.php" class="site_title"><i class="fa fa-paw"></i> <span>THE RENT</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>مرحبا</span>
                <h2><?php echo $_SESSION['name']; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> الصفحات <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="form.php">اضافة مستأجرين</a></li>
                        <li><a href="projects.php">قائمة المستأجرين</a></li>
                        <li><a href="contacts.php">معلومات عن المستأجرين</a></li>
                        <li><a href="../../index.php"><i class="fa fa-laptop"></i> الصفحة الرئيسية </a></li>


                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->


          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><span><?php $_SESSION['name'];?></span>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="../../form.php"><i class="fa fa-sign-out pull-right"></i>تسجيل خروج</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">
                        <?php
                            $xd=$_SESSION['id'];
                            $q="SELECT * FROM paid WHERE user_xid='$xd' ORDER BY paidTime DESC";
                            $q=mysqli_query($con,$q);
                            $count=mysqli_num_rows($q);
                            echo $count;
                        ?>
                    </span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                      <?php
                          $xd=$_SESSION['id'];
                          $q="SELECT * FROM paid WHERE user_xid='$xd' ORDER BY paidTime DESC";
                          $q=mysqli_query($con,$q);
                          while($row=mysqli_fetch_array($q)){
                              $id=$row['user_xid'];
                              $xtime=$row['paidTime'];
                              $msg=$row['description'];
                              echo"
                                  <li>
                                      <a>
                                          <span class='image'><img src='images/user.png' alt='Profile Image'/></span>
                                          <span>
                                              <span class='time'>$xtime</span>
                                          </span>&nbsp
                                          <span class='message'>$msg</span>
                                      </a>
                                  </li>
                              ";
                          }
                      ?>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>المستأجرين</h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="row" dir="rtl">
                      <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <ul class="pagination pagination-split">

                        </ul>
                      </div>

                      <div class="clearfix"></div>

                        <?php
                            $xd=$_SESSION['id'];
                            $q="SELECT DISTINCT * FROM tenant WHERE user_id='$xd'";
                            $q=mysqli_query($con,$q);
                            while($row=mysqli_fetch_array($q)){
                                $name=$row['name'];
                                $months=$row['monthsNotPaid'];
                                $money=$row['mony'];
                                $code=$row['code'];
                                $phone=$row['phone'];
                                $amount=$row['price'];
                                echo"
                                    <div class='col-md-4 col-sm-4 col-xs-12 profile_details'>
                                        <div class='well profile_view'>
                                            <div class='col-sm-12'>
                                                <div class='left col-xs-7'>
                                                    <h2>$name</h2>
                                                    <ul class='list-unstyled' style='padding-right: 0'>
                                                    <li>
                                                        <i class='fa fa-phone'></i>
                                                        <strong>الكود :</strong>$code
                                                    </li>
                                                        <li>
                                                            <i class='fa fa-phone'></i>
                                                            <strong>التليفون :</strong>$phone
                                                        </li>
                                                        <li>
                                                            <i class='fa fa-phone'></i>
                                                            <strong>المبلغ الكلى :</strong>$money
                                                        </li>
                                                        <li>
                                                            <i class='fa fa-phone'></i>
                                                            <strong>الايجار الشهرى :</strong>$amount
                                                        </li>
                                                        <li>
                                                            <i class='fa fa-building'></i>
                                                            <strong> الشهور التى لم تدفع بعد   :</strong><span>$months</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class='right col-xs-5 text-center'>
                                                    <img src='images/user.png' alt='' class='img-circle img-responsive'>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
                            }
                        ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
