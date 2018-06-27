<?php get_header(); ?>

        <!--===============================================>>> main carousel -->
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">

                  <div class="carousel-item active">
                      <img class="d-block w-100 slider-img" src="<?php echo get_template_directory_uri(); ?> /imgs/slider-1.jpg" alt="First slide">
                      <div class="carousel-caption d-block">
                         <div class="row dir-rtl">
                             <div class="col-lg-6">
                                 <div class="w-full h-full">
                                   <img src="<?php echo get_template_directory_uri(); ?> /imgs/product.png" class="w-full h-full" alt="">
                                 </div>
                                 
                             </div>
                             <div class="col-lg-6">
                                <!--==rgb(110, 51, 49)==left side======-->
                                 <div class="row dir-rtl h-full">
                                     <div class="col-md-3 col-4 h-full">
                                       <!-- border-bottom-price -->
                                          <div class="w-full price-at-slider p-t-20 p-b-20 p-l-5 p-r-5 border-bottom-price ">
                                             <h3 class="fs-1-5vw">145,99<br>ريال</h3>
                                          </div>
                                     </div>

                                     <div class="col-md-9 col-8 h-full ">
                                         <div class="w-full text-right ">
                                           <h3 class="fs-2vw">مجموعة <span> صيف 2017</span></h3>
                                             <button class="btn fs-1-5vw"><span><i class="fas fa-shopping-cart fs-1-5vw"></i></span>اشترى الان</button>
                                         </div>
                                     </div>
                                 <!--==================-->
                             </div>
                         </div>
                      </div>
                  </div>
              </div>
              <div class="carousel-item ">
                  <img class="d-block w-100 slider-img" src="<?php echo get_template_directory_uri(); ?> /imgs/slider-1.jpg" alt="First slide">
                  <div class="carousel-caption d-block">
                     <div class="row dir-rtl">
                         <div class="col-lg-6">
                             <div class="w-full h-full">
                                 <img src="<?php echo get_template_directory_uri(); ?> /imgs/product.png" class="w-full h-full" alt="">
                             </div>
                         </div>
                         <div class="col-lg-6 ">
                            <!--====left side======-->
                             <div class="row dir-rtl h-full">
                                 <div class="col-md-3 col-4 h-full">
                                   <!-- border-bottom-price -->
                                      <div class="w-full price-at-slider p-t-20 p-b-20 p-l-5 p-r-5 border-bottom-price ">
                                         <h3 class="fs-1-5vw">145,99<br>ريال</h3>
                                      </div>
                                 </div>

                                 <div class="col-md-9 col-8 h-full ">
                                     <div class="w-full text-right ">
                                       <h3 class="fs-2vw">مجموعة <span> صيف 2017</span></h3>
                                         <button class="btn fs-1-5vw"><span><i class="fas fa-shopping-cart fs-1-5vw"></i></span>اشترى الان</button>
                                     </div>
                                 </div>
                             <!--==================-->
                         </div>
                     </div>
                  </div>
              </div>
          </div>

          <div class="carousel-item ">
              <img class="d-block w-100 slider-img" src="<?php echo get_template_directory_uri(); ?> /imgs/slider-1.jpg" alt="First slide">
              <div class="carousel-caption d-block">
                 <div class="row dir-rtl">
                     <div class="col-lg-6">
                         <div class="w-full h-full">
                             <img src="<?php echo get_template_directory_uri(); ?> /imgs/product.png" class="w-full h-full" alt="">
                         </div>
                     </div>
                     <div class="col-lg-6 ">
                        <!--====left side======-->
                         <div class="row dir-rtl h-full">
                             <div class="col-md-3 col-4 h-full">
                               <!-- border-bottom-price -->
                                  <div class="w-full price-at-slider p-t-20 p-b-20 p-l-5 p-r-5  border-bottom-price ">
                                     <h3 class="fs-1-5vw">145,99<br>ريال</h3>
                                  </div>
                             </div>

                             <div class="col-md-9 col-8 h-full ">
                                 <div class="w-full text-right ">
                                   <h3 class="fs-2vw">مجموعة <span> صيف 2017</span></h3>
                                     <button class="btn fs-1-5vw"><span><i class="fas fa-shopping-cart fs-1-5vw"></i></span>اشترى الان</button>
                                 </div>
                             </div>
                         <!--==================-->
                     </div>
                 </div>
              </div>
          </div>
      </div>



                 <!-- <div class="carousel-item">
                      <img class="d-block w-100" src="imgs/slider-1.jpg" alt="Second slide">
                      <div class="carousel-caption d-none d-md-block">
                          <h5>test</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, hic.</p>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <img class="d-block w-100" src="imgs/slider-1.jpg" alt="Third slide">
                      <div class="carousel-caption d-none d-md-block">
                          <h5>test</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, hic.</p>
                      </div>
                  </div> -->

              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>


          </div>  <!--inner carousel-->
    <!--===============================================>>>>>>>>>>>>>>>-->




      </div>
         <!--============================================>>>>>>>>>>>>>>>>>-->
         <!--============================================>>>>>>>>>>>>>>>>>Brands slider -->

        <!--============================================>>>>>>>>>>>>>>>>>-->
        <!--============================================>>>>>>>>>>>>>>>>>OUR vission -->
         <section class=" bg-main-light m-t-200  " style="box-shadow: 0 10px 10px rgba(0,0,0,0.2);">
           <div class="container ">
               <div class="content p-t-100 p-b-100 pos-relative">
                    <div class="contain-title w-full">
                        <div class="circle-title  title-shadow m-r-auto m-l-auto "><h2 class="lh-4">رؤيتنا</h2></div>
                    </div>

                   <h3 class="rtl text-right">
                       نشر روح الجمال والثقة بين السيدات في المجتمع السعودي عن طريق تشجيع التغيير في كل الجوانب التي تؤثر إيجابيا في نمط حياة السيدات بطريقة صحية لا تتعارض مع تقاليد المجتمع السعودي
                   </h3>

               </div>
               <!--<div class="circle-title"><h2>title 1</h2></div>-->

           </div>
        </section>
       <!--============================================>>>>>>>>>>>>>>>>>-->
       <!--============================================>>>>>>>>>>>>>>>>>OUR mission-->
      <section class=" bg-main-light m-t-25  section-shadow-t-b">
              <div class="container ">
                  <div class="content p-t-100 p-b-100 pos-relative">
                      <div class="contain-title w-full">
                          <div class="circle-title  title-shadow m-r-auto m-l-auto "><h2 class="lh-4">مهمتنا</h2></div>
                      </div>

                      <h2 class=" text-right">
                          أن نحتـل موقـعاً قيادياً بالسـوق السعـودي عن طـريـق
                      </h2>
                      <div class="missions-list p-r-20 p-l-20">
                          <ul class=" dir-rtl text-right">
                              <li class="rtl text-right">
                                  <h4 class="lh-1-9">ان نكون الرواد في دعم المجتمع النسائي السعودي بالمنتجات الحديثة والمتميزة التي تساهم في العناية بجمال وصحة المرأة بطرق آمنة لا تسبب أي أضرار آنية أو مستقبلية للصحة العامة</h4>
                              </li>
                              <li>
                                  <h4 class="lh-1-9">أن نكون الرواد في بناء وتشجيع ثقافة التغيير نحو الأفضل طوال الوقت</h4>
                              </li>
                              <li>
                                  <h4 class="lh-1-9">أن نكون مفيدين للمجتمع بصفة عامة عن طريق دعم ونشر مبدأ المسؤلية المجتمعية للشركات</h4>
                              </li>
                              <li>
                                  <h4 class="lh-1-9">أن نخلق بيئة عمل صحية لموظفينا تساعدهم علي أن يكونوا أكثر إنتاجية وأكثر نفعا للمجتمع</h4>
                              </li>
                          </ul>
                      </div>
                  </div>

                  <!--<div class="circle-title"><h2>title 1</h2></div>-->

              </div>
          </section>
      <!--============================================>>>>>>>>>>>>>>>>>-->
      <!--============================================>>>>>>>>>>>>>>>>>OUR GOALS -->
      <section class=" m-t-25  ">
              <div class="container ">
                  <div class="content p-t-75 p-b-75 pos-relative">
                      <div class="contain-title w-full">
                          <div class="circle-title  title-shadow m-r-auto m-l-auto "><h2 class="lh-4">أهدافنا</h2></div>
                      </div>
                  </div>
              </div>

              <div class="main-goals bg-main-light pos-relative section-shadow-t-b" id="goals-parent">
                <div class="contain-goals-container w-full pos-absolute ">
                    <div class="container ">
                        <div class="row dir-rtl " id="goals">
                            <div class="col-lg-3 col-md-6 p-t-20 p-b-20 p-r-20 p-l-20">
                                <div class="goal bg-main text-center p-t-20 p-b-10">
                                    <h6 class="c-white ">الجمال</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 p-t-20 p-b-20 p-r-20 p-l-20">
                                <div class="goal bg-main text-center p-t-20 p-b-10">
                                    <h6 class="c-white ">التغير</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 p-t-20 p-b-20 p-r-20 p-l-20">
                                <div class="goal bg-main text-center p-t-20 p-b-10">
                                    <h6 class="c-white ">التميز</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 p-t-20 p-b-20 p-r-20 p-l-20">
                                <div class="goal bg-main text-center p-t-20 p-b-10">
                                    <h6 class="c-white ">الثقة</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 p-t-20 p-b-20 p-r-20 p-l-20">
                                <div class="goal bg-main text-center p-t-20 p-b-10">
                                    <h6 class="c-white ">الجودة</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 p-t-20 p-b-20 p-r-20 p-l-20">
                                <div class="goal bg-main text-center p-t-20 p-b-10">
                                    <h6 class="c-white ">التركيز على احتياجات العملاء</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 p-t-20 p-b-20 p-r-20 p-l-20">
                                <div class="goal bg-main text-center p-t-20 p-b-10">
                                    <h6 class="c-white ">العادات و التقاليد</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 p-t-20 p-b-20 p-r-20 p-l-20">
                                <div class="goal bg-main text-center p-t-20 p-b-10">
                                    <h6 class="c-white ">المسئولية الاجتماعية</h6>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
              </div>
          </section>
      <!--============================================>>>>>>>>>>>>>>>>>-->
      <!--============================================>>>>>>>>>>>>>>>>>OUR location -->
      <section class="  m-t-200   ">
              <div class="container ">
                  <div class="content   pos-relative">
                      <div class="contain-title w-full z-index-100">
                          <div class="circle-title  title-shadow m-r-auto m-l-auto "><h2 class="m-t-15 m-t-b-20">اماكن تواجدنا</h2></div>
                      </div>
                  </div>
              </div>
          <div id="map" class="w-full"></div>

      </section>
      <!--============================================>>>>>>>>>>>>>>>>>-->
      <!--============================================>>>>>>>>>>>>>>>>>OUR social media  -->
      <section class="  m-b-200 ">
          <div class="container bg-main-light sm-container" >
              <div class="row">
                  <div class="offset-md-4 col-md-4 sc-container bg-main c-white p-t-15 p-b-15 text-center border-bl-br-35">
                      @GETالتواصل الاجتماعى
                  </div>
              </div>
              <div class="row">
                  <div class="offset-md-3 col-md-6">
                      <div class="row">
                          <div class="col-3 p-t-10 p-r-10 p-b-10 p-l-10">
                            <div class="bg-main common-s-m-main facebook-main">
                                <i class="fab fa-facebook-f c-white fs-20"></i>
                            </div>
                          </div>

                          <div class="col-3 p-t-10 p-r-10 p-b-10 p-l-10">
                              <div class="bg-main common-s-m-main facebook-main">
                                  <i class="fab fa-twitter c-white fs-25"></i>
                              </div>
                          </div>

                          <div class="col-3 p-t-10 p-r-10 p-b-10 p-l-10">
                              <div class="bg-main common-s-m-main facebook-main">
                                  <i class="fab fa-instagram  c-white fs-25"></i>
                              </div>
                          </div>

                          <div class="col-3 p-t-10 p-r-10 p-b-10 p-l-10">
                              <div class="bg-main common-s-m-main facebook-main">
                                  <i class="fab fa-youtube c-white fs-25"></i>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>
          </div>


      </section>
      <!--============================================>>>>>>>>>>>>>>>>>-->

  </div>
<?php get_footer(); ?>
