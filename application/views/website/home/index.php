
<!-- Courousals  -->
<div class="mt-3">
    <div id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
            <!-- <li data-target="#myCarousel" data-slide-to="0" class="active"></li> -->
            <!-- <li data-target="#myCarousel" data-slide-to="1" class="active"></li> -->
            <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
        </ol>

        <div class="carousel-inner">
            <div class="item active">
                <div class="fillBanner showimg2" style="margin-top:-20px;"></div>
                <div class="carousel-caption">
                    <div class="p-0 div-widget-wrap divelement-element-populated normalCorousal2">
                        <div class="col-12 col-md-7 col-lg-7 divelement-element animated-fast div-widget div-widget-highlighted-heading animated fadeInDown pb-2 pt-2">
                            <div class="div-widget-container ">
                                <h1 class="font-weight-semi-bold text-logo-color_siilc show-res txt_shadow">
                                    <?php echo $this->lang->line('carosalOne'); ?>
                                </h1>
                                <img src = "<?php echo base_url();?>/assets/images/mahareraLogo.png" class="mahareraLogo" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </div>
</div>




<div id="content" class="site-content">
    <div class="elementor">
        <div class="div-sections-wrap">
            <!-- HEADER IMAGES -->
            <!-- OverLay screen open on click -
            <span style="font-size:30px;cursor:pointer;z-index: 2050;" onclick="openNav()">&#9776; open</span> -->

            <!-- Overlay Screen -->
            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="container mt-10 startUpModal modalBgImg" style="display: flex;flex-direction: column;justify-content: center;align-items: center;" >
                    <div class="p-2" sytle="display: flex;justify-content: center;">
                        <?php echo $this->lang->line('OverlayModal'); ?>
                    </div>
                    <div style="display: flex;justify-content: center;">
                        <div class="m-2 p-1 mb-2 ">
                            <form action="<?php echo base_url('web/users'); ?>" method="post">
                                <input type="hidden" name="course_id" value="1" />
                                <input type="hidden" name="sub_course_id" value="1" />
                                <input type="hidden" name="sub_course_name" value="MahaRERA Real Estate Agent Certification Program" />
                                <input type="hidden" name="course_name" value="MahaRERA Real Estate Agent Certification Program" />
                                <input type="hidden" name="course_price" value="5000" />
                                <button class="btn buttonBuy btn-lg overlayModalEnrollNowBtn" style="background-color: black;" type="submit"><?php echo $this->lang->line('homepage_Enroll_Now'); ?></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feature course -->
            <div class="div-sections divelement-element divider-90 div-sections-boxed div-sections-height-default div-sections-height-default" style="padding:16px;">
                <div class="div-container div-column-gap-default">
                    <div class="div-column elementor-col-100 elementor-top-column divelement-element ">
                        <div class="py-0 div-widget-wrap divelement-element-populated">
                            <section class="div-sections div-inner-section divelement-element mb-4 mb-md-7 div-sections-boxed div-sections-height-default div-sections-height-default">
                                <div class="div-container div-column-gap-default row align-items-end">
                                    <div class="div-column elementor-col-50 elementor-inner-column divelement-element col-md mb-2 mb-md-0 px-0">
                                        <div class="p-0 div-widget-wrap divelement-element-populated">
                                            <div class="divelement-element div-widget div-widget-highlighted-heading">
                                                <div class="div-widget-container">
                                                    <h2 class=" h1 mb-1 text-logo-color_siilc"><?php echo $this->lang->line('homeTab_mainHeading'); ?></h2>
                                                    <!-- <h2 class=" h1 mb-1 text-logo-color_siilc">Real Estate Broker Certification Programs</h2> -->
                                                </div>
                                            </div>


                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-3 d-flex justify-content-center align-items-center cardBatchColor me-0 mr-md-1 mb-5 mb-md-0 coursecard course_card_box_shadow" style="height:100px; background-color:'white';">
                                                        <img src="<?php echo base_url(); ?>/assets/new_course (1).png" style="width:30px; height:30px;" alt="Maharera" class='mr-4' />
                                                        <div style="width:70%;overflow:auto">
                                                            <h6 style="margin-bottom: 0px;"><?php echo $this->lang->line('homepage_tatal_hours'); ?></h6>
                                                            <p style="font-size:16px; margin-bottom:0px;"><?php echo $this->lang->line('homepage_twenty_hours'); ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 d-flex justify-content-center align-items-center cardBatchColor me-0 mr-md-1 mb-5 mb-md-0 coursecard course_card_box_shadow" style="height:100px; background-color:'white';">
                                                        <img src="<?php echo base_url(); ?>/assets/new_course (3).png" style="width:30px; height:30px;" alt="Maharera" class='mr-4' />
                                                        <div style="width:70%;overflow:auto">
                                                            <h6 style="margin-bottom: 0px;"><?php echo $this->lang->line('homepage_langauge'); ?></h6>
                                                            <p style="font-size:16px; margin-bottom:0px;"><?php echo $this->lang->line('homepage_langauges'); ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 d-flex justify-content-center align-items-center cardBatchColor  coursecard course_card_box_shadow" style="height:100px; background-color:'white';">
                                                        <i class="material-icons-outlined text-logo-color_siilc" style="font-size: 40px;" class='mr-4'><?php echo $this->lang->line('homepage_currency'); ?></i>
                                                        <div style="width:70%;overflow:auto">
                                                            <h6 style="margin-bottom: 0px;"><?php echo $this->lang->line('homepage_course_fees'); ?></h6>
                                                            <p style="font-size:16px;"><?php echo $this->lang->line('homepage_five_thousand'); ?> <span style="font-size:11px;"><?php echo $this->lang->line('homepage_five_plus_gst'); ?></span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="container cardBatch " style="padding:0px;">
                                                <div class="row justify-content-center" >
                                                    <div class="d-flex flex-column flex-md-row justify-content-around col-md-6 col-12 textBackground animated fadeInRight " style="width:40%;  align-items: center;">

                                                        <div style="width:33%; height:90px;  padding-right:5px; border-right: 1px solid grey;" class="row cardBatchColor coursecard course_card_box_shadow">
                                                            <div style="width:30%; padding:10px;" class=" align-items-center">
                                                                <div style="padding-top:0px;margin-top:-10px;background-color:white;">
                                                                    <img src="<?php echo base_url(); ?>/assets/new_course (1).png" style="margin-top:45%;padding:2px;" />
                                                                </div>
                                                            </div>
                                                            <div style="width:70%;overflow:auto">
                                                                <h6 style="margin-bottom: 0px;margin-top:10px;">Total hours:</h6>
                                                                <p style="font-size:16px;">20 hours</p>
                                                            </div>
                                                        </div>
                                                        <div style="width:33%; height:90px;  padding-right:5px; border-right: 1px solid grey;" class="row cardBatchColor coursecard course_card_box_shadow">
                                                         
                                                            <div style="width:30%; padding:10px;" class=" align-items-center">
                                                                <div style="padding-top:0px;margin-top:-10px;background-color:white;">
                                                                    <img src="<?php echo base_url(); ?>/assets/new_course (3).png" style="margin-top:45%;padding:2px;" />
                                                                </div>
                                                                
                                                            </div>
                                                            <div style="width:70%;overflow:auto">
                                                                <h6 style="margin-bottom: 0px;margin-top:10px;">Language:</h6>
                                                                <p style="font-size:16px;">English, Hindi, Marathi</p>
                                                            </div>
                                                        </div>
                                                        <div style="width:33%; height:90px;  padding-right:5px;" class="row cardBatchColor coursecard course_card_box_shadow">
                                                          
                                                            <div style="width:30%; padding:10px;" class=" align-items-center">
                                                    
                                                                <div style="padding-top:0px;margin-top:-10px;background-color:white;">
                                                                    <i class="material-icons-outlined text-logo-color_siilc" style="font-size: 40px;margin-top:45%;">currency_rupee</i>
                                                                </div>
                                                            </div>
                                                            <div style="width:70%;overflow:auto">
                                                                <h6 style="margin-bottom: 0px;margin-top:10px;">Course Fee:</h6>
                                                                <p style="font-size:16px;">&#x20b9;5,000/- <span style="font-size:11px;">+GST</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div> -->

                                            <div class="divelement-element  div-widget div-widget-highlighted-heading">
                                                <div class="div-widget-container">
                                                    <p class=" font-size-lg text-capitalize">
                                                        <!-- <?php echo $this->lang->line('homeTab_mainHeadingContent'); ?> -->
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div id="" style="margin-top:30px;">
                                    <div class="row">
                                        <div class="col-12 mx-auto mt-5 mb-5 card">
                                            <h2 class="mt-5 mb-5 animated fadeInRight text-logo-color_siilc"><?php echo $this->lang->line('brokerCert_program_aboutHead'); ?></h2>
                                            <div class="line-dec-left mb-5"></div>
                                            <p class="text-justify"><?php echo $this->lang->line('brokerCert_program_aboutContent'); ?></p>

                                        </div>

                                    </div>

                                </div>
                            </section>

                            <!-- Card 1 -->
                            <div class="divelement-element elementor-course--skin-print_default_course div-widget div-widget-sk-course-carousel">
                                <div class="container">
                                    <div class="course-carousel mx-n4 dots flickity-enabled is-draggable">
                                        <div class="row justify-content-center">

                                            <!-- <div class="col-12 col-md-5 col-xl-5 pb-md-7 pb-4 m-4 is-selected card border shadow coursecard course_card_box_shadow">
                                                <div class="sk-fade  ">
                                                    <!-- Image --
                                                    <div class="position-relative">
                                                        <div class="row">
                                                            <div class="col-12 courseImageHome1" style="height:180px;">
                                                            </div>
                                                            <div class="col-12 mt-3">
                                                                <h2 class="courseBoxTitleHomeOnline text-logo-color_siilc mb-0"><?php echo $this->lang->line('cardOne_head'); ?></h2>
                                                                <!-- class="course-amountsymbol" --
                                                                <p style="margin-bottom:0px;"><span class=" course-amount"><b>&#x20b9;</b></span><span class="course-amount"><?php echo $this->lang->line('cardOne_price'); ?></span><span style="font-size:10px;"> + GST</span>
                                                                    <!-- <span>&#x20b9;0000</span> --
                                                                </p>
                                                                <div style="margin-bottom:16px;">
                                                                    <div style="float:left;margin-right:10px;">
                                                                        <span style="background-color:#F6A607; border-radius:30%; width:30px; height:30px; font-size:20px; font-weight:lighter; display:flex; justify-content:center;align-items:center; color:#090761;"><i class="fas fa-clock"></i></span>
                                                                    </div>
                                                                    <div>
                                                                        <h4 class="text-logo-color_siilc"><?php echo $this->lang->line('cardOne_time'); ?></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 courseTextHome justify border-bottom">
                                                                <p class="text-justify"><?php echo $this->lang->line('cardOne_content'); ?></p>
                                                                <div class="divider-20"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h7><?php echo $this->lang->line('cardOne_subContent_0'); ?></h7>
                                                            </div>
                                                            <div class="col-6 text-center">
                                                                <h7 class="gTik boldTik"> &#10003; </h7>
                                                            </div>
                                                        </div>
                                                        <hr class="m-2" />
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h7><?php echo $this->lang->line('cardOne_subContent_1'); ?></h7>
                                                            </div>
                                                            <!-- cross sign code-> &#x2717; --
                                                            <div class="col-6 text-center">
                                                                <h7 class="gTik boldTik">&#10003;</h7>
                                                            </div>
                                                        </div>

                                                        <hr class="m-2" />
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h7><?php echo $this->lang->line('cardOne_subContent_2'); ?></h7>
                                                            </div>
                                                            <div class="col-6 text-center">
                                                                <h7 class="gTik boldTik"> &#10003; </h7>
                                                            </div>
                                                        </div>

                                                        <hr class="m-2" />
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h7><?php echo $this->lang->line('cardOne_subContent_3'); ?></h7>
                                                            </div>
                                                            <div class="col-6 text-center">
                                                                <h7 class="gTik boldTik">&#10003;</h7>
                                                            </div>
                                                        </div>

                                                        <hr class="m-2" />
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h7><?php echo $this->lang->line('cardOne_subContent_4'); ?></h7>
                                                            </div>
                                                            <div class="col-6 text-center">
                                                                <h7 class="gTik boldTik">&#10003; </h7>
                                                            </div>
                                                        </div>

                                                        <hr class="m-2" />
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h7><?php echo $this->lang->line('cardOne_subContent_5'); ?></h7>
                                                            </div>
                                                            <div class="col-6 text-center">
                                                                <h7 class="gTik boldTik">&#10003; </h7>
                                                            </div>
                                                        </div>

                                                        <hr class="m-2" />
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h7><?php echo $this->lang->line('cardOne_subContent_6'); ?></h7>
                                                            </div>
                                                            <div class="col-6 text-center">
                                                                <h7 class="gTik boldTik">&#10003; </h7>
                                                            </div>
                                                        </div>
                                                        <hr class="m-2" />
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h7><?php echo $this->lang->line('cardOne_subContent_7'); ?></h7>
                                                            </div>
                                                            <div class="col-6 text-center">
                                                                <h7 class="gTik boldTik">&#10003; </h7>
                                                            </div>
                                                        </div>
                                                        <hr class="m-2" /><br />
                                                        <div class="row m-0 d-flex justify-content-between">
                                                            <form action="<?php echo base_url('web/users'); ?>" method="post">
                                                                <input type="hidden" name="course_id" value="1" />
                                                                <input type="hidden" name="sub_course_id" value="0" />
                                                                <input type="hidden" name="sub_course_name" value="" />
                                                                <input type="hidden" name="course_name" value="Instructor-led Online courses" />
                                                                <input type="hidden" name="course_price" value="5000" />
                                                                <button class="btn buttonBuy btn-sm" type="submit"><?php echo $this->lang->line('cardOne_btn1'); ?></button>
                                                            </form>
                                                            <a class="buttonBuy" href="<?php echo base_url(); ?>web/course"><?php echo $this->lang->line('cardOne_btn2'); ?></a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div> --
                                            <!-- Card 2 --
                                            <div class="col-12 col-md-5 col-xl-5 pb-md-7 pb-4 m-4 is-selected card shadow border coursecard course_card_box_shadow">
                                                <div class="sk-fade">
                                                    <!-- Image --
                                                    <div class="position-relative">
                                                        <div class="row">
                                                            <div class="col-12 courseImageHome2" style="height:180px;">
                                                            </div>
                                                            <div class="col-12 mt-3">
                                                                <h2 class="courseBoxTitleHomeClassroom text-logo-color_siilc mb-0"><?php echo $this->lang->line('cardTwo_head'); ?></h2>
                                                                <!-- class="course-amountsymbol" --
                                                                <p style="margin-bottom:0px;"><span class="course-amount">&#x20b9;</span><span class="course-amount"><?php echo $this->lang->line('cardTwo_price'); ?></span><span style="font-size:10px;"> + GST</span>
                                                                    <!-- <span>&#x20b9;0000</span> --
                                                                </p>
                                                                <div style="margin-bottom:16px;">
                                                                    <div style="float:left;margin-right:10px;">
                                                                        <span style="background-color:#F6A607; border-radius:30%; width:30px; height:30px; font-size:20px; font-weight:lighter; display:flex; justify-content:center;align-items:center; color:#090761;"><i class="fas fa-clock"></i></span>
                                                                    </div>
                                                                    <div>
                                                                        <h4 class="text-logo-color_siilc"><?php echo $this->lang->line('cardTwo_time'); ?></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 courseTextHome justify border-bottom pb-5">
                                                                <p class="text-justify"><?php echo $this->lang->line('cardTwo_content'); ?></p>
                                                                <div class="divider-20"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h7><?php echo $this->lang->line('cardTwo_subContent_0'); ?></h7>
                                                            </div>
                                                            <!-- &#x2717; --
                                                            <div class="col-6 text-center">
                                                                <h7 class="gTik boldTik"> &#10003; </h7>
                                                            </div>
                                                        </div>
                                                        <hr class="m-2" />
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h7><?php echo $this->lang->line('cardTwo_subContent_1'); ?></h7>
                                                            </div>
                                                            <div class="col-6 text-center">
                                                                <h7 class="gTik boldTik"> &#10003; </h7>
                                                            </div>
                                                        </div>

                                                        <hr class="m-2" />
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h7><?php echo $this->lang->line('cardTwo_subContent_2'); ?></h7>
                                                            </div>
                                                            <!-- &#x2717; --
                                                            <div class="col-6 text-center">
                                                                <h7 class="gTik boldTik"> &#10003; </h7>
                                                            </div>
                                                        </div>

                                                        <hr class="m-2" />
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h7><?php echo $this->lang->line('cardTwo_subContent_3'); ?></h7>
                                                            </div>
                                                            <!-- &#x2717; --
                                                            <div class="col-6 text-center">
                                                                <h7 class="gTik boldTik">&#10003; </h7>
                                                            </div>
                                                        </div>

                                                        <hr class="m-2" />
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h7><?php echo $this->lang->line('cardTwo_subContent_4'); ?></h7>
                                                            </div>
                                                            <div class="col-6 text-center">
                                                                <h7 class="gTik boldTik">&#10003; </h7>
                                                            </div>
                                                        </div>

                                                        <hr class="m-2" />
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h7><?php echo $this->lang->line('cardTwo_subContent_5'); ?></h7>
                                                            </div>
                                                            <!-- &#x2717; --
                                                            <div class="col-6 text-center">
                                                                <h7 class="gTik boldTik">&#10003; </h7>
                                                            </div>
                                                        </div>

                                                        <hr class="m-2" />
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h7><?php echo $this->lang->line('cardTwo_subContent_6'); ?></h7>
                                                            </div>
                                                            <!-- &#x2717; --
                                                            <div class="col-6 text-center">
                                                                <h7 class="gTik boldTik">&#10003; </h7>
                                                            </div>
                                                        </div>
                                                        <hr class="m-2" />
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h7><?php echo $this->lang->line('cardTwo_subContent_7'); ?></h7>
                                                            </div>
                                                            <!-- &#x2717; --
                                                            <div class="col-6 text-center">
                                                                <h7 class="gTik boldTik">&#10003; </h7>
                                                            </div>
                                                        </div>
                                                        <hr class="m-2" /><br />

                                                        <div class="row m-0 d-flex justify-content-between">
                                                            <form action="<?php echo base_url('web/users'); ?>" method="post">
                                                                <input type="hidden" name="course_id" value="2" />
                                                                <input type="hidden" name="sub_course_id" value="0" />
                                                                <input type="hidden" name="sub_course_name" value="" />
                                                                <input type="hidden" name="course_name" value="Instructor-led Classroom courses" />
                                                                <input type="hidden" name="course_price" value="4500" />
                                                                <div class="form-group">
                                                                    <button class="btn buttonBuy btn-sm" type="submit"><?php echo $this->lang->line('cardTwo_btn1'); ?></button>
                                                                </div>
                                                            </form>
                                                            <a class="buttonBuy" href="<?php echo base_url(); ?>web/classroom_course"><?php echo $this->lang->line('cardTwo_btn2'); ?></a>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div> -->
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- NEW CARDS -->

            <div class="row backgroundImageWhatStudentSay padding-classes parentBox">
                <h1 class="animated fadeInRight text-logo-color_siilc p-5"><?php echo $this->lang->line('homepage_program_features'); ?></h1>
            </div>
            <div class="row justify-content-center align-items-center childBox padding-classes">
                <div class="course_card_box_shadow bg-white m-5 p-5" style="width:250px; height: 150px;">
                    <div><i class="material-icons-outlined" style="font-size: 30px;color:#f1863b;">360</i></div>
                    <p style="color:black;margin-top:20px;"><?php echo $this->lang->line('brokerCert_program_newCard_0'); ?></p>
                </div>
                <div class="course_card_box_shadow bg-white m-5 p-5" style="width:250px; height: 150px;">
                    <div><i class="material-icons-outlined" style="font-size: 30px;color:#f1863b;">school</i></div>
                    <p style="color:black;margin-top:20px;"><?php echo $this->lang->line('brokerCert_program_newCard_1'); ?></p>
                </div>
                <div class="course_card_box_shadow bg-white m-5 p-5" style="width:250px; height: 150px;">
                    <div><i class="material-icons-outlined" style="font-size: 30px;color:#f1863b;">workspace_premium</i></div>
                    <p style="color:black;margin-top:20px;"><?php echo $this->lang->line('brokerCert_program_newCard_2'); ?></p>
                </div>
                <div class="course_card_box_shadow bg-white m-5 p-5" style="width:250px; height: 150px;">
                    <div><i class="material-icons-outlined" style="font-size: 30px;color:#f1863b;">diversity_1</i></div>
                    <p style="color:black;margin-top:20px;"><?php echo $this->lang->line('brokerCert_program_newCard_3'); ?></p>
                </div>
                <div class="course_card_box_shadow bg-white m-5 p-5" style="width:250px; height: 150px;">
                    <div><i class="material-icons-outlined" style="font-size: 30px;color:#f1863b;">theater_comedy</i></div>
                    <p style="color:black;margin-top:20px;"><?php echo $this->lang->line('homepage_Live_Session'); ?></p>
                </div>
                <div class="course_card_box_shadow bg-white m-5 p-5" style="width:250px; height: 150px;">
                    <div><i class="material-icons-outlined" style="font-size: 30px;color:#f1863b;">library_books</i></div>
                    <p style="color:black;margin-top:20px;"><?php echo $this->lang->line('homepage_Study_Material'); ?></p>
                </div>
                <div class="course_card_box_shadow bg-white m-5 p-5" style="width:250px; height: 150px;">
                    <div><i class="material-icons-outlined" style="font-size: 30px;color:#f1863b;">hail</i></div>
                    <p style="color:black;margin-top:20px;"><?php echo $this->lang->line('homepage_Dedicated_Support'); ?></p>
                </div>
                <div class="course_card_box_shadow bg-white m-5 p-5" style="width:250px; height: 150px;">
                    <div><i class="material-icons-outlined" style="font-size: 30px;color:#f1863b;">edit</i></div>
                    <p style="color:black;margin-top:20px;"><?php echo $this->lang->line('homepage_Mock_Test'); ?></p>
                </div>
            </div>
            <div class="row" style="margin-top: 0px;">
                <div class="col-12  mt-5 text-center">
                    <h2 class="animated fadeInRight text-logo-color_siilc" style="font-size: 60;">+</h2>
                </div>
                <div class="col-12 text-center">
                    <h2 class="animated fadeInRight text-logo-color_siilc"><?php echo $this->lang->line('homepage_FREE_BONUS_COURSE_OFFERINGS'); ?></h2>
                </div>
                <div class="col-12 text-center mb-5">
                    <!-- <h4 class=""><?php echo $this->lang->line('homepage_Powered_by'); ?></h4> -->
                    <img src="<?php echo base_url(); ?>/assets/images/IREF2.jpg" alt="Maharera" style="width:340px;" />
                </div>
                <div class="divelement-element mb-9  mx-auto div-widget div-widget-button">
                    <div class="div-widget-container">
                        <a href="<?php echo base_url(); ?>web/new_course">
                            <div class="elementor-button-wrapper text-center">
                                <span style="cursor:pointer;" class="elementor-button-link btn btn-lg btn-primary btn-x-wide lift d-inline-block" role="button">
                                    <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-text"><?php echo $this->lang->line('homepage_To_Know_More'); ?></span>
                                    </span>
                                </span>
                            </div>
                        </a>
                        <div class="m-2 p-5 ">
                            <form action="<?php echo base_url('web/users'); ?>" method="post">
                                <input type="hidden" name="course_id" value="1" />
                                <input type="hidden" name="sub_course_id" value="1" />
                                <input type="hidden" name="sub_course_name" value="MahaRERA Real Estate Agent Certification Program" />
                                <input type="hidden" name="course_name" value="MahaRERA Real Estate Agent Certification Program" />
                                <input type="hidden" name="course_price" value="5000" />
                                <button class="btn buttonBuy btn-sm" type="submit"><?php echo $this->lang->line('homepage_Enroll_Now'); ?></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- -------------------------------------------------------------------- -->
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Launch demo modal
            </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div> -->
            <!-- ---------------------------------------------------------------------------- -->


            <!-- what student sya -->
            <div class="div-sections pt-5 pt-md-11 pb-9 div-sections-boxed div-sections-height-default div-sections-height-default backgroundImageWhatStudentSay">
                <div class="div-container div-column-gap-default">
                    <div class="div-column elementor-col-100 elementor-top-column divelement-element ">
                        <div class="py-0 px-3 px-md-4 px-xl-3 div-widget-wrap divelement-element-populated">
                            <section class="div-sections div-inner-section divelement-element text-center mb-2 div-sections-boxed div-sections-height-default div-sections-height-default">
                                <div class="div-container div-column-gap-default">
                                    <div class="div-column elementor-col-100 elementor-inner-column divelement-element ">
                                        <div class="p-0 div-widget-wrap divelement-element-populated">
                                            <div class="divelement-element text-capitalize mb-0 div-widget div-widget-highlighted-heading">
                                                <div class="div-widget-container">
                                                    <h2 class="h1 mb-1 text-logo-color_siilc">
                                                        <?php echo $this->lang->line('heading2_head'); ?></h2>
                                                </div>
                                            </div>
                                            <div class="divelement-element divelement-element-dffaa26 mb-0 div-widget div-widget-highlighted-heading">
                                                <div class="div-widget-container">
                                                    <p class=" font-size-lg text-capitalize colorWhite mb-0"><?php echo $this->lang->line('heading2_content'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="divelement-element elementor-testimonial--skin-print_cards_slide div-widget div-widget-sk-testimonial-carousel">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-xl-4 py-md-7 py-3">
                                        <!-- Card -->
                                        <div class="card border shadow p-6 lift-md">
                                            <!-- Image -->
                                            <div class="card-zoom">
                                                <div class="media align-items-center">

                                                    <div class="elementor-testimonial__image avatar avatar-custom mr-5">
                                                        <img src="./assets/images/student1.jpeg" alt="Maharera" class="avatar-img rounded-circle">
                                                    </div>

                                                    <div class="media-body">

                                                        <h5 class="elementor-testimonial__name mb-0">
                                                            <?php echo $this->lang->line('heading2_cardOne_name'); ?></h5>

                                                        <span class="elementor-testimonial__title "><?php echo $this->lang->line('heading2_cardOne_learner'); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Footer -->
                                            <div class="elementor-testimonial__text card-footer px-0 pb-0">
                                                <p class="mb-0 text-capitalize text-justify">“ <?php echo $this->lang->line('heading2_cardOne_content'); ?> “</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-4 py-md-7 py-3">
                                        <!-- Card -->
                                        <div class="card border shadow p-6 lift-md">
                                            <!-- Image -->
                                            <div class="card-zoom">
                                                <div class="media align-items-center">

                                                    <div class="elementor-testimonial__image avatar avatar-custom mr-5">
                                                        <img src="./assets/images/student2.jpeg" alt="Maharera" class="avatar-img rounded-circle">
                                                    </div>

                                                    <div class="media-body">

                                                        <h5 class="elementor-testimonial__name mb-0">
                                                            <?php echo $this->lang->line('heading2_cardTwo_name'); ?></h5>

                                                        <span class="elementor-testimonial__title "><?php echo $this->lang->line('heading2_cardTwo_learner'); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Footer -->
                                            <div class="elementor-testimonial__text card-footer px-0 pb-0">
                                                <p class="mb-0 text-capitalize text-justify">“ <?php echo $this->lang->line('heading2_cardTwo_content'); ?> “</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-4 py-md-7 py-3">
                                        <!-- Card -->
                                        <div class="card border shadow p-6 lift-md">
                                            <!-- Image -->
                                            <div class="card-zoom">
                                                <div class="media align-items-center">

                                                    <div class="elementor-testimonial__image avatar avatar-custom mr-5">
                                                        <img src="./assets/images/student3.jpg" alt="Maharera" class="avatar-img rounded-circle">
                                                    </div>

                                                    <div class="media-body">

                                                        <h5 class="elementor-testimonial__name mb-0">
                                                            <?php echo $this->lang->line('heading2_cardThree_name'); ?></h5>
                                                        <span class="elementor-testimonial__title "><?php echo $this->lang->line('heading2_cardThree_learner'); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Footer -->
                                            <div class="elementor-testimonial__text card-footer px-0 pb-0">
                                                <p class="mb-0 text-capitalize text-justify">“ <?php echo $this->lang->line('heading2_cardThree_content'); ?> “</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- <div class="row">
                                    <div class="col-12">
                                    <iframe width="100%" height="515"
                                        src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                    </div>
                                </div> -->


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upcoming Events -->
            <!-- <div class="div-sections  divelement-element bg-white py-5 py-md-11 div-sections-boxed div-sections-height-default div-sections-height-default">
                <div class="div-container div-column-gap-default">
                    <div class="div-column elementor-col-100 elementor-top-column divelement-element">
                        <div class="py-0 div-widget-wrap divelement-element-populated">
                            <section class="div-sections div-inner-section divelement-element mb-4 mb-md-7 div-sections-boxed div-sections-height-default div-sections-height-default">
                                <div class="div-container div-column-gap-default row align-items-end">
                                    <div class="div-column elementor-col-50 elementor-inner-column divelement-element col-md mb-4 mb-md-0 px-0" ata-element_type="column">
                                        <div class="p-0 div-widget-wrap divelement-element-populated">
                                            <div class="divelement-element div-widget div-widget-highlighted-heading">
                                                <div class="div-widget-container">
                                                    <h2 class=" h1 mb-1 text-logo-color_siilc">
                                                        <?php echo $this->lang->line('batch_head'); ?></h2>
                                                </div>
                                            </div>
                                            <div class="divelement-element div-widget div-widget-highlighted-heading">
                                                <div class="div-widget-container">
                                                    <p class=" font-size-lg mb-0 text-capitalize">
                                                        <?php echo $this->lang->line('batch_content'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="divelement-element div-widget div-widget-events">
                                <div class="div-widget-container">
                                    <div class="row row-cols-lg-2">
                                        <div class="col-lg mb-5 mb-md-6">
                                            <!-- Card --
                                            <div class="card border shadow p-2 lift course_card_box_shadowall">
                                                <div class="row no-gutters">
                                                    <!-- Image --
                                                    <div class="col-12 col-md-4 col-xl-4">
                                                        <div class="event__link upcomingBatches d-block m-auto_mobile">
                                                            <div class="batchesText">
                                                                <?php echo $this->lang->line('batch1_date'); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Body --
                                                    <div class="col-12 col-md-8 col-xl-8">
                                                        <div class="card-body py-0 px-md-5 px-3">
                                                            <div class="badge badge-lg badge-blue badge-pill mb-3 mt-1 px-5 py-2">
                                                                <span class="text-white font-size-sm font-weight-normal">
                                                                    <?php echo $this->lang->line('batch1_mode'); ?></span>
                                                            </div>
                                                            <a href="<?php echo base_url(); ?>web/course" class="d-block mb-2">
                                                                <h5 class="line-clamp-2 h-xl-52 mb-1"><?php echo $this->lang->line('batch1_head'); ?></h5>
                                                            </a>
                                                            <ul class="nav mx-n3 d-block d-md-flex">
                                                                <li class="nav-item px-3 mb-3 mb-md-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="mr-2 d-flex text-secondary icon-uxs">
                                                                            <svg class="svg-icon" aria-hidden="true" role="img" focusable="false" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"></path>
                                                                                <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"></path>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="font-size-sm"><?php echo $this->lang->line('batch1_time'); ?>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="nav-item px-3 mb-3 mb-md-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="mr-2 d-flex text-secondary icon-uxs">
                                                                            <svg class="svg-icon" aria-hidden="true" role="img" focusable="false" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M14.9748 3.12964C13.6007 1.14086 11.4229 0 9.0002 0C6.57754 0 4.39972 1.14086 3.02557 3.12964C1.65816 5.10838 1.34243 7.61351 2.17929 9.82677C2.40313 10.4312 2.75894 11.0184 3.23433 11.5687L8.52105 17.7784C8.64062 17.919 8.8158 18 9.0002 18C9.18459 18 9.35978 17.919 9.47934 17.7784L14.7646 11.5703C15.2421 11.0169 15.5974 10.4303 15.8194 9.83078C16.658 7.61351 16.3422 5.10838 14.9748 3.12964ZM14.6408 9.38999C14.4697 9.85257 14.1902 10.3099 13.8107 10.7498C13.8096 10.7509 13.8086 10.7519 13.8077 10.7532L9.0002 16.3999L4.1897 10.7497C3.8104 10.3101 3.53094 9.85282 3.35808 9.38581C2.66599 7.55539 2.92864 5.48413 4.06088 3.84546C5.19668 2.20155 6.9971 1.25873 9.0002 1.25873C11.0033 1.25873 12.8035 2.20152 13.9393 3.84546C15.0718 5.48413 15.3346 7.55539 14.6408 9.38999Z" fill="currentColor"></path>
                                                                                <path d="M9.00019 3.73438C7.0569 3.73438 5.47571 5.31535 5.47571 7.25886C5.47571 9.20237 7.05668 10.7833 9.00019 10.7833C10.9437 10.7833 12.5247 9.20237 12.5247 7.25886C12.5247 5.31556 10.9435 3.73438 9.00019 3.73438ZM9.00019 9.52457C7.75088 9.52457 6.73444 8.50814 6.73444 7.25882C6.73444 6.00951 7.75088 4.99307 9.00019 4.99307C10.2495 4.99307 11.2659 6.00951 11.2659 7.25882C11.2659 8.50814 10.2495 9.52457 9.00019 9.52457Z" fill="currentColor"></path>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="font-size-sm"><?php echo $this->lang->line('batch1_loc'); ?></div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg mb-5 mb-md-6">
                                            <!-- Card --
                                            <div class="card border shadow p-2 lift course_card_box_shadowall">
                                                <div class="row no-gutters">
                                                    <!-- Image --
                                                    <div class="col-12 col-md-4 col-xl-4">
                                                        <div class="event__link upcomingBatches d-block m-auto_mobile">
                                                            <div class="batchesText">
                                                                <?php echo $this->lang->line('batch2_date'); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Body --
                                                    <div class="col-12 col-md-8 col-xl-8">
                                                        <div class="card-body py-0 px-md-5 px-3">
                                                            <div class="badge badge-lg badge-blue badge-pill mb-3 mt-1 px-5 py-2">
                                                                <span class="text-white font-size-sm font-weight-normal">
                                                                    <?php echo $this->lang->line('batch2_mode'); ?></span>
                                                            </div>
                                                            <a href="<?php echo base_url(); ?>web/course" class="d-block mb-2">
                                                                <h5 class="line-clamp-2 h-xl-52 mb-1"><?php echo $this->lang->line('batch2_head'); ?></h5>
                                                            </a>
                                                            <ul class="nav mx-n3 d-block d-md-flex">
                                                                <li class="nav-item px-3 mb-3 mb-md-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="mr-2 d-flex text-secondary icon-uxs">
                                                                            <svg class="svg-icon" aria-hidden="true" role="img" focusable="false" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"></path>
                                                                                <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"></path>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="font-size-sm"><?php echo $this->lang->line('batch2_time'); ?>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="nav-item px-3 mb-3 mb-md-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="mr-2 d-flex text-secondary icon-uxs">
                                                                            <svg class="svg-icon" aria-hidden="true" role="img" focusable="false" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M14.9748 3.12964C13.6007 1.14086 11.4229 0 9.0002 0C6.57754 0 4.39972 1.14086 3.02557 3.12964C1.65816 5.10838 1.34243 7.61351 2.17929 9.82677C2.40313 10.4312 2.75894 11.0184 3.23433 11.5687L8.52105 17.7784C8.64062 17.919 8.8158 18 9.0002 18C9.18459 18 9.35978 17.919 9.47934 17.7784L14.7646 11.5703C15.2421 11.0169 15.5974 10.4303 15.8194 9.83078C16.658 7.61351 16.3422 5.10838 14.9748 3.12964ZM14.6408 9.38999C14.4697 9.85257 14.1902 10.3099 13.8107 10.7498C13.8096 10.7509 13.8086 10.7519 13.8077 10.7532L9.0002 16.3999L4.1897 10.7497C3.8104 10.3101 3.53094 9.85282 3.35808 9.38581C2.66599 7.55539 2.92864 5.48413 4.06088 3.84546C5.19668 2.20155 6.9971 1.25873 9.0002 1.25873C11.0033 1.25873 12.8035 2.20152 13.9393 3.84546C15.0718 5.48413 15.3346 7.55539 14.6408 9.38999Z" fill="currentColor"></path>
                                                                                <path d="M9.00019 3.73438C7.0569 3.73438 5.47571 5.31535 5.47571 7.25886C5.47571 9.20237 7.05668 10.7833 9.00019 10.7833C10.9437 10.7833 12.5247 9.20237 12.5247 7.25886C12.5247 5.31556 10.9435 3.73438 9.00019 3.73438ZM9.00019 9.52457C7.75088 9.52457 6.73444 8.50814 6.73444 7.25882C6.73444 6.00951 7.75088 4.99307 9.00019 4.99307C10.2495 4.99307 11.2659 6.00951 11.2659 7.25882C11.2659 8.50814 10.2495 9.52457 9.00019 9.52457Z" fill="currentColor"></path>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="font-size-sm"><?php echo $this->lang->line('batch2_loc'); ?></div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="col-lg mb-5 mb-md-6">
                                            <-- Card ->
                                            <div class="card border shadow p-2 lift course_card_box_shadowall">
                                                <div class="row no-gutters">
                                                    <-- Image ->
                                                    <div class="col-12 col-md-4 col-xl-4">
                                                        <div class="event__link upcomingBatches d-block m-auto_mobile">
                                                            <div class="batchesText">
                                                                25 May 2022
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <-- Body ->
                                                    <div class="col-12 col-md-8 col-xl-8">
                                                        <div class="card-body py-0 px-md-5 px-3">
                                                            <div
                                                                class="badge badge-lg badge-blue badge-pill mb-3 mt-1 px-5 py-2">
                                                                <span
                                                                    class="text-white font-size-sm font-weight-normal">
                                                                    Offline </span>
                                                            </div>
                                                            <a href="<?php echo base_url(); ?>web/classroom_course"
                                                                class="d-block mb-2">
                                                                <h5 class="line-clamp-2 h-xl-52 mb-1">Discover Law -
                                                                    Get into the best UK law schools</h5>
                                                            </a>
                                                            <ul class="nav mx-n3 d-block d-md-flex">
                                                                <li class="nav-item px-3 mb-3 mb-md-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <div
                                                                            class="mr-2 d-flex text-secondary icon-uxs">
                                                                            <svg class="svg-icon" aria-hidden="true"
                                                                                role="img" focusable="false"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                                                                                    fill="currentColor"></path>
                                                                                <path
                                                                                    d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg></div>
                                                                        <div class="font-size-sm">12:00 am - 11:59
                                                                            pm</div>
                                                                    </div>
                                                                </li>
                                                                <li class="nav-item px-3 mb-3 mb-md-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <div
                                                                            class="mr-2 d-flex text-secondary icon-uxs">
                                                                            <svg class="svg-icon" aria-hidden="true"
                                                                                role="img" focusable="false"
                                                                                width="18" height="18"
                                                                                viewBox="0 0 18 18"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M14.9748 3.12964C13.6007 1.14086 11.4229 0 9.0002 0C6.57754 0 4.39972 1.14086 3.02557 3.12964C1.65816 5.10838 1.34243 7.61351 2.17929 9.82677C2.40313 10.4312 2.75894 11.0184 3.23433 11.5687L8.52105 17.7784C8.64062 17.919 8.8158 18 9.0002 18C9.18459 18 9.35978 17.919 9.47934 17.7784L14.7646 11.5703C15.2421 11.0169 15.5974 10.4303 15.8194 9.83078C16.658 7.61351 16.3422 5.10838 14.9748 3.12964ZM14.6408 9.38999C14.4697 9.85257 14.1902 10.3099 13.8107 10.7498C13.8096 10.7509 13.8086 10.7519 13.8077 10.7532L9.0002 16.3999L4.1897 10.7497C3.8104 10.3101 3.53094 9.85282 3.35808 9.38581C2.66599 7.55539 2.92864 5.48413 4.06088 3.84546C5.19668 2.20155 6.9971 1.25873 9.0002 1.25873C11.0033 1.25873 12.8035 2.20152 13.9393 3.84546C15.0718 5.48413 15.3346 7.55539 14.6408 9.38999Z"
                                                                                    fill="currentColor"></path>
                                                                                <path
                                                                                    d="M9.00019 3.73438C7.0569 3.73438 5.47571 5.31535 5.47571 7.25886C5.47571 9.20237 7.05668 10.7833 9.00019 10.7833C10.9437 10.7833 12.5247 9.20237 12.5247 7.25886C12.5247 5.31556 10.9435 3.73438 9.00019 3.73438ZM9.00019 9.52457C7.75088 9.52457 6.73444 8.50814 6.73444 7.25882C6.73444 6.00951 7.75088 4.99307 9.00019 4.99307C10.2495 4.99307 11.2659 6.00951 11.2659 7.25882C11.2659 8.50814 10.2495 9.52457 9.00019 9.52457Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg></div>
                                                                        <div class="font-size-sm">London, UK</div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg mb-5 mb-md-6">
                                            <!- Card ->
                                            <div class="card border shadow p-2 lift course_card_box_shadowall">
                                                <div class="row no-gutters">
                                                    <!- Image ->
                                                    <div class="col-12 col-md-4 col-xl-4">
                                                        <div class="event__link upcomingBatches d-block m-auto_mobile">
                                                            <div class="batchesText">
                                                                25 May 2022
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!- Body ->
                                                    <div class="col-12 col-md-8 col-xl-8">
                                                        <div class="card-body py-0 px-md-5 px-3">
                                                            <div
                                                                class="badge badge-lg badge-blue badge-pill mb-3 mt-1 px-5 py-2">
                                                                <span
                                                                    class="text-white font-size-sm font-weight-normal">
                                                                    Online </span>
                                                            </div>
                                                            <a href="<?php echo base_url(); ?>web/course"
                                                                class="d-block mb-2">
                                                                <h5 class="line-clamp-2 h-xl-52 mb-1">Undergraduate
                                                                    Open Day – Holloway Campus - 3 July 2020</h5>
                                                            </a>
                                                            <ul class="nav mx-n3 d-block d-md-flex">
                                                                <li class="nav-item px-3 mb-3 mb-md-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <div
                                                                            class="mr-2 d-flex text-secondary icon-uxs">
                                                                            <svg class="svg-icon" aria-hidden="true"
                                                                                role="img" focusable="false"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                                                                                    fill="currentColor"></path>
                                                                                <path
                                                                                    d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg></div>
                                                                        <div class="font-size-sm">8:00 am - 5:00 pm
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="nav-item px-3 mb-3 mb-md-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <div
                                                                            class="mr-2 d-flex text-secondary icon-uxs">
                                                                            <svg class="svg-icon" aria-hidden="true"
                                                                                role="img" focusable="false"
                                                                                width="18" height="18"
                                                                                viewBox="0 0 18 18"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M14.9748 3.12964C13.6007 1.14086 11.4229 0 9.0002 0C6.57754 0 4.39972 1.14086 3.02557 3.12964C1.65816 5.10838 1.34243 7.61351 2.17929 9.82677C2.40313 10.4312 2.75894 11.0184 3.23433 11.5687L8.52105 17.7784C8.64062 17.919 8.8158 18 9.0002 18C9.18459 18 9.35978 17.919 9.47934 17.7784L14.7646 11.5703C15.2421 11.0169 15.5974 10.4303 15.8194 9.83078C16.658 7.61351 16.3422 5.10838 14.9748 3.12964ZM14.6408 9.38999C14.4697 9.85257 14.1902 10.3099 13.8107 10.7498C13.8096 10.7509 13.8086 10.7519 13.8077 10.7532L9.0002 16.3999L4.1897 10.7497C3.8104 10.3101 3.53094 9.85282 3.35808 9.38581C2.66599 7.55539 2.92864 5.48413 4.06088 3.84546C5.19668 2.20155 6.9971 1.25873 9.0002 1.25873C11.0033 1.25873 12.8035 2.20152 13.9393 3.84546C15.0718 5.48413 15.3346 7.55539 14.6408 9.38999Z"
                                                                                    fill="currentColor"></path>
                                                                                <path
                                                                                    d="M9.00019 3.73438C7.0569 3.73438 5.47571 5.31535 5.47571 7.25886C5.47571 9.20237 7.05668 10.7833 9.00019 10.7833C10.9437 10.7833 12.5247 9.20237 12.5247 7.25886C12.5247 5.31556 10.9435 3.73438 9.00019 3.73438ZM9.00019 9.52457C7.75088 9.52457 6.73444 8.50814 6.73444 7.25882C6.73444 6.00951 7.75088 4.99307 9.00019 4.99307C10.2495 4.99307 11.2659 6.00951 11.2659 7.25882C11.2659 8.50814 10.2495 9.52457 9.00019 9.52457Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg></div>
                                                                        <div class="font-size-sm">London, UK</div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg mb-5 mb-md-6">
                                            <!- Card ->
                                            <div class="card border shadow p-2 lift course_card_box_shadowall">
                                                <div class="row no-gutters">
                                                    <!- Image ->
                                                    <div class="col-12 col-md-4 col-xl-4">
                                                        <div class="event__link upcomingBatches d-block m-auto_mobile">
                                                            <div class="batchesText">
                                                                25 May 2022
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!- Body ->
                                                    <div class="col-12 col-md-8 col-xl-8">
                                                        <div class="card-body py-0 px-md-5 px-3">
                                                            <div
                                                                class="badge badge-lg badge-blue badge-pill mb-3 mt-1 px-5 py-2">
                                                                <span
                                                                    class="text-white font-size-sm font-weight-normal">
                                                                    Online </span>
                                                            </div>
                                                            <a href="<?php echo base_url(); ?>web/course"
                                                                class="d-block mb-2">
                                                                <h5 class="line-clamp-2 h-xl-52 mb-1">Kingston
                                                                    College undergraduate Open Events 2020-2021</h5>
                                                            </a>
                                                            <ul class="nav mx-n3 d-block d-md-flex">
                                                                <li class="nav-item px-3 mb-3 mb-md-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <div
                                                                            class="mr-2 d-flex text-secondary icon-uxs">
                                                                            <svg class="svg-icon" aria-hidden="true"
                                                                                role="img" focusable="false"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                                                                                    fill="currentColor"></path>
                                                                                <path
                                                                                    d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg></div>
                                                                        <div class="font-size-sm">8:00 am - 5:00 pm
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="nav-item px-3 mb-3 mb-md-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <div
                                                                            class="mr-2 d-flex text-secondary icon-uxs">
                                                                            <svg class="svg-icon" aria-hidden="true"
                                                                                role="img" focusable="false"
                                                                                width="18" height="18"
                                                                                viewBox="0 0 18 18"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M14.9748 3.12964C13.6007 1.14086 11.4229 0 9.0002 0C6.57754 0 4.39972 1.14086 3.02557 3.12964C1.65816 5.10838 1.34243 7.61351 2.17929 9.82677C2.40313 10.4312 2.75894 11.0184 3.23433 11.5687L8.52105 17.7784C8.64062 17.919 8.8158 18 9.0002 18C9.18459 18 9.35978 17.919 9.47934 17.7784L14.7646 11.5703C15.2421 11.0169 15.5974 10.4303 15.8194 9.83078C16.658 7.61351 16.3422 5.10838 14.9748 3.12964ZM14.6408 9.38999C14.4697 9.85257 14.1902 10.3099 13.8107 10.7498C13.8096 10.7509 13.8086 10.7519 13.8077 10.7532L9.0002 16.3999L4.1897 10.7497C3.8104 10.3101 3.53094 9.85282 3.35808 9.38581C2.66599 7.55539 2.92864 5.48413 4.06088 3.84546C5.19668 2.20155 6.9971 1.25873 9.0002 1.25873C11.0033 1.25873 12.8035 2.20152 13.9393 3.84546C15.0718 5.48413 15.3346 7.55539 14.6408 9.38999Z"
                                                                                    fill="currentColor"></path>
                                                                                <path
                                                                                    d="M9.00019 3.73438C7.0569 3.73438 5.47571 5.31535 5.47571 7.25886C5.47571 9.20237 7.05668 10.7833 9.00019 10.7833C10.9437 10.7833 12.5247 9.20237 12.5247 7.25886C12.5247 5.31556 10.9435 3.73438 9.00019 3.73438ZM9.00019 9.52457C7.75088 9.52457 6.73444 8.50814 6.73444 7.25882C6.73444 6.00951 7.75088 4.99307 9.00019 4.99307C10.2495 4.99307 11.2659 6.00951 11.2659 7.25882C11.2659 8.50814 10.2495 9.52457 9.00019 9.52457Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg></div>
                                                                        <div class="font-size-sm">London, UK</div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg mb-5 mb-md-6">
                                            <!- Card ->
                                            <div class="card border shadow p-2 lift course_card_box_shadowall">
                                                <div class="row no-gutters">
                                                    <!- Image ->
                                                    <div class="col-12 col-md-4 col-xl-4">
                                                        <div class="event__link upcomingBatches d-block m-auto_mobile">
                                                            <div class="batchesText">
                                                                25 May 2022
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!- Body ->
                                                    <div class="col-12 col-md-8 col-xl-8">
                                                        <div class="card-body py-0 px-md-5 px-3">
                                                            <div
                                                                class="badge badge-lg badge-blue badge-pill mb-3 mt-1 px-5 py-2">
                                                                <span
                                                                    class="text-white font-size-sm font-weight-normal">
                                                                    Online </span>
                                                            </div>
                                                            <a href="<?php echo base_url(); ?>web/course"
                                                                class="d-block mb-2">
                                                                <h5 class="line-clamp-2 h-xl-52 mb-1">Lambeth
                                                                    Safeguarding: Understanding Contextual Harm</h5>
                                                            </a>
                                                            <ul class="nav mx-n3 d-block d-md-flex">
                                                                <li class="nav-item px-3 mb-3 mb-md-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <div
                                                                            class="mr-2 d-flex text-secondary icon-uxs">
                                                                            <svg class="svg-icon" aria-hidden="true"
                                                                                role="img" focusable="false"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 16 16"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                                                                                    fill="currentColor"></path>
                                                                                <path
                                                                                    d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg></div>
                                                                        <div class="font-size-sm">8:00 am - 5:00 pm
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="nav-item px-3 mb-3 mb-md-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <div
                                                                            class="mr-2 d-flex text-secondary icon-uxs">
                                                                            <svg class="svg-icon" aria-hidden="true"
                                                                                role="img" focusable="false"
                                                                                width="18" height="18"
                                                                                viewBox="0 0 18 18"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M14.9748 3.12964C13.6007 1.14086 11.4229 0 9.0002 0C6.57754 0 4.39972 1.14086 3.02557 3.12964C1.65816 5.10838 1.34243 7.61351 2.17929 9.82677C2.40313 10.4312 2.75894 11.0184 3.23433 11.5687L8.52105 17.7784C8.64062 17.919 8.8158 18 9.0002 18C9.18459 18 9.35978 17.919 9.47934 17.7784L14.7646 11.5703C15.2421 11.0169 15.5974 10.4303 15.8194 9.83078C16.658 7.61351 16.3422 5.10838 14.9748 3.12964ZM14.6408 9.38999C14.4697 9.85257 14.1902 10.3099 13.8107 10.7498C13.8096 10.7509 13.8086 10.7519 13.8077 10.7532L9.0002 16.3999L4.1897 10.7497C3.8104 10.3101 3.53094 9.85282 3.35808 9.38581C2.66599 7.55539 2.92864 5.48413 4.06088 3.84546C5.19668 2.20155 6.9971 1.25873 9.0002 1.25873C11.0033 1.25873 12.8035 2.20152 13.9393 3.84546C15.0718 5.48413 15.3346 7.55539 14.6408 9.38999Z"
                                                                                    fill="currentColor"></path>
                                                                                <path
                                                                                    d="M9.00019 3.73438C7.0569 3.73438 5.47571 5.31535 5.47571 7.25886C5.47571 9.20237 7.05668 10.7833 9.00019 10.7833C10.9437 10.7833 12.5247 9.20237 12.5247 7.25886C12.5247 5.31556 10.9435 3.73438 9.00019 3.73438ZM9.00019 9.52457C7.75088 9.52457 6.73444 8.50814 6.73444 7.25882C6.73444 6.00951 7.75088 4.99307 9.00019 4.99307C10.2495 4.99307 11.2659 6.00951 11.2659 7.25882C11.2659 8.50814 10.2495 9.52457 9.00019 9.52457Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg></div>
                                                                        <div class="font-size-sm">London, UK</div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Top Rated Instructors -->
            <!-- <div class="div-sections  divelement-element py-5 py-md-11 div-sections-boxed div-sections-height-default div-sections-height-default backgroundImageTopRatedInstructor">
                <div class="div-container div-column-gap-default">
                    <div class="div-column elementor-col-100 elementor-top-column divelement-element">
                        <div class="py-0 px-md-5 px-xl-0 div-widget-wrap divelement-element-populated">
                            <section class="div-sections div-inner-section divelement-element mb-4 mb-md-7 div-sections-boxed div-sections-height-default div-sections-height-default">
                                <div class="div-container div-column-gap-default row align-items-end">
                                    <div class="div-column elementor-col-50 elementor-inner-column divelement-element col-md mb-4 mb-md-0 px-0">
                                        <div class="p-0 div-widget-wrap divelement-element-populated">
                                            <div class="divelement-element div-widget div-widget-highlighted-heading">
                                                <div class="div-widget-container">
                                                    <h2 class=" h1 mb-1 text-logo-color_siilc">
                                                        <?php echo $this->lang->line('instructor_head'); ?></h2>
                                                </div>
                                            </div>
                                            <div class="divelement-element div-widget div-widget-highlighted-heading">
                                                <div class="div-widget-container">
                                                    <p class=" font-size-lg mb-0 text-capitalize colorWhite">
                                                        <?php echo $this->lang->line('instructor_content'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="divelement-element elementor-instructor--skin-print_instructor_v3 div-widget div-widget-sk-instructor-carousel">
                                <div class="div-widget-container">
                                    <div class="instructor-carousel mx-n3 mx-md-n4 flickity-enabled is-draggable">
                                        <div class="row justify-content-center">

                                            <div class="instructor col-8 col-md-4 col-lg-3 text-center py-5 text-md-left px-3 px-md-4 is-selected">
                                                <div class="card border shadow p-2 lift">
                                                    <div class="flip-card">
                                                        <div class="flip-card-inner">
                                                            <div class="flip-card-front">
                                                                <img src="./assets/images/teacher3.jpeg" loading="lazy" alt="Avatar" style="width:270px;height:250px;">
                                                            </div>
                                                            <div class="flip-card-back">
                                                                <!-- <h1>John Doe</h1>  --
                                                                <p><?php echo $this->lang->line('instructor_card1_points_0'); ?><br /><br />
                                                                    <b class="text-left"><?php echo $this->lang->line('instructor_card1_points_1'); ?></b><br />
                                                                    <?php echo $this->lang->line('instructor_card1_points_2'); ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer px-3 pt-4 pb-1 ">
                                                        <a href="#" class="d-block">
                                                            <h5 class="elementor-instructor__name mb-0"><?php echo $this->lang->line('instructor_card1_name'); ?></h5>
                                                        </a>
                                                        <!-- <span class="font-size-d-sm"> BSL.LL.B,LL.M (International law)</span> --
                                                        <span class="font-size-d-sm"><?php echo $this->lang->line('instructor_card1_instructor'); ?></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="instructor col-8 col-md-4 col-lg-3 text-center py-5 text-md-left px-3 px-md-4 is-selected">
                                                <div class="card border shadow p-2 lift">
                                                    <div class="flip-card">
                                                        <div class="flip-card-inner">
                                                            <div class="flip-card-front">
                                                                <img src="./assets/images/teacher2.jpeg" loading="lazy" alt="Avatar" style="width:270px;height:250px;">
                                                            </div>
                                                            <div class="flip-card-back">
                                                                <!-- <h1>John Doe</h1>  --
                                                                <p><?php echo $this->lang->line('instructor_card2_points_0'); ?><br /><br />
                                                                    <b><i>"<?php echo $this->lang->line('instructor_card2_points_1'); ?>"</i></b>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer px-3 pt-4 pb-1 ">
                                                        <a href="#" class="d-block">
                                                            <h5 class="elementor-instructor__name mb-0"><?php echo $this->lang->line('instructor_card2name'); ?></h5>
                                                        </a>
                                                        <span class="font-size-d-sm"><?php echo $this->lang->line('instructor_card2_instructor'); ?></span>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="instructor col-8 col-md-4 col-lg-3 py-5 text-md-left px-3 px-md-4 is-selected">
                                                <div class="card border shadow p-2 lift">
                                                    <div class="flip-card">
                                                        <div class="flip-card-inner">
                                                            <div class="flip-card-front">
                                                                <img src="./assets/images/teacher1.png" loading="lazy" alt="Avatar" style="width:270px;height:250px;">
                                                            </div>
                                                            <div class="flip-card-back">
                                                                <p class="text-left">
                                                                <h6 class="mb-0"><?php echo $this->lang->line('instructor_card3_points_0'); ?></h6>
                                                                <b><?php echo $this->lang->line('instructor_card3_points_1'); ?></b><br />
                                                                <ul>
                                                                    <li><?php echo $this->lang->line('instructor_card3_points_2'); ?></li>
                                                                    <li><?php echo $this->lang->line('instructor_card3_points_3'); ?></li>
                                                                    <li><?php echo $this->lang->line('instructor_card3_points_4'); ?></li>
                                                                </ul>
                                                                <?php echo $this->lang->line('instructor_card3_points_5'); ?>
                                                                <br />
                                                                <b><?php echo $this->lang->line('instructor_card3_points_6'); ?></b><br /><br />
                                                                <?php echo $this->lang->line('instructor_card3_points_7'); ?><br /><br />
                                                                <?php echo $this->lang->line('instructor_card3_points_8'); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer px-3 pt-4 pb-1 ">
                                                        <a href="#" class="d-block">
                                                            <h5 class="elementor-instructor__name mb-0"><?php echo $this->lang->line('instructor_card3_name'); ?></h5>
                                                        </a>
                                                        <!-- <span class="font-size-d-sm">BSL.LL.B</span><br /> --
                                                        <span class="font-size-d-sm"><?php echo $this->lang->line('instructor_card3_instructor'); ?></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="instructor col-8 col-md-4 col-lg-3 text-center py-5 text-md-left px-3 px-md-4 is-selected">
                                                <div class="card border shadow p-2 lift">
                                                    <div class="flip-card">
                                                        <div class="flip-card-inner">
                                                            <div class="flip-card-front">
                                                                <img src="./assets/images/teacher4.jpg" loading="lazy" alt="Avatar" style="width:270px;height:250px;">
                                                            </div>
                                                            <div class="flip-card-back">
                                                                <p>
                                                                    <b><?php echo $this->lang->line('instructor_card4_points_0'); ?></b><br />
                                                                    <?php echo $this->lang->line('instructor_card4_points_1'); ?><br />
                                                                    <?php echo $this->lang->line('instructor_card4_points_2'); ?>
                                                                <ul>
                                                                    <li><?php echo $this->lang->line('instructor_card4_points_3'); ?></li>
                                                                    <li><?php echo $this->lang->line('instructor_card4_points_4'); ?></li>
                                                                    <li><?php echo $this->lang->line('instructor_card4_points_5'); ?></li>
                                                                    <li><?php echo $this->lang->line('instructor_card4_points_6'); ?></li>
                                                                </ul>
                                                                <br />
                                                                <b><?php echo $this->lang->line('instructor_card4_points_7'); ?></b> <br /><?php echo $this->lang->line('instructor_card4_points_8'); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer px-3 pt-4 pb-1 ">
                                                        <a href="#" class="d-block">
                                                            <h5 class="elementor-instructor__name mb-0"><?php echo $this->lang->line('instructor_card4_name'); ?></h5>
                                                        </a>
                                                        <span class="font-size-d-sm"><?php echo $this->lang->line('instructor_card4_instructor'); ?></span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!--  -->
            <div class="div-sections  divelement-element py-5 py-md-11 div-sections-boxed div-sections-height-default div-sections-height-default backgroundImageTopRatedInstructor">
                <div class="div-container div-column-gap-default">
                    <div class="div-column elementor-col-100 elementor-top-column divelement-element">
                        <div class="py-0 px-md-5 px-xl-0 div-widget-wrap divelement-element-populated">
                            <div class="div-sections div-inner-section divelement-element mb-4 mb-md-7 div-sections-boxed div-sections-height-default div-sections-height-default">
                                <div class="div-container div-column-gap-default row align-items-end">
                                    <div class="div-column elementor-col-50 elementor-inner-column divelement-element col-md mb-4 mb-md-0 px-0">
                                        <div class="p-0 div-widget-wrap divelement-element-populated">
                                            <div class="divelement-element div-widget div-widget-highlighted-heading">
                                                <div class="div-widget-container">
                                                    <h2 class=" h1 mb-1 text-logo-color_siilc"><?php echo $this->lang->line('homepage_Our_Experts'); ?></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="divelement-element elementor-instructor--skin-print_instructor_v3 div-widget div-widget-sk-instructor-carousel">
                        <div class="div-widget-container">
                            <div class="instructor-carousel mx-n3 mx-md-n4 flickity-enabled is-draggable">

                                <div class="row justify-content-around">

                                    <!-- <div class="instructor col-8 col-md-4 col-lg-3 text-center py-5 text-md-left px-3 px-md-4 is-selected">
                                            <div class="card border shadow p-2 lift">
                                                <div class="flip-card">
                                                    <div class="flip-card-inner">
                                                        <div class="flip-card-front">
                                                            <img src="<?php echo base_url(); ?>/assets//images//teacher2.jpeg" loading="lazy" alt="Avatar" style="width:270px;height:250px;">
                                                        </div>
                                                        <div class="flip-card-back">
                                                            <!-- <h1>John Doe</h1>  -
                                                            <p>Visiting faculty in Deccan education societies Shri. Navamal firodia law college 2017 - 2019<br><br>
                                                                <b class="text-left">Practice areas:-</b><br>
                                                                RERA, civil, criminal motor accidents, consumer, NCLT, family law and other legal aspects                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer px-3 pt-4 pb-1 ">
                                                    <a href="#" class="d-block">
                                                        <h5 class="elementor-instructor__name mb-0">Sujata Ajinkya Bhave</h5>
                                                    </a>
                                                    <!-- <span class="font-size-d-sm"> BSL.LL.B,LL.M (International law)</span> -
                                                    <span class="font-size-d-sm">Instructor</span>
                                                </div>
                                            </div>
                                        </div> -->

                            <!-- <div class="instructor col-8 col-md-4 col-lg-3 text-center py-5 text-md-left px-3 px-md-4 is-selected">
                                            <div class="card border shadow p-2 lift">
                                                <div class="flip-card">
                                                    <div class="flip-card-inner">
                                                        <div class="flip-card-front">
                                                            <img src="<?php echo base_url(); ?>/assets//images//teacher3.jpeg" loading="lazy" alt="Avatar" style="width:270px;height:250px;">
                                                        </div>
                                                        <div class="flip-card-back">
                                                            <!-- <h1>John Doe</h1>  -
                                                            <p>Was Visiting faculty at ILS and DES NAVALMAL FERODIA LAW COLLEGE PRATICE IN REAL ESTATE LAWS <br><br>
                                                                <b><i>"Teaching is passion with learning experience"</i></b>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer px-3 pt-4 pb-1 ">
                                                    <a href="#" class="d-block">
                                                        <h5 class="elementor-instructor__name mb-0">Surabhi Lalitkumar Mehta</h5>
                                                    </a>
                                                    <span class="font-size-d-sm">Instructor</span>
                                                </div>
                                            </div>
                                        </div> -->

                            <!-- <div class="instructor col-8 col-md-4 col-lg-3 py-5 text-md-left px-3 px-md-4 is-selected">
                                            <div class="card border shadow p-2 lift">
                                                <div class="flip-card">
                                                    <div class="flip-card-inner">
                                                        <div class="flip-card-front">
                                                            <img src="<?php echo base_url(); ?>/assets//images//teacher3.jpeg" loading="lazy" alt="Avatar" style="width:270px;height:250px;">
                                                        </div>
                                                        <div class="flip-card-back">
                                                            <p class="text-left">
                                                            </p><h6 class="mb-0">16 years of experience in Real Estate.</h6>
                                                            <b>Worked in legal and laisoning department:-</b><br>
                                                            <ul>
                                                                <li>Poonawalla Group of companies for 3 years.</li>
                                                                <li>Sobha Limited for 7 yrs.</li>
                                                                <li>Bramha Corps Limited for 1 yr.</li>
                                                            </ul>
                                                            Proprietor of Glit Edge, RERA consultancy from June 2017.                                                            <br>
                                                            <b>Practice areas</b><br><br>
                                                            RERA project registration, Rera agent registration, Drafting of all documents as per Rera norms, Legal Conveyancing, Laisoning for all sanctions required in real estate projects, RERA Litigations.<br><br>
                                                            500+ satisfied clients in Maharashtra and Goa is the award for all services provided in real estate sector till date.<p></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer px-3 pt-4 pb-1 ">
                                                    <a href="#" class="d-block">
                                                        <h5 class="elementor-instructor__name mb-0">Adv. Amruta Salunke </h5>
                                                    </a>
                                                    <!-- <span class="font-size-d-sm">BSL.LL.B</span><br /> --
                                                    <span class="font-size-d-sm">Instructor</span>
                                                </div>
                                            </div>
                                        </div> -->

                            <!-- <div class="instructor col-8 col-md-4 col-lg-3 text-center py-5 text-md-left px-3 px-md-4 is-selected">
                                            <div class="card border shadow p-2 lift">
                                                <div class="flip-card">
                                                    <div class="flip-card-inner">
                                                        <div class="flip-card-front">
                                                            <img src="<?php echo base_url(); ?>/assets//images//teacher2.jpeg" loading="lazy" alt="Avatar" style="width:270px;height:250px;">
                                                        </div>
                                                        <div class="flip-card-back">
                                                            <p>
                                                                <b>Educational Qualification - B.com, LLB, PGCSMM (Xlri, Jamshedpur), Diploma in Corporate Law ( ILS Law College)</b><br>
                                                                20- Years’ Experience in Real Estate Industry<br>
                                                                Major Companies worked at different Leadership Roles                                                            </p><ul>
                                                                <li>Mahindra Life spaces Developers Limited</li>
                                                                <li>IL&amp;FS PMS Ltd.</li>
                                                                <li>Kasturi Housing Pvt. Ltd.</li>
                                                                <li>Ecostar International Holdings LLC</li>
                                                            </ul>
                                                            <br>
                                                            <b>Area of Practice –</b> <br>RERA, Legal Conveyancing &amp; Drafting, Property, Property due Diligence &amp; Title Search, Structuring Financial Transactions<p></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer px-3 pt-4 pb-1 ">
                                                    <a href="#" class="d-block">
                                                        <h5 class="elementor-instructor__name mb-0">Adv. Makarand Paradkar</h5>
                                                    </a>
                                                    <span class="font-size-d-sm">Instructor</span>
                                                </div>
                                            </div>
                                        </div> --
                                    <!-- <div> --
                                    <div id="expert1" style="position:relative;display:flex; cursor: pointer;  width:250px; height:300px;" class="m-3 shadow left">

                                        <img src="<?php echo base_url() ?>/assets//images//img_avatar.png" />

                                        <div class="cardOverlay" style="padding:10px;overflow-y:hidden;">
                                            <p style="color:white;font-size:18px;font-weight:500;">Abhay Kumar</p>
                                            <p style="color:#61abea;"><i>Co-Founder & Program Director</i></p>
                                            <p>Abhay kumar is B.E., MBA from Symbiosis (SIMS) and Master in Labor Law. As an entrepreneur, he has 15 pus years of experience in Real Estate Sector.</p>
                                        </div>
                                    </div>
                                    <div id="expert1" style="position:relative;display:flex; cursor: pointer;  width:250px; height:300px;" class="m-3 shadow left">

                                        <img src="<?php echo base_url() ?>/assets//images//img_avatar.png" />

                                        <div class="cardOverlay" style="padding:10px;overflow-y:hidden;">
                                            <p style="color:white;font-size:18px;font-weight:500;">Mrunalini Sane</p>
                                            <p style="color:#61abea;"><i>(B. Arch, M. Arch)</i></p>
                                            <p>Mrunalini Sane is B.Arch., M.Arch., she has more than 20+ years experience in education and corporate industry.</p>
                                        </div>
                                    </div>
                                    <div id="expert1" style="position:relative;display:flex; cursor: pointer;  width:250px; height:300px;" class="m-3 shadow left">

                                        <img src="<?php echo base_url() ?>/assets//images//img_avatar.png" />

                                        <div class="cardOverlay" style="padding:10px;overflow-y:hidden;">
                                            <p style="color:white;font-size:18px;font-weight:500;">Ashlesha Paranjape</p>
                                            <p style="color:#61abea;"><i>(B.Com, CA, CMA)</i></p>
                                            <p>Ashlesha Paranjape is a Chartered Accountant (CA) having 20+ experience in banking & Finance, Real Estate and Mortgage.</p>
                                        </div>
                                    </div>
                                    <div id="expert1" style="position:relative;display:flex; cursor: pointer;  width:250px; height:300px;" class="m-3 shadow left">

                                        <img src="<?php echo base_url() ?>/assets//images//img_avatar.png" />

                                        <div class="cardOverlay" style="padding:10px;overflow-y:hidden;">
                                            <p style="color:white;font-size:18px;font-weight:500;">Chetan More</p>
                                            <p style="color:#61abea;"><i>(BE Civil, M.E., PGP ACM (NICMAR))</i></p>
                                            <p>Chetan More is B.E. Civil He is assistant Professor at D.Y. Patil School of Architecture, Pune.</p>
                                        </div>
                                    </div>
                                    <!-- </div> --
                                </div>

                            </div>
                        </div>
                    </div> -->
                            <marquee width="100%" height="400px" direction="left" scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();" style="white-space: normal;">

                                <!-- *********************************************************************** -->
                                <div class="divelement-element elementor-instructor--skin-print_instructor_v3 div-widget div-widget-sk-instructor-carousel">
                                    <div class="div-widget-container">
                                        <div class="instructor-carousel mx-n3 mx-md-n4 flickity-enabled is-draggable">
                                            <div class="row justify-content-center" style="flex-wrap: nowrap;">


                                                <div class="instructor col-8 col-md-4 col-lg-3 text-center py-5 text-md-left px-3 px-md-4 is-selected">
                                                    <div class="card border shadow p-2 lift">
                                                        <div class="flip-card">
                                                            <div class="flip-card-inner">
                                                                <div class="flip-card-front">
                                                                    <img src="<?php echo base_url() ?>/assets/images/teacher3.jpeg" loading="lazy" alt="Maharera" style="width:270px;height:250px;">
                                                                </div>
                                                                <div class="flip-card-back">
                                                                    <!-- <h1>John Doe</h1>  -->
                                                                    <p><?php echo $this->lang->line('instructor_card1_points_0'); ?><br /><br />
                                                                        <b class="text-left"><?php echo $this->lang->line('instructor_card1_points_1'); ?></b><br />
                                                                        <?php echo $this->lang->line('instructor_card1_points_2'); ?>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer px-3 pt-4 pb-1 ">
                                                            <a href="#" class="d-block">
                                                                <h5 class="elementor-instructor__name mb-0"><?php echo $this->lang->line('instructor_card1_name'); ?></h5>
                                                            </a>
                                                            <!-- <span class="font-size-d-sm"> BSL.LL.B,LL.M (International law)</span> -->
                                                            <span class="font-size-d-sm"><?php echo $this->lang->line('instructor_card1_instructor'); ?></span>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="instructor col-8 col-md-4 col-lg-3 text-center py-5 text-md-left px-3 px-md-4 is-selected">
                                                    <div class="card border shadow p-2 lift">
                                                        <div class="flip-card">
                                                            <div class="flip-card-inner">
                                                                <div class="flip-card-front">
                                                                    <img src="<?php echo base_url() ?>/assets/images/teacher2.jpeg" loading="lazy" alt="Maharera" style="width:270px;height:250px;">
                                                                </div>
                                                                <div class="flip-card-back">
                                                                    <!-- <h1>John Doe</h1>  -->
                                                                    <p><?php echo $this->lang->line('instructor_card2_points_0'); ?><br /><br />
                                                                        <b><i>"<?php echo $this->lang->line('instructor_card2_points_1'); ?>"</i></b>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer px-3 pt-4 pb-1 ">
                                                            <a href="#" class="d-block">
                                                                <h5 class="elementor-instructor__name mb-0"><?php echo $this->lang->line('instructor_card2name'); ?></h5>
                                                            </a>
                                                            <span class="font-size-d-sm"><?php echo $this->lang->line('instructor_card2_instructor'); ?></span>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="instructor col-8 col-md-4 col-lg-3 py-5 text-md-left px-3 px-md-4 is-selected">
                                                    <div class="card border shadow p-2 lift">
                                                        <div class="flip-card">
                                                            <div class="flip-card-inner">
                                                                <div class="flip-card-front">
                                                                    <img src="<?php echo base_url() ?>/assets/images/teacher1.png" loading="lazy" alt="Maharera" style="width:270px;height:250px;">
                                                                </div>
                                                                <div class="flip-card-back">
                                                                    <p class="text-left">
                                                                    <h6 class="mb-0"><?php echo $this->lang->line('instructor_card3_points_0'); ?></h6>
                                                                    <b><?php echo $this->lang->line('instructor_card3_points_1'); ?></b><br />
                                                                    <ul>
                                                                        <li><?php echo $this->lang->line('instructor_card3_points_2'); ?></li>
                                                                        <li><?php echo $this->lang->line('instructor_card3_points_3'); ?></li>
                                                                        <li><?php echo $this->lang->line('instructor_card3_points_4'); ?></li>
                                                                    </ul>
                                                                    <?php echo $this->lang->line('instructor_card3_points_5'); ?>
                                                                    <br />
                                                                    <b><?php echo $this->lang->line('instructor_card3_points_6'); ?></b><br /><br />
                                                                    <?php echo $this->lang->line('instructor_card3_points_7'); ?><br /><br />
                                                                    <?php echo $this->lang->line('instructor_card3_points_8'); ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer px-3 pt-4 pb-1 ">
                                                            <a href="#" class="d-block">
                                                                <h5 class="elementor-instructor__name mb-0"><?php echo $this->lang->line('instructor_card3_name'); ?></h5>
                                                            </a>
                                                            <!-- <span class="font-size-d-sm">BSL.LL.B</span><br /> -->
                                                            <span class="font-size-d-sm"><?php echo $this->lang->line('instructor_card3_instructor'); ?></span>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="instructor col-8 col-md-4 col-lg-3 text-center py-5 text-md-left px-3 px-md-4 is-selected">
                                                    <div class="card border shadow p-2 lift">
                                                        <div class="flip-card">
                                                            <div class="flip-card-inner">
                                                                <div class="flip-card-front">
                                                                    <img src="<?php echo base_url() ?>/assets/images/teacher4.jpg" loading="lazy" alt="Maharera" style="width:270px;height:250px;">
                                                                </div>
                                                                <div class="flip-card-back">
                                                                    <p>
                                                                        <b><?php echo $this->lang->line('instructor_card4_points_0'); ?></b><br />
                                                                        <?php echo $this->lang->line('instructor_card4_points_1'); ?><br />
                                                                        <?php echo $this->lang->line('instructor_card4_points_2'); ?>
                                                                    <ul>
                                                                        <li><?php echo $this->lang->line('instructor_card4_points_3'); ?></li>
                                                                        <li><?php echo $this->lang->line('instructor_card4_points_4'); ?></li>
                                                                        <li><?php echo $this->lang->line('instructor_card4_points_5'); ?></li>
                                                                        <li><?php echo $this->lang->line('instructor_card4_points_6'); ?></li>
                                                                    </ul>
                                                                    <br />
                                                                    <b><?php echo $this->lang->line('instructor_card4_points_7'); ?></b> <br /><?php echo $this->lang->line('instructor_card4_points_8'); ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer px-3 pt-4 pb-1 ">
                                                            <a href="#" class="d-block">
                                                                <h5 class="elementor-instructor__name mb-0"><?php echo $this->lang->line('instructor_card4_name'); ?></h5>
                                                            </a>
                                                            <span class="font-size-d-sm"><?php echo $this->lang->line('instructor_card4_instructor'); ?></span>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="instructor col-8 col-md-4 col-lg-3 text-center py-5 text-md-left px-3 px-md-4 is-selected">
                                                    <div class="card border shadow p-2 lift">
                                                        <div class="flip-card">
                                                            <div class="flip-card-inner">
                                                                <div class="flip-card-front">
                                                                    <img src="<?php echo base_url() ?>/assets/images/experts_1.jpg  " loading="lazy" alt="Maharera" style="width:270px;height:250px;">
                                                                </div>
                                                                <div class="flip-card-back">
                                                                    <p>
                                                                        <b> <?php echo $this->lang->line('homepage_Educational_Qualification'); ?></b><br /><?php echo $this->lang->line('homepage_co_founder'); ?>
                                                                    <p>
                                                                        <?php echo $this->lang->line('homepage_co_founder_name'); ?>
                                                                    </p>
                                                                    <!-- <ul>
                                                            <li><?php echo $this->lang->line('instructor_card4_points_3'); ?></li>
                                                            <li><?php echo $this->lang->line('instructor_card4_points_4'); ?></li>
                                                            <li><?php echo $this->lang->line('instructor_card4_points_5'); ?></li>
                                                            <li><?php echo $this->lang->line('instructor_card4_points_6'); ?></li>
                                                        </ul> -->
                                                                    <!-- <br /> -->
                                                                    <!-- <b><?php echo $this->lang->line('instructor_card4_points_7'); ?></b> <br /><?php echo $this->lang->line('instructor_card4_points_8'); ?></p> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer px-3 pt-4 pb-1 ">
                                                            <a href="#" class="d-block">
                                                                <h5 class="elementor-instructor__name mb-0"><?php echo $this->lang->line('homepage_co_founder_names'); ?></h5>
                                                            </a>
                                                            <span class="font-size-d-sm"><?php echo $this->lang->line('instructor_card4_instructor'); ?></span>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="instructor col-8 col-md-4 col-lg-3 text-center py-5 text-md-left px-3 px-md-4 is-selected">
                                                    <div class="card border shadow p-2 lift">
                                                        <div class="flip-card">
                                                            <div class="flip-card-inner">
                                                                <div class="flip-card-front">
                                                                    <img src="<?php echo base_url() ?>/assets/images/experts_2.png" loading="lazy" alt="Maharera" style="width:270px;height:250px;">
                                                                </div>
                                                                <div class="flip-card-back">
                                                                    <p>
                                                                        <b><?php echo $this->lang->line('homepage_Educational_Qualifications'); ?></b><br />
                                                                    <p>
                                                                        <?php echo $this->lang->line('homepage_chetan_more'); ?>
                                                                    </p>
                                                                    <!-- <ul>
                                                            <li><?php echo $this->lang->line('instructor_card4_points_3'); ?></li>
                                                            <li><?php echo $this->lang->line('instructor_card4_points_4'); ?></li>
                                                            <li><?php echo $this->lang->line('instructor_card4_points_5'); ?></li>
                                                            <li><?php echo $this->lang->line('instructor_card4_points_6'); ?></li>
                                                        </ul> -->
                                                                    <!-- <br /> -->
                                                                    <!-- <b><?php echo $this->lang->line('instructor_card4_points_7'); ?></b> <br /><?php echo $this->lang->line('instructor_card4_points_8'); ?></p> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer px-3 pt-4 pb-1 ">
                                                            <a href="#" class="d-block">
                                                                <h5 class="elementor-instructor__name mb-0"><?php echo $this->lang->line('homepage_co_founder_names1'); ?></h5>
                                                            </a>
                                                            <span class="font-size-d-sm"><?php echo $this->lang->line('instructor_card4_instructor'); ?></span>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="instructor col-8 col-md-4 col-lg-3 text-center py-5 text-md-left px-3 px-md-4 is-selected">
                                                    <div class="card border shadow p-2 lift">
                                                        <div class="flip-card">
                                                            <div class="flip-card-inner">
                                                                <div class="flip-card-front">
                                                                    <img src="<?php echo base_url() ?>/assets/images/experts_3.png" loading="lazy" alt="Maharera" style="width:270px;height:250px;">
                                                                </div>
                                                                <div class="flip-card-back">
                                                                    <p>
                                                                        <b><?php echo $this->lang->line('homepage_co_founder_qualification'); ?></b><br />
                                                                    <p>
                                                                        <?php echo $this->lang->line('homepage_co_founder_name_education'); ?>
                                                                    </p>
                                                                    <!-- <ul>
                                                            <li><?php echo $this->lang->line('instructor_card4_points_3'); ?></li>
                                                            <li><?php echo $this->lang->line('instructor_card4_points_4'); ?></li>
                                                            <li><?php echo $this->lang->line('instructor_card4_points_5'); ?></li>
                                                            <li><?php echo $this->lang->line('instructor_card4_points_6'); ?></li>
                                                        </ul> -->
                                                                    <!-- <br /> -->
                                                                    <!-- <b><?php echo $this->lang->line('instructor_card4_points_7'); ?></b> <br /><?php echo $this->lang->line('instructor_card4_points_8'); ?></p> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer px-3 pt-4 pb-1 ">
                                                            <a href="#" class="d-block">
                                                                <h5 class="elementor-instructor__name mb-0"><?php echo $this->lang->line('homepage_co_founder_names2'); ?></h5>
                                                            </a>
                                                            <span class="font-size-d-sm"><?php echo $this->lang->line('instructor_card4_instructor'); ?></span>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="instructor col-8 col-md-4 col-lg-3 text-center py-5 text-md-left px-3 px-md-4 is-selected">
                                                    <div class="card border shadow p-2 lift">
                                                        <div class="flip-card">
                                                            <div class="flip-card-inner">
                                                                <div class="flip-card-front">
                                                                    <img src="<?php echo base_url() ?>/assets/images/experts_4.jpg" loading="lazy" alt="Maharera" style="width:270px;height:250px;">
                                                                </div>
                                                                <div class="flip-card-back">
                                                                    <p>
                                                                        <b><?php echo $this->lang->line('homepage_co_founder_name_education2'); ?></b><br />
                                                                    <p>
                                                                        <?php echo $this->lang->line('homepage_co_founder_name_education3'); ?>
                                                                    </p>
                                                                    <!-- <ul>
                                                            <li><?php echo $this->lang->line('instructor_card4_points_3'); ?></li>
                                                            <li><?php echo $this->lang->line('instructor_card4_points_4'); ?></li>
                                                            <li><?php echo $this->lang->line('instructor_card4_points_5'); ?></li>
                                                            <li><?php echo $this->lang->line('instructor_card4_points_6'); ?></li>
                                                        </ul> -->
                                                                    <!-- <br /> -->
                                                                    <!-- <b><?php echo $this->lang->line('instructor_card4_points_7'); ?></b> <br /><?php echo $this->lang->line('instructor_card4_points_8'); ?></p> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer px-3 pt-4 pb-1 ">
                                                            <a href="#" class="d-block">
                                                                <h5 class="elementor-instructor__name mb-0"><?php echo $this->lang->line('homepage_co_founder_names4'); ?></h5>
                                                            </a>
                                                            <span class="font-size-d-sm"><?php echo $this->lang->line('instructor_card4_instructor'); ?></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php /*
                                                <div class="instructor col-8 col-md-4 col-lg-3 text-center py-5 text-md-left px-3 px-md-4 is-selected">
                                                    <div class="card border shadow p-2 lift">
                                                        <div class="flip-card">
                                                            <div class="flip-card-inner">
                                                                <div class="flip-card-front">
                                                                    <img src="<?php echo base_url() ?>/assets/images/experts_5.png" loading="lazy" alt="Maharera" style="width:270px;height:250px;">
                                                                </div>
                                                                <div class="flip-card-back">
                                                                    <p>
                                                                        <b><?php echo $this->lang->line('homepage_co_founder_education4'); ?></b><br />
                                                                    <p>
                                                                        <?php echo $this->lang->line('homepage_co_founder_description4'); ?>
                                                                    </p>
                                                                    <p>
                                                                        <?php echo $this->lang->line('homepage_co_founder_desc4'); ?>
                                                                    </p>
                                                                    <p> <?php echo $this->lang->line('homepage_co_founder_decs5'); ?></p>
                                                                    <p>
                                                                        <?php echo $this->lang->line('homepage_co_founder_decs6'); ?></p>
                                                                    <p><?php echo $this->lang->line('homepage_co_founder_decs7'); ?></p>
                                                                    <!-- <ul>
                                                            <li><?php echo $this->lang->line('instructor_card4_points_3'); ?></li>
                                                            <li><?php echo $this->lang->line('instructor_card4_points_4'); ?></li>
                                                            <li><?php echo $this->lang->line('instructor_card4_points_5'); ?></li>
                                                            <li><?php echo $this->lang->line('instructor_card4_points_6'); ?></li>
                                                        </ul> -->
                                                                    <!-- <br /> -->
                                                                    <!-- <b><?php echo $this->lang->line('instructor_card4_points_7'); ?></b> <br /><?php echo $this->lang->line('instructor_card4_points_8'); ?></p> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer px-3 pt-4 pb-1 ">
                                                            <a href="#" class="d-block">
                                                                <h5 class="elementor-instructor__name mb-0"><?php echo $this->lang->line('homepage_co_founder_names6'); ?></h5>
                                                            </a>
                                                            <span class="font-size-d-sm"><?php echo $this->lang->line('instructor_card4_instructor'); ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                */?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </marquee>
                        </div>

                    </div>
                </div>
            </div>


            <!-- Gallery Starts -->
             <div class="div-sections  divelement-element py-5 py-md-11 div-sections-boxed div-sections-height-default div-sections-height-default ">
                <div class="div-container div-column-gap-default">
                    <div class="div-column elementor-col-100 elementor-top-column divelement-element">
                        <div class="py-0 px-md-5 px-xl-0 div-widget-wrap divelement-element-populated">
                            <div class="div-sections div-inner-section divelement-element mb-4 mb-md-7 div-sections-boxed div-sections-height-default div-sections-height-default">
                                <div class="div-container div-column-gap-default row align-items-end">
                                    <div class="div-column elementor-col-50 elementor-inner-column divelement-element col-md mb-4 mb-md-0 px-0">
                                        <div class="p-0 div-widget-wrap divelement-element-populated">
                                            <div class="divelement-element div-widget div-widget-highlighted-heading">
                                                <div class="div-widget-container">
                                                    <h2 class=" h1 mb-1 text-logo-color_siilc" style="text-align:center;"><?php echo $this->lang->line('homepage_Gallery'); ?></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!--  Video slider -->
                     
                            <!-- slider -->
                            
                            <div class="row" style="margin-top:50px;"></div>
                            
                            <!-- Image slider-->
                            
                                <div id="carouselExampleIndicators" class="carousel slide center" data-ride="carousel" style="margin-top:50px;">
                                  <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    
                                  </ol>
                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                      
                                      <video class="img-fluid" controls>
                                          <source src="<?php echo base_url();?>/assets/images/gallery/video/Testimonial_1_review.mp4"
                                          type="video/mp4" />
                                      </video>
                                    </div>
                                    <div class="carousel-item">
                                     <video class="img-fluid" controls>
                                          <source src="<?php echo base_url();?>/assets/images/gallery/video/Testimonial_2_review.mp4"
                                          type="video/mp4" />
                                      </video>
                                    </div>
                                    <div class="carousel-item">
                                      <video class="img-fluid" controls>
                                          <source src="<?php echo base_url();?>/assets/images/gallery/video/Testimonial_3_review.mp4"
                                          type="video/mp4" />
                                      </video>
                                    </div>
                                   
                                   </div>
                                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </div>
                            
                            
                            <!-- Image slider-->
                            
                    
                            <!--<marquee width="100%" height="400px" direction="left" scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();" style="white-space: normal;">-->

                                <!-- *********************************************************************** -->
                            <!--    <div class="divelement-element elementor-instructor--skin-print_instructor_v3 div-widget div-widget-sk-instructor-carousel">-->
                            <!--        <div class="div-widget-container">-->
                            <!--            <div class="instructor-carousel mx-n3 mx-md-n4 flickity-enabled is-draggable">-->
                            <!--                <div class="row justify-content-center" style="flex-wrap: nowrap;">-->



                            <!--                </div>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</marquee>-->
                        </div>

                    </div>
                </div>
            </div>
            <!-- Gallery Ends -->

            
            <!-- Get personal learning recommendations -->
            <div class="div-sections  divelement-element div-sections-full_width py-6 py-md-11 border-top div-sections-height-default div-sections-height-default backgroundImage">
                <div class="div-container div-column-gap-default">
                    <div class="div-column elementor-col-100 elementor-top-column divelement-element text-center py-xl-4 px-0" data-id="fdac1e2">
                        <div class="p-0  div-widget-wrap divelement-element-populated">
                            <section class="div-sections div-inner-section divelement-element div-sections-boxed div-sections-height-default div-sections-height-default">
                                <div class="div-container div-column-gap-default">
                                    <div class="div-column elementor-col-100 elementor-inner-column divelement-element  col-xl-7 mx-auto">
                                        <div class="p-0 div-widget-wrap divelement-element-populated">
                                            <div class="divelement-element  text-capitalize mb-0 div-widget div-widget-highlighted-heading">
                                                <div class="div-widget-container">
                                                    <h2 class=" h1 text-capitalize text-logo-color_siilc">
                                                        <?php echo $this->lang->line('heading3_head'); ?></h2>
                                                </div>
                                            </div>
                                            <div class="divelement-element mb-0 div-widget div-widget-highlighted-heading">
                                                <div class="div-widget-container">
                                                    <div class=" font-size-lg mb-md-6 mb-4">
                                                        <?php echo $this->lang->line('heading3_content'); ?></div>
                                                </div>
                                            </div>
                                            <div class="divelement-element  mx-auto div-widget div-widget-button">
                                                <div class="div-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <span data-toggle="modal" data-target="#accountModal" style="cursor:pointer;" class="elementor-button-link btn btn-lg btn-primary btn-x-wide lift d-inline-block" role="button">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-text"><?php echo $this->lang->line('heading3_contactUsBtn'); ?></span>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>