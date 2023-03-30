<script>
    function openNavTerms() {
        document.getElementById("myNavTerms").style.height = "100%";

    }

    function closeNavTerms() {
        document.getElementById("myNavTerms").style.height = "0%";
    }

    function openNavAuthLetter() {
        document.getElementById("myNavAuthLetter").style.height = "100%";
    }

    function closeNavAuthLetter() {
        document.getElementById("myNavAuthLetter").style.height = "0%";
    }
</script>

<div class="bannerImagesOnline" style="margin-top: 90px;">
    <div class="container">
        <h1 style="text-align: start;"><?php echo $this->lang->line('new_cource_MahaRERA'); ?> <span class="heading-span"><?php echo $this->lang->line('new_cource_Real'); ?> <br> <?php echo $this->lang->line('new_cource_Estate_Agent'); ?> </span><br> <?php echo $this->lang->line('new_cource_Certification'); ?></h1>
        <form action="<?php echo base_url('web/users'); ?>" method="post">
            <input type="hidden" name="course_id" value="1" />
            <input type="hidden" name="sub_course_id" value="1" />
            <input type="hidden" name="sub_course_name" value="MahaRERA Real Estate Agent Certification Program" />
            <input type="hidden" name="course_name" value="MahaRERA Real Estate Agent Certification Program" />
            <input type="hidden" name="course_price" value="5000" />
            <button class="btn buttonBuy btn-sm" type="submit"><?php echo $this->lang->line('homepage_Enroll_Now'); ?></button>
            <button class="btn buttonBuy btn-sm mt-2" type="button" onclick="openNavAuthLetter();"><?php echo $this->lang->line('new_cource_Auth_Letter'); ?></button>
        </form>

        <div class="container d-none d-md-block">
            <div class="row">
                <div class="col-md-2 d-flex justify-content-center align-items-center coursecard cardBatchColor me-0 mr-md-1" style="height:100px; background-color:'white';">
                    <img src="<?php echo base_url(); ?>/assets/new_course (1).png" class="mr-4" style="width:30px; height:30px;" alt="Maharera" />
                    <div style="width:70%;overflow:auto">
                        <h6 style="margin-bottom: 0px;"><?php echo $this->lang->line('new_cource_Total_hours'); ?></h6>
                        <p style="font-size:16px; margin-bottom:0px;"><?php echo $this->lang->line('new_cource_Twenty_hours'); ?></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center align-items-center coursecard cardBatchColor me-0 mr-md-1" style="height:100px; background-color:'white';">
                    <img src="<?php echo base_url(); ?>/assets/new_course (3).png" class="mr-4" style="width:30px; height:30px;" alt="Maharera" />
                    <div style="width:70%;overflow:auto">
                        <h6 style="margin-bottom: 0px;"><?php echo $this->lang->line('new_cource_Language'); ?></h6>
                        <p style="font-size:16px; margin-bottom:0px;"><?php echo $this->lang->line('new_cource_Languages'); ?></p>
                    </div>
                </div>
                <div class="col-md-2 d-flex justify-content-center align-items-center coursecard cardBatchColor" style="height:100px; background-color:'white';">
                    <i class="material-icons-outlined text-logo-color_siilc" class="mr-4" style="font-size: 40px;">currency_rupee</i>
                    <div style="width:70%;overflow:auto">
                        <h6 style="margin-bottom: 0px;"><?php echo $this->lang->line('new_cource_Course_Fees'); ?></h6>
                        <p style="font-size:16px;"><?php echo $this->lang->line('new_cource_Course_Fees_rupees'); ?><span style="font-size:11px;"><?php echo $this->lang->line('new_cource_GST'); ?></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container d-block d-md-none">
    <div class="row">
        <div class="col-md-2 d-flex justify-content-center align-items-center coursecard cardBatchColor me-0 mr-md-1" style="height:100px; background-color:'white';">
            <img src="<?php echo base_url(); ?>/assets/new_course (1).png" class="mr-4 mr-md-0" style="width:30px; height:30px;" alt="Maharera" />
            <div style="width:70%;overflow:auto">
                <h6 style="margin-bottom: 0px;"><?php echo $this->lang->line('new_cource_Total_hours_1'); ?></h6>
                <p style="font-size:16px; margin-bottom:0px;"><?php echo $this->lang->line('new_cource_twenty_hr'); ?></p>
            </div>
        </div>
        <div class="col-md-3 d-flex justify-content-center align-items-center cardBatchColor me-0 mr-md-1" style="height:100px; background-color:'white';">
            <img src="<?php echo base_url(); ?>/assets/new_course (3).png" class="mr-4 mr-md-0" style="width:30px; height:30px;" alt="Maharera" />
            <div style="width:70%;overflow:auto">
                <h6 style="margin-bottom: 0px;"><?php echo $this->lang->line('new_cource_lang'); ?></h6>
                <p style="font-size:16px; margin-bottom:0px;"><?php echo $this->lang->line('new_cource_langs'); ?></p>
            </div>
        </div>
        <div class="col-md-2 d-flex justify-content-center align-items-center cardBatchColor" style="height:100px; background-color:'white';">
            <i class="material-icons-outlined text-logo-color_siilc" class="mr-4 mr-md-0" style="font-size: 40px;">currency_rupee</i>
            <div style="width:70%;overflow:auto">
                <h6 style="margin-bottom: 0px;"><?php echo $this->lang->line('new_cource_Course_fees_11'); ?></h6>
                <p style="font-size:16px;"><?php echo $this->lang->line('new_cource_Course_thousand'); ?><span style="font-size:11px;"><?php echo $this->lang->line('new_cource_Course_gst'); ?></span></p>
            </div>
        </div>
    </div>
</div>

