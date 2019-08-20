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

    <title>THE RENT </title>

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
                    <img src="images/img.jpg" alt=""><span><?php echo$_SESSION['name'];?></span>
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
        <div class="right_col" role="main" >
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>قائمة المستأجرين</h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>قائمة المستأجرين</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- start project list -->
                    <table class="table table-striped projects" dir="rtl">
                      <thead>
                        <tr>
                          <td style="width: 1%">#</td>
                          <td style="width: 20%">اسم المستأجر </td>
                          <td>الايجار الشهرى بالجنيه</td>
                          <td><?php
                               $d=date("m");
                               if($d==1)
                                   echo"شهر يناير";
                               if($d==2)
                                   echo"شهر فبراير";
                               if($d==3)
                                   echo"شهر مارس";
                               if($d==4)
                                   echo"شهر ابريل";
                               if($d==5)
                                   echo"شهر مايو";
                               if($d==6)
                                   echo"شهر يونيه";
                               if($d==7)
                                   echo"شهر يوليو";
                               if($d==8)
                                   echo"شهر اغسطس";
                               if($d==9)
                                   echo"شهر سبتمبر";
                               if($d==10)
                                   echo"شهر اكتوبر";
                               if($d==11)
                                   echo"شهر نوفمبر";
                               if($d==12)
                                   echo"شهر ديسمبر";
                          ?></td>
                          <td> عدد الشهور التى لم تدفع بعد</td>
                          <td>المبلغ المتبقى </td>
                          <td style="width: 20%">الاعدادات</td>
                        </tr>
                      </thead>
                      <tbody>
                        <?php include('../../dashboard_show.php'); ?>
                      </tbody>
                    </table>
                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

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
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
