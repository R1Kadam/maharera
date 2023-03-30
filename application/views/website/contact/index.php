<div id="content" class="site-content mt-10">
            <!-- <div class="div-sections  divelement-element py-4 position-relative bg-white div-sections-boxed div-sections-height-default div-sections-height-default">
                <div class="div-container div-column-gap-default position-static">
                    <div class="div-column elementor-col-100 elementor-top-column divelement-element position-static" >
                        <div class="p-0 position-static px-md-5 px-xl-0 div-widget-wrap divelement-element-populated">

                            <div class="div-sections div-inner-section divelement-element div-sections-boxed div-sections-height-default div-sections-height-default">
                                <div class="div-container div-column-gap-default row align-items-center">
                                    <div class="col-12 col-md-5 col-lg-6 order-md-2">
                                        <div class="p-0 div-widget-wrap divelement-element-populated">
                                            <div class="divelement-element div-widget div-widget-image animated fadeIn">
                                                <div class="div-widget-container">
                                                    <img width="100%" src="<?php echo base_url();?>assets/images/contact.jpg"
                                                        alt="" loading="lazy">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-7 col-lg-6 order-md-1 px-md-0"
                                        data-id="df62a73" >
                                        <div class="p-0 div-widget-wrap divelement-element-populated">
                                            <div class="divelement-element animated-fast div-widget div-widget-highlighted-heading animated fadeInDown">
                                                <div class="div-widget-container">
                                                    <h1 class="display-2">
                                                        CONTACT <span
                                                            class="elementor-highlighted-heading__highlighted-text text-orange font-weight-semi-bold d-block d-xl-inline ml-xl-0">US</span>
                                                    </h1>
                                                </div>
                                            </div>
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>  -->

    <div class="row backgroundImageTopRatedInstructor p-4">
      <div class="col-12 col-md-10 col-lg-10 mx-auto mb-5">
        <div class="card">
          <div class="form-container">
           
            <div class="right-container p-5 animated fadeInLeft">
              <div class="right-inner-container">

                <form action="<?php echo base_url('web/query');?>" method="POST">
                  <h2 class="lg-view text-logo-color_siilc">Contact Us</h2>
                      <p style="color:#000">* Required</p>
                      <input type="text" placeholder="Name *" name="name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123 ) || (event.charCode == 32)" required/>
                      <input type="email" placeholder="Email *" name="email" required />
                        <input type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" id="phone"  placeholder="Ex. 8900389003" name="phone" minlength="10" maxlength="10"  required data-error="Please enter your mobile number" onkeypress="return isNumber(event)" >


                      <textarea rows="4" placeholder="Message"  name="message" required></textarea>
                      <div class="text-center">
                        <button type="submit" class="btn buttonBuy mt-5">Submit</button>
                      </div>
                </form>

              </div>
            </div>

            <div class="left-container animated fadeInRight">
              <div class="left-inner-container">
                <img width="100%" height="100%" src="<?php echo base_url();?>assets/images/contact.jpg" alt="Maharera" loading="lazy">
                <div>
                  <span><i class="fa fa-mobile" aria-hidden="true"></i> <a href="tel:9130070132" class="pt-2">91 30 07 0132</a></span>
                  <span><i class="fa fa-envelope"></i> <a href="#" class="pt-2">info@siilc.edu.in</a></span>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-12 col-lg-12 mx-auto mb-5">
      <!-- <h2>Company Address</h2>
              <p>SIILC Media Center 82/1A & 83, 1A, Baner Rd, Sakal Nagar, Aundh, Pune, Maharashtra 411007</p>
                -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.578964033695!2d73.81820831468885!3d18.54791918739306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf6aec2ea709%3A0x12112fa80a47f8ea!2sSIMACES%20international%20interdisciplinary%20learning%20centre!5e0!3m2!1sen!2sin!4v1653044680963!5m2!1sen!2sin" width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      
      </div>
    </div>

</div>