<div id="container">
    <div class="row padding-classes">
        <div class="col-12 mx-auto mb-5 card ">
            <h2 class="mt-5 mb-5 animated fadeInRight text-logo-color_siilc"><?php echo $this->lang->line('brokerCert_program_aboutHead'); ?></h2>
            <div class="line-dec-left mb-5"></div>
            <p class="text-justify"><?php echo $this->lang->line('brokerCert_program_aboutContent'); ?></p>

        </div>

    </div>

    <!-- Old Data -->

    <!-- <div class="row padding16">
        <div class="col-12 col-md-10 col-lg-10 mx-auto mt-5 mb-5 backgroundImage" style="padding-left:10px;">
        <div class="marginTop40"></div>
        <h2 class="animated fadeInRight text-logo-color_siilc">WHAT YOU WILL LEARN</h2>
        <div class="line-dec-left"></div>
        <div class="marginTop40"></div>
            <div class="row mt-5">
                <div class="col-12 col-md-6 col-lg-6">
                    <ul style="list-style-type:none;">
                        <li class=" d-flex paddingTopBottomLeftRight10">
                        <div style="width:60px;height:70px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#f1863b" class="bi bi-check-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                            </svg>
                        </div> 
                        <div class="d-block">Pre-recorded video sessions tailored to your professional needs</div>
                    </li>
                    <li class=" d-flex paddingTopBottomLeftRight10">
                        <div style="width:60px;height:70px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#f1863b" class="bi bi-check-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                            </svg>
                        </div> 
                        <div class="d-block">Wide range of Trainings available at a single location with instant access</div></li>
                        <li class=" d-flex paddingTopBottomLeftRight10">
                        <div style="width:60px;height:70px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#f1863b" class="bi bi-check-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                            </svg>
                        </div> 
                        <div class="d-block"> Excellent Training curriculum designed by global experts after thorough research</div>
                    </li>
                        <li class="paddingTopBottomLeftRight10">
                        <span style="width:60px;height:70px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#f1863b" class="bi bi-check-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                            </svg>
                        </span>Latest Trainings added regularly to enhance your learning experience online</li>
                    </ul>
                </div>

                <div class="col-12 col-md-6 col-lg-6">
                    <ul style="list-style-type:none;">
                        <li class=" d-flex paddingTopBottomLeftRight10">
                            <div style="width:60px;height:70px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#f1863b" class="bi bi-check-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                                </svg>
                            </div> 
                            <div class="d-block">Better peer connectivity with new students enrolling based on Trainings you choose</div>
                        </li>
                        <li class=" d-flex paddingTopBottomLeftRight10">
                            <div style="width:60px;height:70px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#f1863b" class="bi bi-check-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                                </svg>
                            </div> 
                            <div class="d-block">Multiple educational resources available readily complementing your ongoing learning activity</div>
                        </li>
                        <li class=" d-flex paddingTopBottomLeftRight10">
                            <div style="width:60px;height:70px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#f1863b" class="bi bi-check-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                                </svg>
                            </div> 
                            <div class="d-block">Certified Trainings authenticated by the experienced and seasoned instructors</div>
                        </li>
                        <li class=" d-flex paddingTopBottomLeftRight10">
                            <div style="width:60px;height:70px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#f1863b" class="bi bi-check-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                                </svg>
                            </div> 
                            <div class="d-block">In-depth Training curriculum dealing with a variety of advanced topics for more knowledge</div>
                        </li>
                        <!- <li class="paddingTopBottomLeftRight10"><span style="width:100px;height:100px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#090761" class="bi bi-check-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                            </svg>
                        </span>Lease Agreement & Types of Leases</li> ->
                    </ul>

                </div>

            </div>
        </div>
    </div> -->


    <!-- Program Features -->
    <!-- <div class="backgroundColorForSection padding-classes" style="padding-bottom:10px;">
        <div class="padding-classes">
            <h1 class="animated fadeInRight text-logo-color_siilc"><?php echo $this->lang->line('brokerCert_program_programFeatureHead'); ?></h1>
            <div class="container">
                <div class="row">
                    <!-- <div class="col"> --
                    <div class="col">
                        <ul>
                            <li>
                                <h3 class="colorWhite"><?php echo $this->lang->line('brokerCert_program_programFeatureContent_0'); ?></h3>
                            </li>
                            <li>
                                <h3 class="colorWhite"><?php echo $this->lang->line('brokerCert_program_programFeatureContent_1'); ?></h3>
                            </li>
                            <li>
                                <h3 class="colorWhite"><?php echo $this->lang->line('brokerCert_program_programFeatureContent_2'); ?></h3>
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <li>
                                <h3 class="colorWhite"><?php echo $this->lang->line('brokerCert_program_programFeatureContent_3'); ?></h3>
                            </li>
                            <li>
                                <h3 class="colorWhite"><?php echo $this->lang->line('brokerCert_program_programFeatureContent_4'); ?></h3>
                            </li>
                            <li>
                                <h3 class="colorWhite"><?php echo $this->lang->line('brokerCert_program_programFeatureContent_5'); ?></h3>
                            </li>
                        </ul>
                    </div>
                    <!-- </div> --
                </div>
            </div>
        </div>
    </div> -->

    <!-- NEW CARDS -->
    <div class="row backgroundImageWhatStudentSay padding-classes parentBox">
        <h1 class="animated fadeInRight text-logo-color_siilc p-5"><?php echo $this->lang->line('new_cource_Course_Program_Features'); ?></h1>
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
            <p style="color:black;margin-top:20px;"><?php echo $this->lang->line('new_cource_Live_Session'); ?></p>
        </div>
        <div class="course_card_box_shadow bg-white m-5 p-5" style="width:250px; height: 150px;">
            <div><i class="material-icons-outlined" style="font-size: 30px;color:#f1863b;">library_books</i></div>
            <p style="color:black;margin-top:20px;"><?php echo $this->lang->line('new_cource_Study_Material'); ?></p>
        </div>
        <div class="course_card_box_shadow bg-white m-5 p-5" style="width:250px; height: 150px;">
            <div><i class="material-icons-outlined" style="font-size: 30px;color:#f1863b;">hail</i></div>
            <p style="color:black;margin-top:20px;"><?php echo $this->lang->line('new_cource_Dedicated_Support'); ?></p>
        </div>
        <div class="course_card_box_shadow bg-white m-5 p-5" style="width:250px; height: 150px;">
            <div><i class="material-icons-outlined" style="font-size: 30px;color:#f1863b;">edit</i></div>
            <p style="color:black;margin-top:20px;"><?php echo $this->lang->line('new_cource_Mock_Test'); ?></p>
        </div>
    </div>

    <!-- -------------------------------------------------------Sea Waves Cards START-------------------------------------------------------------------- -->

    <!-- <div class="row padding-classes ">
        <div class="col-12 col-md-10 col-lg-10  mt-10 mb-5 ">
            <h1 class="text-logo-color_siilc">Free Course Offer</h1>
            <!-- <div class="line-dec-left"></div> --
        </div>
    </div> -->

    <div class="row " style="margin-top: 0px;">
        <div class="col-12  mt-5 text-center">
            <h2 class="animated fadeInRight text-logo-color_siilc" style="font-size: 60;">+</h2>
        </div>
    </div>
    <section class="sec">
        <div class="row " style="margin-bottom: 20px;">
            <div class="col-12  mt-5 text-center">
                <h2 class="animated fadeInRight text-logo-color_siilc"><?php echo $this->lang->line('new_cource_FREE_BONUS_COURSE_OFFERINGS'); ?></h2>
            </div>
        </div>
        <div class='pricing pricing-palden'>
            <div class='pricing-item'>
                <div class='pricing-deco'>
                    <svg class='pricing-deco-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
                        <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                        <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                        <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;	H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                        <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
                    </svg>
                    <div class='pricing-price'><?php echo $this->lang->line('new_cource_Academic_Support'); ?></div>
                    <!-- <h3 class='pricing-title'>Freelance</h3> -->
                </div>
                <div style="position: absolute;bottom: 60%;right:40%;">
                    <i class="material-icons-outlined" style="font-size: 50px;color:#f1863b;">handshake</i>
                </div>
                <ul class='pricing-feature-list'>
                    <li class='pricing-feature'><?php echo $this->lang->line('new_cource_asupport'); ?></li>
                    <li class='pricing-feature'><?php echo $this->lang->line('new_cource_Digital_marketing_workshop'); ?><span style="color:red;">*</span></li>
                    <li class='pricing-feature'><?php echo $this->lang->line('new_cource_Vastu_workshop'); ?><span style="color:red;">*</span></li>
                </ul>
                <!-- <button class='pricing-action'>Choose plan</button> -->
                <div style="position: absolute;bottom: 0px;right: 200px;font-size: 12px;color: cornflowerblue;cursor: pointer;" onclick="openNavTerms();">
                    <a class=""><span style="color:red;">*</span><?php echo $this->lang->line('new_cource_Terms_and_conditions'); ?></a>
                </div>

            </div>
            <div class='pricing-item pricing__item--featured'>
                <div class='pricing-deco'>
                    <svg class='pricing-deco-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
                        <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                        <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                        <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;	H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                        <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
                    </svg>
                    <div class='pricing-price'><?php echo $this->lang->line('new_cource_bs1'); ?></div>
                    <!-- <h3 class='pricing-title'>Business</h3> -->
                </div>
                <div style="position: absolute;bottom: 60%;right:40%;">
                    <i class="material-icons-outlined" style="font-size: 50px;color:#f1863b;">work</i>
                </div>
                <ul class='pricing-feature-list'>
                    <li class='pricing-feature'><?php echo $this->lang->line('new_cource_des11'); ?></li>
                    <li class='pricing-feature'><?php echo $this->lang->line('new_cource_des12'); ?><br /> <?php echo $this->lang->line('new_cource_des13'); ?></li>
                    <li class='pricing-feature'><?php echo $this->lang->line('new_cource_des14'); ?><span style="color:red;">*</span></li>
                    <li class='pricing-feature'><?php echo $this->lang->line('new_cource_des15'); ?><span style="color:red;">*</span></li>
                </ul>
                <!-- <button class='pricing-action'>Choose plan</button> -->
                <div style="position: absolute;bottom: 0px;right: 200px;font-size: 12px;color: cornflowerblue;cursor: pointer;" onclick="openNavTerms();">
                    <a class=""><span style="color:red;">*</span> <?php echo $this->lang->line('new_cource_des16'); ?></a>
                </div>

            </div>
            <div class='pricing-item'>
                <div class='pricing-deco'>
                    <svg class='pricing-deco-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
                        <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                        <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                        <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;	H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                        <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
                    </svg>
                    <div class='pricing-price'><?php echo $this->lang->line('new_cource_Professional_Support'); ?></div>
                    <!-- <h3 class='pricing-title'>Enterprise</h3> -->
                </div>
                <div style="position: absolute;bottom: 60%;right:40%;">
                    <i class="material-icons-outlined" style="font-size: 50px;color:#f1863b;">groups</i>
                </div>
                <ul class='pricing-feature-list'>
                    <li class='pricing-feature'><?php echo $this->lang->line('new_cource_Monthly_newsletter'); ?></li>
                    <li class='pricing-feature'><?php echo $this->lang->line('new_cource_whatapp_update'); ?></li>
                    <li class='pricing-feature'><?php echo $this->lang->line('new_cource_Builders_connect'); ?><span style="color:red;">*</span></li>
                </ul>
                <!-- <button class='pricing-action'>Choose plan</button> -->

                <div style="position: absolute;bottom: 0px;right: 200px;font-size: 12px;color: cornflowerblue;cursor: pointer;" onclick="openNavTerms();">
                    <a class=""><span style="color:red;">*</span> <?php echo $this->lang->line('new_cource_des21'); ?></a>
                </div>
            </div>
        </div>
        <div class="row " style="margin-top: 0px;">
            <div class="col-12 text-center mb-5">
                <!-- <h4 class=""><?php echo $this->lang->line('new_cource_des22'); ?></h4> -->
                <img src="<?php echo base_url(); ?>/assets/images/IREF2.jpg" alt="Maharera" style="width:340px;" />
                <div class="m-2 p-5 ">
                    <form action="<?php echo base_url('web/users'); ?>" method="post" style="display: flex; justify-content: center;">
                        <input type="hidden" name="course_id" value="1" />
                        <input type="hidden" name="sub_course_id" value="1" />
                        <input type="hidden" name="sub_course_name" value="MahaRERA Real Estate Agent Certification Program" />
                        <input type="hidden" name="course_name" value="MahaRERA Real Estate Agent Certification Program" />
                        <input type="hidden" name="course_price" value="5000" />
                        <button class="btn buttonBuy btn-sm" type="submit"><?php echo $this->lang->line('new_cource_des23'); ?></button>
                    </form>
                    <!-- <button class="btn buttonBuy btn-sm" type="submit">Enroll Now</button> -->

                </div>
            </div>

        </div>

    </section>


    <!-- -------------------------------------------------------Sea Waves Cards End-------------------------------------------------------------------- -->


    <!-- WHAT YOU WILL LEARN -->
    <div class="row padding16">
        <div class="col-12 col-md-10 col-lg-10 mx-auto mt-5 mb-5 backgroundImage" style="padding-left:10px;">
            <div class="marginTop40"></div>
            <h2 class="animated fadeInRight text-logo-color_siilc"><?php echo $this->lang->line('onlineTraining_whatYouWillLearn_head'); ?></h2>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <ul style="list-style-type:none;">
                        <li class="paddingTopBottomLeftRight10">
                            <span style="width:100px;height:100px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#f1863b" class="bi bi-check-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                </svg>
                            </span><?php echo $this->lang->line('onlineTraining_whatYouWillLearn_content_0'); ?>
                        </li>
                        <li class="paddingTopBottomLeftRight10">
                            <span style="width:100px;height:100px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#f1863b" class="bi bi-check-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                </svg>
                            </span><?php echo $this->lang->line('onlineTraining_whatYouWillLearn_content_1'); ?>
                        </li>
                        <li class="paddingTopBottomLeftRight10">
                            <span style="width:100px;height:100px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#f1863b" class="bi bi-check-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                </svg>
                            </span><?php echo $this->lang->line('onlineTraining_whatYouWillLearn_content_2'); ?>
                        </li>
                        <li class="paddingTopBottomLeftRight10">
                            <span style="width:100px;height:100px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#f1863b" class="bi bi-check-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                </svg>
                            </span><?php echo $this->lang->line('onlineTraining_whatYouWillLearn_content_3'); ?>
                        </li>
                        <li class="paddingTopBottomLeftRight10">
                            <span style="width:100px;height:100px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#f1863b" class="bi bi-check-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                </svg>
                            </span><?php echo $this->lang->line('onlineTraining_whatYouWillLearn_content_4'); ?>
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-md-6 col-lg-6">
                    <ul style="list-style-type:none;">
                        <li class="paddingTopBottomLeftRight10"><span style="width:100px;height:100px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#f1863b" class="bi bi-check-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                </svg>
                            </span><?php echo $this->lang->line('onlineTraining_whatYouWillLearn_content_5'); ?></li>
                        <!-- <li class="paddingTopBottomLeftRight10"><span style="width:100px;height:100px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#f1863b" class="bi bi-check-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                </svg>
                            </span><?php echo $this->lang->line('onlineTraining_whatYouWillLearn_content_6'); ?></li> -->
                        <li class="paddingTopBottomLeftRight10"><span style="width:100px;height:100px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#f1863b" class="bi bi-check-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                </svg>
                            </span><?php echo $this->lang->line('onlineTraining_whatYouWillLearn_content_7'); ?></li>
                        <li class="paddingTopBottomLeftRight10"><span style="width:100px;height:100px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#f1863b" class="bi bi-check-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                </svg>
                            </span><?php echo $this->lang->line('onlineTraining_whatYouWillLearn_content_8'); ?></li>
                        <li class="paddingTopBottomLeftRight10"><span style="width:100px;height:100px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#f1863b" class="bi bi-check-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                </svg>
                            </span><?php echo $this->lang->line('onlineTraining_whatYouWillLearn_content_9'); ?></li>
                        <!-- <li class="paddingTopBottomLeftRight10"><span style="width:100px;height:100px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#090761" class="bi bi-check-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                            </svg>
                        </span>Lease Agreement & Types of Leases</li> -->
                    </ul>
                </div>

                <!-- CHART BACKGROUND IMAGE -->
                <!-- <div class="chartImg">
                </div> -->

            </div>
        </div>
    </div>

    <!-- Modal     -->
    <div id="myNavAuthLetter" class="overlay" style="display:flex;justify-content: center; align-items: center;">
        <!-- <a href="" class="closebtn">&times;</a> -->
        <div class="container bg-light ">
            <div class="card text-center">
                <div class="card-header">
                    <h5 class="card-title"><?php echo $this->lang->line('authLetter_Head'); ?></h5>
                </div>
                <div class="card-body p-1 text-left" style="overflow: auto;">
                    <div style="height:500px;position: relative;display:flex;overflow:auto;justify-content: center;align-items: center; margin:10px; ">
                        <div style="height:120%;width:100%;">
                        <img src = "<?php echo base_url();?>/assets/images/AuthLetter.jpg" style="width:100%;margin-top:50px;">
                        </div>
                    </div>
                    <a href="javascript:closeNavAuthLetter();" class="btn buttonBuy btn-lg" style="background-color: black;font-size: 20px;">Close</a>
                </div>
            </div>
        </div>

    </div>
    <!-- Modal -->
    <div id="myNavTerms" class="overlay" style="display:flex;justify-content: center; align-items: center;">
        <!-- <a href="" class="closebtn">&times;</a> -->
        <div class="container bg-light ">
            <div class="card text-center">
                <div class="card-header">
                    <h5 class="card-title"><?php echo $this->lang->line('termsNConditions_Head'); ?></h5>
                </div>
                <div class="card-body p-1 text-left">
                    <ol style="text-align: justify;height:400px; margin:10px; margin-bottom:50px; overflow:auto;">
                        <li><?php echo $this->lang->line('termsNConditions_01'); ?></li>
                        <li><?php echo $this->lang->line('termsNConditions_02'); ?></li>
                        <li><?php echo $this->lang->line('termsNConditions_03'); ?></li>
                        <li><?php echo $this->lang->line('termsNConditions_04'); ?></li>
                        <li><?php echo $this->lang->line('termsNConditions_05'); ?></li>
                        <li><?php echo $this->lang->line('termsNConditions_06'); ?></li>
                        <li><?php echo $this->lang->line('termsNConditions_07'); ?></li>
                        <li><?php echo $this->lang->line('termsNConditions_08'); ?></li>
                        <li><?php echo $this->lang->line('termsNConditions_09'); ?></li>
                    </ol>
                    <a href="javascript:closeNavTerms();" class="btn buttonBuy btn-lg" style="background-color: black;font-size: 20px;">Close</a>
                </div>
            </div>
        </div>

    </div>


    <!-- PAIN POINTS -->
    <div class="row " style="margin-top: 0px;">
        <div class="col-12  mt-5 text-center">
            <h2 class="mt-5 "><?php echo $this->lang->line('brokerCert_program_painPointsHead'); ?></h2>
        </div>
    </div>

    <!-- <div class="row padding16 mb-5 "> -->
    <!-- <div class="col-12 col-md-10 col-lg-10 mx-auto mb-5" style="display:flex;justify-content:center;padding-left:10px; width:100%; height:150px;"> -->
    <!-- <h3>Pain points we are addressing</h3> -->


    <!-- PAIN POINTS CARD -->
    <div class="row justify-content-center mx-auto mb-5 align-items-center">

        <div class="course_card_box_shadow bg-white m-5 p-5" style="display:flex;flex-direction:column;width:250px; height: 250px;">
            <div><i class="material-icons-outlined" style="font-size: 30px;color:#f1863b;">brightness_7</i></div>
            <p class="text-justify" style="font-size:15px;margin-top:20px;"><?php echo $this->lang->line('brokerCert_program_painPoints_0'); ?></p>
        </div>

        <div class="course_card_box_shadow bg-white m-5 p-5" style="display:flex;flex-direction:column;width:250px; height: 250px;">
            <div><i class="material-icons-outlined" style="font-size: 30px;color:#f1863b;">brightness_7</i></div>
            <p class="text-justify" style="font-size:15px;margin-top:20px;"><?php echo $this->lang->line('brokerCert_program_painPoints_1'); ?></p>
        </div>

        <div class="course_card_box_shadow bg-white m-5 p-5" style="display:flex;flex-direction:column;width:250px; height: 250px;">
            <div><i class="material-icons-outlined" style="font-size: 30px;color:#f1863b;">brightness_7</i></div>
            <p class="text-justify" style="font-size:15px;margin-top:20px;"><?php echo $this->lang->line('brokerCert_program_painPoints_2'); ?></p>
        </div>

        <div class="course_card_box_shadow bg-white m-5 p-5" style="display:flex;flex-direction:column;width:250px; height: 250px;">
            <div><i class="material-icons-outlined" style="font-size: 30px;color:#f1863b;">brightness_7</i></div>
            <p class="text-justify" style="font-size:15px;margin-top:20px;"><?php echo $this->lang->line('brokerCert_program_painPoints_3'); ?></p>
        </div>

    </div>


    <!-- </div> -->
    <!-- </div> -->

    <!-- ---------------------------------------------------------------------------------- -->
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
                                            <h2 class=" h1 mb-1 text-logo-color_siilc"><?php echo $this->lang->line('new_cource_des24'); ?></h2>
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
                                                            <img src="<?php echo base_url(); ?>/assets//images//teacher2.jpeg" loading="lazy" alt="Maharera" style="width:270px;height:250px;">
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
                                                            <img src="<?php echo base_url(); ?>/assets//images//teacher3.jpeg" loading="lazy" alt="Maharera" style="width:270px;height:250px;">
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
                                                            <img src="<?php echo base_url(); ?>/assets//images//teacher3.jpeg" loading="lazy" alt="Maharera" style="width:270px;height:250px;">
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
                                                            <img src="<?php echo base_url(); ?>/assets//images//teacher2.jpeg" loading="lazy" alt="Maharera" style="width:270px;height:250px;">
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
                                                                <b><?php echo $this->lang->line('new_cource_des26'); ?></b><br /><?php echo $this->lang->line('new_cource_des27'); ?>

                                                            <p><?php echo $this->lang->line('new_cource_des28'); ?></p>
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
                                                        <h5 class="elementor-instructor__name mb-0"><?php echo $this->lang->line('new_cource_des29'); ?></h5>
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
                                                                <b><?php echo $this->lang->line('new_cource_des30'); ?></b><br />
                                                                <?php echo $this->lang->line('new_cource_des31'); ?>
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
                                                        <h5 class="elementor-instructor__name mb-0"><?php echo $this->lang->line('new_cource_des32'); ?></h5>
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
                                                                <b><?php echo $this->lang->line('new_cource_des33'); ?></b><br />
                                                                <?php echo $this->lang->line('new_cource_des34'); ?>
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
                                                        <h5 class="elementor-instructor__name mb-0"><?php echo $this->lang->line('new_cource_des35'); ?></h5>
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
                                                                <b><?php echo $this->lang->line('new_cource_des36'); ?></b><br />
                                                            <p>
                                                                <?php echo $this->lang->line('new_cource_des37'); ?>
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
                                                        <h5 class="elementor-instructor__name mb-0"><?php echo $this->lang->line('new_cource_des38'); ?></h5>
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
                                                            <img src="<?php echo base_url() ?>/assets/images/experts_5.png" loading="lazy" alt="Maharera" style="width:270px;height:250px;">
                                                        </div>
                                                        <div class="flip-card-back">
                                                            <p><b><?php echo $this->lang->line('new_cource_des39'); ?></b><br />
                                                            <p><?php echo $this->lang->line('new_cource_des40'); ?></p>
                                                            <p><?php echo $this->lang->line('new_cource_des41'); ?></p>
                                                            <p><?php echo $this->lang->line('new_cource_des42'); ?></p>
                                                            <p><?php echo $this->lang->line('new_cource_des43'); ?></p>
                                                            <p><?php echo $this->lang->line('new_cource_des44'); ?></p>
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
                                                        <h5 class="elementor-instructor__name mb-0"><?php echo $this->lang->line('new_cource_des45'); ?></h5>
                                                    </a>
                                                    <span class="font-size-d-sm"><?php echo $this->lang->line('instructor_card4_instructor'); ?></span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </marquee>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- ------------------------------------------------------------------------------------->




