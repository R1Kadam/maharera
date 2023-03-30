<?php
$cities = $this->crud->get_all_cities();
// print_r($cities);
?>


<script type="text/javascript">
    function openNav() {
        if(document.getElementById("myNav") !== null){
            document.getElementById("myNav").style.height = "100%";
        }
    }
    function closeNav() {
        if(document.getElementById("myNav") !== null){
            document.getElementById("myNav").style.height = "0%";
        }
    }
    
</script>

<div class="modal modal-sidebar left fade-left fade" id="accountModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Signin -->
            <div class="collapse show" id="collapseSignin" data-parent="#accountModal">

                <div class="modal-header">
                    <h5 class="modal-title text-logo-color_siilc"><?php echo $this->lang->line('nav_contact_us_title'); ?></h5>
                    <button type="button" class="close text-primary" data-dismiss="modal" aria-label="Close">
                        <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.142135 2.00015L1.55635 0.585938L15.6985 14.7281L14.2843 16.1423L0.142135 2.00015Z" fill="currentColor"></path>
                            <path d="M14.1421 1.0001L15.5563 2.41431L1.41421 16.5564L0 15.1422L14.1421 1.0001Z" fill="currentColor"></path>
                        </svg>
                    </button>
                </div>

                <div class="modal-body">
                    <form class="login" action="<?php echo base_url('web/enquiry'); ?>" method="POST">
                        <div class="form-group mb-1">
                            <label for="reg_name"><?php echo $this->lang->line('nav_contact_us_fullname'); ?></label>
                            <input type="text" class="form-control input-text" name="fullname" id="reg_name" autocomplete="fullname" placeholder="<?php echo $this->lang->line('nav_contact_us_fullname'); ?>" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode == 32)" required>
                        </div>

                        <div class="form-group mb-1">
                            <label for="reg_email"><?php echo $this->lang->line('nav_contact_us_email'); ?></label>
                            <input type="email" class="form-control input-text" name="email" id="reg_email" autocomplete="email" placeholder="<?php echo $this->lang->line('nav_contact_us_email'); ?>" required>
                        </div>

                        <div class="form-group mb-1">
                            <label for="reg_mobile"><?php echo $this->lang->line('nav_contact_us_mobile'); ?></label>

                            <input type="text" class="form-control input-text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" id="mobile" placeholder="<?php echo $this->lang->line('nav_contact_us_mobile'); ?>" name="mobile" minlength="10" maxlength="10" required data-error="Please enter your mobile number" onkeypress="return isNumber(event)">

                        </div>

                        <div class="form-group mb-4">
                            <label for="cities"><?php echo $this->lang->line('nav_contact_us_select_city'); ?></label>
                            <select name="cities" id="cities" class="form-control" required>
                                <option value="">----- <?php echo $this->lang->line('nav_contact_us_select_city'); ?> ------</option>
                                <?php
                                foreach ($cities as $city) { ?>
                                    <option value="<?php echo $city['name']; ?>"><?php echo $city['name']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="clear"></div>
                        <button type="submit" class="btn btn-block btn-primary" name="login" value="Submit"><?php echo $this->lang->line('nav_contact_us_submit'); ?></button>
                        <div class="clear"></div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<header class="header-v1 navbar navbar-expand-xl py-2 py-xl-4 navbar-light bg-white borderBottom " style="position:fixed; top:0px; width:100%; height:90px; ">
    <div class="container-fluid">
        <a href="<?php echo base_url(); ?>" class="custom-logo-link" rel="home" style="width:100px;height:50px;">
            <img src="<?php echo base_url(); ?>/assets/images/siilclogo1.jpg" class="custom-logo navbar-brand-img" alt="Maharera" height="73" width="120">
        </a>
     
        <!-- <a href="#" class="custom-logo-link" rel="home" style="padding-left:20px;"> Authorised training partner of MahaRERA</a> -->
        <a href="#" class="custom-logo-link d-none d-md-block" rel="home"> <?php echo $this->lang->line('nav_head_home_Authorised'); ?></a>
        <a href="#" class="custom-logo-link d-block d-md-none" rel="home" style="font-size: 12px;"> <?php echo $this->lang->line('nav_head_home_Authorised_responsive'); ?></a>

        <div class="collapse navbar-collapse z-index-lg" id="navbarCollapse">

            <button class="navbar-toggler outline-0 text-primary" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.142135 2.00015L1.55635 0.585938L15.6985 14.7281L14.2843 16.1423L0.142135 2.00015Z" fill="currentColor"></path>
                    <path d="M14.1421 1.0001L15.5563 2.41431L1.41421 16.5564L0 15.1422L14.1421 1.0001Z" fill="currentColor"></path>
                </svg>
            </button>
                                <!-- Horizontal List at Nav Bar -->
            <ul id="menu-primary-menu" class="navbar-nav ml-auto">
                <!-- Home -->
                <li id="menu-item-3918" class="menu-item-3918 nav-item">
                    <a title="Home" href="<?php echo base_url(); ?>" class="nav-link" aria-current="page"><?php echo $this->lang->line('nav_head_home'); ?></a>
                </li>
                <li id="menu-item-3918" class="menu-item-3918 nav-item">
                    <a title="Training" href="<?php echo base_url(); ?>web/new_course" class="nav-link" aria-current="page"><?php echo $this->lang->line('nav_head_training'); ?></a>
                </li>

                <!-- <li id="" class="dropdown  nav-item"><a title="Training" href="<?php echo base_url(); ?>/web/new_course" class="dropdown-toggle  nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="menu-item-dropdown-3919"><?php echo $this->lang->line('nav_head_training'); ?></a>
                    <!-- Real Estate Broker  --
                    <ul class="dropdown-menu " aria-labelledby="menu-item-dropdown-3921" role="menu">
                        <li>
                            <div class="elementor">
                                <a class="div-sections-wrap" href="<?php echo base_url(); ?>web/course">
                                    <div class="div-sections  divelement-element ">
                                        <div class="div-column elementor-col-100 elementor-top-column p-0">
                                            <div class="p-0 div-widget-wrap ">
                                                <div class="div-sections div-inner-section divelement-element">
                                                    <div class="div-widget-container">
                                                        <h5>
                                                            <span class="elementor-highlighted-heading__highlighted-text"><?php echo $this->lang->line('nav_head_online_training'); ?></span>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="elementor">
                                <!-- <a class="div-sections-wrap" href="<?php echo base_url(); ?>web/classroom_course"> --
                                <div class="div-sections  divelement-element ">
                                    <div class="div-column elementor-col-100 elementor-top-column p-0">
                                        <div class="p-0 div-widget-wrap ">
                                            <div class="div-sections div-inner-section divelement-element">
                                                <!-- <div class="div-widget-container">  --

                                                <!-- Default dropright button --
                                                <div class="btn-group dropdown">
                                                    <h5>
                                                        <span class="elementor-highlighted-heading__highlighted-text dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->lang->line('nav_head_classroom_training'); ?></span>
                                                    </h5>

                                                    <div class="dropdown-menu mt-5" style="margin-left:-40px; width:50%;">
                                                        <!-- Dropdown menu links --
                                                        <a class="dropdown-item" href="<?php echo base_url(); ?>web/classroom_course">
                                                            <h6><?php echo $this->lang->line('nav_head_real_estate_training'); ?></h6>
                                                        </a>
                                                        <a class="dropdown-item" href="<?php echo base_url(); ?>web/landrevenue">
                                                            <h6><?php echo $this->lang->line('nav_head_land_and_revenue'); ?></h6>
                                                        </a>
                                                        <a class="dropdown-item" href="<?php echo base_url(); ?>web/job_oriented_training">
                                                            <h6>Job Oriented Training</h6>
                                                        </a>
                                                    </div>
                                                </div>

                                                <!-- </div> --
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- </a> --
                            </div>
                        </li>
                    </ul>
                </li> -->
                <!-- Blog -->
                <li id="menu-item-3918" class="menu-item-3918 nav-item">
                    <a title="Home" href="<?php echo base_url('web/blog_list'); ?>" class="nav-link" aria-current="page"><?php echo $this->lang->line('nav_head_blog'); ?></a>
                </li>

                <!-- About -->
                <li id="menu-item-8005" class="menu-item-8005 nav-item">
                    <a title="Contact" href="<?php echo base_url('web/about_us'); ?>" class=" nav-link"><?php echo $this->lang->line('nav_head_about'); ?></a>
                </li>
                <!-- Contact -->
                <li id="menu-item-8005" class="menu-item-8005 nav-item">
                    <a title="Contact" href="<?php echo base_url('web/contact'); ?>" class=" nav-link"><?php echo $this->lang->line('nav_head_contact'); ?></a>
                </li>
                <!-- Language -->
                <li id="" class="dropdown  nav-item"><a title="Training" href="#" class="dropdown-toggle  nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="menu-item-dropdown-3919"><?php echo $this->lang->line('nav_head_language'); ?></a>
                    <!-- Language -->
                    <ul class="dropdown-menu " aria-labelledby="menu-item-dropdown-3921" role="menu">
                        <li>
                            <div class="elementor">
                                <a class="div-sections-wrap" href="<?php echo base_url(); ?>/languageswitcher/switchLang/english">
                                    <div class="div-sections  divelement-element ">
                                        <div class="div-column elementor-col-100 elementor-top-column p-0">
                                            <div class="p-0 div-widget-wrap ">
                                                <div class="div-sections div-inner-section divelement-element">
                                                    <div class="div-widget-container">
                                                        <h5>
                                                            <span class="elementor-highlighted-heading__highlighted-text"><?php echo $this->lang->line('nav_head_lang_eng'); ?></span>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="elementor">
                                <a class="div-sections-wrap" href="<?php echo base_url(); ?>/languageswitcher/switchLang/marathi">
                                    <div class="div-sections  divelement-element ">
                                        <div class="div-column elementor-col-100 elementor-top-column p-0">
                                            <div class="p-0 div-widget-wrap ">
                                                <div class="div-sections div-inner-section divelement-element">
                                                    <div class="div-widget-container">
                                                        <h5>
                                                            <span class="elementor-highlighted-heading__highlighted-text"><?php echo $this->lang->line('nav_head_lang_mar'); ?></span>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="elementor">
                                <a class="div-sections-wrap" href="<?php echo base_url(); ?>/languageswitcher/switchLang/hindi">
                                    <div class="div-sections  divelement-element ">
                                        <div class="div-column elementor-col-100 elementor-top-column p-0">
                                            <div class="p-0 div-widget-wrap ">
                                                <div class="div-sections div-inner-section divelement-element">
                                                    <div class="div-widget-container">
                                                        <h5>
                                                            <span class="elementor-highlighted-heading__highlighted-text"><?php echo $this->lang->line('nav_head_lang_hindi'); ?></span>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Phone No -->
                <li id="menu-item-8005" class="menu-item-8005 nav-item" style="margin-top: -10px;">
                    <a title="Contact" href="tel:9130070132" class=" nav-link"><i class="fa fa-phone my-float"></i> +91 9130070132</a>
                </li>

            </ul>
        </div>

        <button class="navbar-toggler ml-4 ml-md-5 shadow-none bg-teal text-white icon-xs p-0 outline-0 h-40p w-40p d-flex d-xl-none place-flex-center" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <svg width="25" height="17" viewBox="0 0 25 17" xmlns="http://www.w3.org/2000/svg">
                <rect width="25" height="1" fill="currentColor"></rect>
                <rect y="8" width="15" height="1" fill="currentColor"></rect>
                <rect y="16" width="20" height="1" fill="currentColor"></rect>
            </svg>
        </button>
    </div>
</header>