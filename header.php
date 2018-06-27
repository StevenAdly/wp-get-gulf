<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <!--<link rel="stylesheet" href="css/font-awesome.min.css">-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php bloginfo('description');?>">
  <title><?php bloginfo('title') ?></title>



  <?php wp_head(); ?>
</head>

<body>


<style media="screen">
.carousel-control-prev-icon {
    background-image: url('<?php echo get_template_directory_uri(); ?> /imgs/slide-left.png');
    height: 130px;
    width: 50px;
}
.carousel-control-next-icon {
    background-image: url('<?php echo get_template_directory_uri(); ?> /imgs/slide-right.png');
    height: 130px;
    width: 50px;
}
</style>

  <div class="wrapper">
        <!--============================================>>>> nav bar -->
              <nav class="navbar navbar-expand-lg navbar-light " id="mynav">
                  <div class="container dir-rtl">
                      <a class="navbar-brand " href=" <?php echo site_url(); ?>">
                          <img src="<?php echo get_template_directory_uri(); ?> /imgs/logo.png" alt="">
                      </a>
                      <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon" ></span>
                      </button>
                      <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">

<!--
                          <ul class="navbar-nav w-full">
                              <li class="nav-item main-c m-l-r-auto">
                                  <a class="nav-link c-main"  href="#">
                                      <div class="nav-icon home-ico" navIconID="1">
                                          <i class="fas fa-home dis-block hover-icon" navIconFA="1"></i>
                                      </div>
                                      الرئيسية
                                  </a>
                              </li>
                              <li class="nav-item m-l-r-auto">
                                  <a class="nav-link c-main" href="#">
                                      <div class="nav-icon info-ico" navIconID="2">
                                          <i class="fas fa-info dis-block hover-icon"  navIconFA="2"></i>
                                      </div>
                                      عنا
                                  </a>
                              </li>
                              <li class="nav-item m-l-r-auto">
                                  <a class="nav-link c-main" href="#">
                                      <div class="nav-icon calender-ico" navIconID="3">
                                          <i class="fas fa-calendar-times dis-block hover-icon"  navIconFA="3"></i>
                                      </div>
                                      انشطة و فاعيليات
                                  </a>
                              </li>
                              <li class="nav-item m-l-r-auto">
                                  <a class="nav-link c-main" href="">
                                      <div class="nav-icon shopping-ico" navIconID="4">
                                        <i class="fas fa-cart-arrow-down dis-block hover-icon"  navIconFA="4"></i>
                                      </div>
                                      المتجر الاكترونى
                                  </a>
                              </li>
                              <li class="nav-item m-l-r-auto">
                                  <a class="nav-link c-main" href="#">
                                      <div class="nav-icon camera-ico" navIconID="5">
                                          <i class="fas fa-camera dis-block hover-icon"  navIconFA="5"></i>
                                      </div>
                                      معرض الصور
                                  </a>
                              </li>
                          </ul> -->

                                        <?php
                                        $menu =array(
                                          'menu'=> 'header-menu',
                                          'menu_class'=>'nav navbar-nav w-full',
                                          'container'=>'',
                                          'walker'=> new WP_Bootstrap_Navwalker(),


                                        );

                                        wp_nav_menu($menu);
                                         ?>

                      </div>


                      <a class="navbar-brand d-xl-block d-lg-block d-md-none d-sm-none d-none" href="#">
                          <img src="imgs/logo.png" alt="">
                      </a>

                  </div>
              </nav>
         <!--============================================>>>>>>>>>>>>>>>>>-->