<!-- <div class="row padding-classes mt-5 mb-5">
        <div class="col-12  mt-5 mb-5 text-center">
            <h1 class="mt-5 mb-5 text-logo-color_siilc">Broker Certification Program</h1>
            <div class="line-dec-center"></div>
        </div>
    </div> -->

<!-- Card 1 -->
<!-- <div class="div-widget-container padding-classes">
        <div class="row justify-content-center">

            <div class="col-12 col-md-6 col-xl-5 pb-md-7 pb-4 is-selected">
                <div class="card border shadow p-2 sk-fade coursecard course_card_box_shadow position-relative">
                    <!-- Horizontal Vertical Strip --
                    <!-- Outermost Box --
                    <div style="height:30px;
                                z-index:3;
                                position:absolute;
                                -ms-transform: rotate(320deg); /* IE 9 */
                                transform: rotate(320deg);
                                display: flex;
                                align-items: center;
                                top: 20;
                                left: -25;">

                        <!-- Three Divisions  --
                        <!-- First Division --
                        <div style="display:inline-block;margin: 0px;">
                            <div style="display:block;
                                        width: 0;
                                        height: 0;
                                        border-top: 0px solid transparent;
                                        border-right: 20px solid #F6A607;
                                        border-bottom: 12px solid transparent;
                                        margin-bottom:2px;">
                            </div>
                            <div style="display:block;
                                        width: 0;
                                        height: 0;
                                        border-top: 12px solid transparent;
                                        border-right: 20px solid #F6A607;
                                        border-bottom: 0px solid transparent;">
                            </div>
                        </div>
                        <!-- Second Division --
                        <div style="width: fit-content;
                                    display:inline-block;
                                    background-color:#F6A607;
                                    color:white;
                                    padding-left:10px;
                                    padding-right:10px;
                                    margin: 0px;"> <?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card1_tag'); ?>
                        </div>
                        <!-- Third Division --
                        <div style="display:inline-block;
                                    margin: 0px;">
                            <div style="display:block;
                                        width: 0;
                                        height: 0;
                                        border-top: 0px solid transparent;
                                        border-left: 20px solid #F6A607;
                                        border-bottom: 12px solid transparent;
                                        margin-bottom:2px;">
                            </div>
                            <div style="display:block;
                                        width: 0;
                                        height: 0;
                                        border-top: 12px solid transparent;
                                        border-left: 20px solid #F6A607;
                                        border-bottom: 0px solid transparent;">
                            </div>
                        </div>
                    </div>

                    <!-- Image --
                    <div class="card-zoom">
                        <div class="row">
                            <div class="col-12 courseImage1Online" style="height:180px;">
                            </div>
                            <div class="col-12 mt-3">
                                <h2 class="courseBoxTitleHomeOnline mb-0 text-logo-color_siilc">Broker Certification Program</h2>
                                <p style="margin-bottom:0px;"><span class="course-amountsymbol">&#x20b9;</span><span class="course-amount"><?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card1_price'); ?></span><span style="font-size:10px;"> + GST</span></p>
                                <div style="margin-bottom:16px;">
                                    <div style="float:left;margin-right:10px;">
                                        <span style="background-color:#F6A607; border-radius:30%; width:30px; height:30px; font-size:20px; font-weight:lighter; display:flex; justify-content:center;align-items:center; color:#090761;"><i class="fas fa-clock"></i></span>
                                    </div>
                                    <div>
                                        <h4 class="text-logo-color_siilc"><?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card1_time'); ?></h4>
                                    </div>
                                </div>
                            </div>

                            <!-- <i class="fas fa-clock"></i> --
                            <script>
                                const expandCard1 = () => {
                                    document.getElementById('moreCard1').style.display = 'none';
                                    document.getElementById('expandCard1').style.display = 'block';
                                    document.getElementById('lessCard1').style.display = 'inline';
                                }
                                const collapseCard1 = () => {
                                    document.getElementById('moreCard1').style.display = 'inline';
                                    document.getElementById('expandCard1').style.display = 'none';
                                    document.getElementById('lessCard1').style.display = 'none';
                                }
                            </script>

                            <div class="col-12 justify">
                                <p class="text-justify"><?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card1_content1'); ?><span id='moreCard1' style="color:blue;cursor:pointer;" onclick="expandCard1();">...more</span></p>
                                <p id='expandCard1' style="display:none" class="text-justify"> <?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card1_content2'); ?><span id='lessCard1' style="color:blue;cursor:pointer;display:none;" onclick="collapseCard1();">...less</span> </p>
                            </div>
                            <div class="col-12 mt-3 pt-3 border-bottom">
                                <div class="text-left text-black">
                                    <h5 style="font-weight:bold; font-size:18;"><?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card1_benefits'); ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <h7><?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card1_points_0'); ?></h7>
                            </div>
                            <div class="col-2 text-center">
                                <h7 class="rTik boldTik"> &#x2717; </h7>
                            </div>
                        </div>
                        <hr class="m-2" />
                        <div class="row">
                            <div class="col-8">
                                <h7> <?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card1_points_1'); ?></h7>
                            </div>
                            <div class="col-2 text-center">
                                <h7 class="gTik boldTik"> &#10003; </h7>
                            </div>
                        </div>
                        <hr class="m-2" />
                        <div class="row">
                            <div class="col-8">
                                <h7> <?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card1_points_2'); ?></h7>
                            </div>
                            <div class="col-2 text-center">
                                <h7 class="gTik boldTik">&#10003;</h7>
                            </div>
                        </div>

                        <hr class="m-2" />
                        <div class="row">
                            <div class="col-8">
                                <h7> <?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card1_points_3'); ?></h7>
                            </div>
                            <div class="col-2 text-center">
                                <h7 class="gTik boldTik"> &#10003; </h7>
                            </div>
                        </div>

                        <hr class="m-2" />
                        <div class="row">
                            <div class="col-8">
                                <h7><?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card1_points_4'); ?></h7>
                            </div>
                            <div class="col-2 text-center">
                                <h7 class="gTik boldTik">&#10003;</h7>
                            </div>
                        </div>

                        <hr class="m-2" />
                        <div class="row">
                            <div class="col-8">
                                <h7><?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card1_points_5'); ?></h7>
                            </div>
                            <div class="col-2 text-center">
                                <h7 class="gTik boldTik">&#10003; </h7>
                            </div>
                        </div>

                        <hr class="m-2" />
                        <div class="row">
                            <div class="col-8">
                                <h7><?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card1_points_6'); ?></h7>
                            </div>
                            <div class="col-2 text-center">
                                <h7 class="gTik boldTik">&#10003; </h7>
                            </div>
                        </div>

                        <hr class="m-2" />
                        <div class="row">
                            <div class="col-8">
                                <h7><?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card1_points_7'); ?></h7>
                            </div>
                            <div class="col-2 text-center">
                                <h7 class="gTik boldTik">&#10003; </h7>
                            </div>
                        </div>
                        <hr class="m-2" />
                        <div class="row">
                            <div class="col-8">
                                <h7><?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card1_points_8'); ?></h7>
                            </div>
                            <div class="col-2 text-center">
                                <h7 class="gTik boldTik">&#10003; </h7>
                            </div>
                        </div>
                        <hr class="m-2" /><br />

                        <div class="pt-1 mt-10 row m-0 d-flex justify-content-center">
                            <form action="<?php echo base_url('web/users'); ?>" method="post">
                                <input type="hidden" name="course_id" value="1" />
                                <input type="hidden" name="sub_course_id" value="1" />
                                <input type="hidden" name="sub_course_name" value="Instructorled vanilla courses" />
                                <input type="hidden" name="course_name" value="Instructorled Online courses" />
                                <input type="hidden" name="course_price" value="5000" />
                                <button class="btn buttonBuy btn-sm" type="submit"><?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card1_buyNow'); ?></button>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
            <!-- Card 2 --
            <!-- <div class="col-12 col-md-6 col-xl-5 pb-md-7 pb-4 is-selected">
                <div class="card border shadow course_card_box_shadow p-2 sk-fade coursecard">
                    <!-- Horizontal Vertical Strip --
                    <!-- Outermost Box --
                    <div style="height:30px;
                                z-index:3;
                                position:absolute;
                                -ms-transform: rotate(320deg); /* IE 9 */
                                transform: rotate(320deg);
                                display: flex;
                                align-items: center;
                                top: 20;
                                left: -25;">

                        <!-- Three Divisions  --
                        <!-- First Division --
                        <div style="display:inline-block;margin: 0px;">
                            <div style="display:block;
                                        width: 0;
                                        height: 0;
                                        border-top: 0px solid transparent;
                                        border-right: 20px solid #F6A607;
                                        border-bottom: 12px solid transparent;
                                        margin-bottom:2px;">
                            </div>
                            <div style="display:block;
                                        width: 0;
                                        height: 0;
                                        border-top: 12px solid transparent;
                                        border-right: 20px solid #F6A607;
                                        border-bottom: 0px solid transparent;">
                            </div>
                        </div>
                        <!-- Second Division --
                        <div style="width: fit-content;
                                    display:inline-block;
                                    background-color:#F6A607;
                                    color:white;
                                    padding-left:10px;
                                    padding-right:10px;
                                    margin: 0px;"> <?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card2_tag'); ?>
                        </div>
                        <!-- Third Division --
                        <div style="display:inline-block;
                                    margin: 0px;">
                            <div style="display:block;
                                        width: 0;
                                        height: 0;
                                        border-top: 0px solid transparent;
                                        border-left: 20px solid #F6A607;
                                        border-bottom: 12px solid transparent;
                                        margin-bottom:2px;">
                            </div>
                            <div style="display:block;
                                        width: 0;
                                        height: 0;
                                        border-top: 12px solid transparent;
                                        border-left: 20px solid #F6A607;
                                        border-bottom: 0px solid transparent;">
                            </div>
                        </div>
                    </div>

                    <!-- Image --
                    <div class="card-zoom position-relative">
                        <div class="row">
                            <div class="col-12 courseImage2" style="height:180px;">
                            </div>
                            <div class="col-12 mt-3">
                                <h2 class="courseBoxTitleHomeOnline mb-0 text-logo-color_siilc"><?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card2_head'); ?></h2>
                                <p style="margin-bottom:0px;"><span class="course-amountsymbol">&#x20b9;</span><span class="course-amount"><?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card2_price'); ?></span><span style="font-size:10px;"> + GST</span>
                                    <!-- <span>&#x20b9;0000</span> --
                                </p>
                                <div style="margin-bottom:16px;">
                                    <div style="float:left;margin-right:10px;">
                                        <span style="background-color:#F6A607; border-radius:30%; width:30px; height:30px; font-size:20px; font-weight:lighter; display:flex; justify-content:center;align-items:center; color:#090761;"><i class="fas fa-clock"></i></span>
                                    </div>
                                    <div>
                                        <h4 class="text-logo-color_siilc"><?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card2_time'); ?></h4>
                                    </div>
                                </div>
                            </div>

                            <script>
                                const expand = () => {
                                    document.getElementById('more').style.display = 'none';
                                    document.getElementById('expand').style.display = 'block';
                                    document.getElementById('less').style.display = 'inline';
                                }
                                const collapse = () => {
                                    document.getElementById('more').style.display = 'inline';
                                    document.getElementById('expand').style.display = 'none';
                                    document.getElementById('less').style.display = 'none';
                                }
                            </script>

                            <div class="col-12 justify">
                                <p class="text-justify"><?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card2_content1'); ?><span id='more' style="color:blue;cursor:pointer;" onclick="expand();">...more</span></p>
                                <p id='expand' style="display:none" class="text-justify"><?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card2_content2'); ?><span id='less' style="color:blue;cursor:pointer;display:none;" onclick="collapse();">...less</span></p>
                            </div>

                            <div class="col-12 mt-3 pt-3 border-bottom">
                                <div class="text-left text-black">
                                    <h5 style="font-weight:bold; font-size:18;"><?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card2_benefits'); ?></h5>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-8">
                                <h7><?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card2_points_0'); ?></h7>
                            </div>
                            <div class="col-2 text-center">
                                <h7 class="gTik boldTik"> &#10003; </h7>
                            </div>
                        </div>
                        <hr class="m-2" />
                        <div class="row">
                            <div class="col-8">
                                <h7> <?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card2_points_1'); ?></h7>
                            </div>
                            <div class="col-2 text-center">
                                <h7 class="gTik boldTik"> &#10003; </h7>
                            </div>
                        </div>
                        <hr class="m-2" />
                        <div class="row">
                            <div class="col-8">
                                <h7> <?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card2_points_2'); ?></h7>
                            </div>
                            <div class="col-2 text-center">
                                <h7 class="gTik boldTik"> &#10003; </h7>
                            </div>
                        </div>

                        <hr class="m-2" />
                        <div class="row">
                            <div class="col-8">
                                <h7> <?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card2_points_3'); ?></h7>
                            </div>
                            <div class="col-2 text-center">
                                <h7 class="gTik boldTik"> &#10003; </h7>
                            </div>
                        </div>

                        <hr class="m-2" />
                        <div class="row">
                            <div class="col-8">
                                <h7><?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card2_points_4'); ?></h7>
                            </div>
                            <div class="col-2 text-center">
                                <h7 class="gTik boldTik">&#10003; </h7>
                            </div>
                        </div>

                        <hr class="m-2" />
                        <div class="row">
                            <div class="col-8">
                                <h7><?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card2_points_5'); ?></h7>
                            </div>
                            <div class="col-2 text-center">
                                <h7 class="gTik boldTik">&#10003; </h7>
                            </div>
                        </div>

                        <hr class="m-2" />
                        <div class="row">
                            <div class="col-8">
                                <h7><?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card2_points_6'); ?></h7>
                            </div>
                            <div class="col-2 text-center">
                                <h7 class="gTik boldTik">&#10003; </h7>
                            </div>
                        </div>

                        <hr class="m-2" />
                        <div class="row">
                            <div class="col-8">
                                <h7><?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card2_points_7'); ?></h7>
                            </div>
                            <div class="col-2 text-center">
                                <h7 class="gTik boldTik">&#10003; </h7>
                            </div>
                        </div>
                        <hr class="m-2" />
                        <div class="row">
                            <div class="col-8">
                                <h7><?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card2_points_8'); ?></h7>
                            </div>
                            <div class="col-2 text-center">
                                <h7 class="gTik boldTik">&#10003; </h7>
                            </div>
                        </div>

                        <hr class="m-2" /><br />

                        <div class="row m-0 d-flex justify-content-center">
                            <form action="<?php echo base_url('web/users'); ?>" method="post">
                                <input type="hidden" name="course_id" value="1" />
                                <input type="hidden" name="sub_course_id" value="2" />
                                <input type="hidden" name="sub_course_name" value="Instructorled and digital marketing courses" />
                                <input type="hidden" name="course_name" value="Instructorled Online courses" />
                                <input type="hidden" name="course_price" value="5500" />
                                <button class="btn buttonBuy btn-sm" type="submit"><?php echo $this->lang->line('onlineTraining_brokerTrainingProgram_card2_buyNow'); ?></button>
                            </form>
                        </div>
                    </div>

                </div>
            </div> 
            <!-- Card 3 --
            <!-- <div class="col-12 col-md-6 col-xl-5 pb-md-7 pb-4 is-selected" >
                <div class="card border shadow p-2 course_card_box_shadow sk-fade coursecard">
                                    <!- Horizontal Vertical Strip ->                    
                    <!- Outermost Box ->
                    <div style="height:30px;
                                z-index:3;
                                position:absolute;
                                -ms-transform: rotate(320deg); /* IE 9 */
                                transform: rotate(320deg);
                                display: flex;
                                align-items: center;
                                top: 20;
                                left: -25;">
                                
                                <!- Three Divisions  ->
                            <!- First Division ->
                        <div style="display:inline-block;margin: 0px;">
                            <div style="display:block;
                                        width: 0;
                                        height: 0;
                                        border-top: 0px solid transparent;
                                        border-right: 20px solid #F6A607;
                                        border-bottom: 12px solid transparent;
                                        margin-bottom:2px;">
                            </div>
                            <div style="display:block;
                                        width: 0;
                                        height: 0;
                                        border-top: 12px solid transparent;
                                        border-right: 20px solid #F6A607;
                                        border-bottom: 0px solid transparent;">
                            </div>
                        </div>
                            <!- Second Division ->
                        <div style="width: fit-content;
                                    display:inline-block;
                                    background-color:#F6A607;
                                    color:white;
                                    padding-left:10px;
                                    padding-right:10px;
                                    margin: 0px;"> New
                        </div>
                            <!- Third Division ->
                        <div style="display:inline-block;
                                    margin: 0px;">
                            <div style="display:block;
                                        width: 0;
                                        height: 0;
                                        border-top: 0px solid transparent;
                                        border-left: 20px solid #F6A607;
                                        border-bottom: 12px solid transparent;
                                        margin-bottom:2px;">
                            </div>
                            <div style="display:block;
                                        width: 0;
                                        height: 0;
                                        border-top: 12px solid transparent;
                                        border-left: 20px solid #F6A607;
                                        border-bottom: 0px solid transparent;">
                            </div>
                        </div>
                    </div>

                    <!- Image ->
                    <div class="card-zoom position-relative">
                        <div class="row">
                            <div class="col-12 courseImage3" style="height:180px;">
                                </div>
                                <div class="col-12 mt-3 ">
                                    <h2 class="courseBoxTitleHomeOnline mb-0 text-logo-color_siilc">Instructor-led + digital marketing + certified Trainings</h2>
                                    <p><span class="course-amountsymbol">&#x20b9;</span><span class="course-amount ">6500</span>
                                        <!- <span>&#x20b9;0000</span> ->
                                    </p> 
                                </div>

                            <div class="col-12 justify mt-1 ">
                                <p class="text-justify">These Trainings have been designed to accommodate the requirements of those learners who prefer to complete modules and assignments at their own pace. However, they submit the completed assignments to the instructors who provide feedback after careful evaluation</p>
                            </div>

                            <div class="col-12 mt-1 border-bottom">
                                <div class="text-left text-black">
                                <h5 style="font-weight:bold; font-size:18;">Benefits</h5>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                                <div class="col-8"> <h7>Digital Marketing Workshop</h7></div>
                                <div class="col-2 text-center"> <h7 class="rTik boldTik"> &#x2717; </h7></div>
                            </div>
                            <hr  class="m-2" />
                            <div class="row">
                                <div class="col-8"> <h7> Virtual Sessions by Expert</h7></div>
                                <div class="col-2 text-center"> <h7 class="rTik boldTik"> &#x2717; </h7></div>
                            </div>
                            <hr  class="m-2" />
                            <div class="row">
                                <div class="col-8"> <h7> Study Material</h7></div>
                                <div class="col-2 text-center"> <h7 class="rTik boldTik"> &#x2717; </h7></div>
                            </div>
                            
                            <hr  class="m-2" />
                            <div class="row">
                                <div class="col-8"> <h7> Peer To Peer Interaction</h7></div>
                                <div class="col-2 text-center"> <h7 class="rTik boldTik"> &#x2717; </h7></div>
                            </div>
                            
                            <hr  class="m-2" />
                            <div class="row">
                                <div class="col-8"> <h7>Industry Expert Session</h7></div>
                                <div class="col-2 text-center"> <h7 class="rTik boldTik">&#x2717; </h7></div>
                            </div>

                            <hr  class="m-2" />
                            <div class="row">
                                <div class="col-8"> <h7>Q & A Session</h7></div>
                                <div class="col-2 text-center"> <h7 class="rTik boldTik">&#x2717; </h7></div>
                            </div>

                            <hr  class="m-2" />
                            <div class="row">
                                <div class="col-8"> <h7>Case Studies</h7></div>
                                <div class="col-2 text-center"> <h7 class="rTik boldTik">&#x2717; </h7></div>
                            </div>

                            <hr  class="m-2" />
                            <div class="row">
                                <div class="col-8"> <h7>Practice Test</h7></div>
                                <div class="col-2 text-center"> <h7 class="rTik boldTik">&#x2717; </h7></div>
                            </div>
                            <hr  class="m-2" />
                            <div class="row">
                                <div class="col-8"> <h7>Dedicated Support </h7></div>
                                <div class="col-2 text-center"> <h7 class="rTik boldTik">&#x2717; </h7></div>
                            </div>
                            <hr  class="m-2" />
                            <div class="row">
                                <div class="col-8"> <h7> LIVE Sessions </h7></div>
                                <div class="col-2 text-center"> <h7 class="rTik boldTik"> &#x2717; </h7></div>
                            </div>
                            <hr  class="m-2" />
                            <div class="row">
                                <div class="col-8"> <h7> Pre Recorded Videos </h7></div>
                                <div class="col-2 text-center"> <h7 class="gTik boldTik"> &#10003; </h7></div>
                            </div>
                            
                            <hr  class="m-2" />
                            <div class="row">
                                <div class="col-8"> <h7> Distinct Schedule </h7></div>
                                <div class="col-2 text-center"> <h7 class="rTik boldTik"> &#x2717; </h7></div>
                            </div>

                            <hr  class="m-2" />
                            <div class="row">
                                <div class="col-8"> <h7>Content Visibility</h7></div>
                                <div class="col-2 text-center"> <h7 class="gTik boldTik">&#10003; </h7></div>
                            </div>

                            <hr  class="m-2" />
                            <div class="row">
                                <div class="col-8"> <h7>Learning Evaluation </h7></div>
                                <div class="col-2 text-center"> <h7 class="rTik boldTik">&#x2717;</h7></div>
                            </div>

                            <hr  class="m-2" />
                            <div class="row">
                                <div class="col-8"> <h7>Resource Allocation </h7></div>
                                <div class="col-2 text-center"> <h7 class="rTik boldTik">&#x2717; </h7></div>
                            </div>
                            <hr  class="m-2" /><br/>

                            <div class="pt-1 row m-0 d-flex justify-content-center">
                                <form action="<?php echo base_url('web/users'); ?>" method="post">
                                    <input type="hidden" name="course_id" value="1" />
                                    <input type="hidden" name="sub_course_id" value="3" />
                                    <input type="hidden" name="sub_course_name" value="Instructorled and  digital marketing , certified courses" />
                                    <input type="hidden" name="course_name" value="Instructor-led Online courses" />
                                    <input type="hidden" name="course_price" value="6500" />
                                    <button class="btn buttonBuy btn-sm" type="submit">BUY NOW</button>
                                </form>
                            </div>
                    </div>
                </div>
            </div> -->

</div>
</div>

<div class="row padding-classes ">
    <div class="col-12 col-md-10 col-lg-10  mt-10 mb-5">
        <h4 class="text-logo-color_siilc"><?php echo $this->lang->line('certificationAuthority'); ?></h4>
        <div class="line-dec-left"></div>
        <p class="mt-5"><?php echo $this->lang->line('certificationContent'); ?></p>
    </div>
</div>
</div>