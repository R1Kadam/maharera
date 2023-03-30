<?php
$signup = "User Info";
$firstName = "Enter your first name ";
$error_firstName = "Please enter your first name ";
$lastName = "Enter your last name";
$error_lastName = "Please enter your last name ";
$mobile = "Enter your mobile number";
$error_mobile = "Please Enter your mobile number";
$email = "Enter your email address";
$error_email = "Please enter your email address";
$dob = "Enter your date of birth.";
$dob_error = "Please enter your date of birth.";
$city = "Enter your city name";
$error_city = "Please enter your city name";
$education = "Please select your education ";
$Choose = "Choose";

$batchess =  $this->crud->get_batches();

?>


<script>
  function openNavTerms2() {
    document.getElementById("myNavTerms2").style.height = "100%";

  }

  function closeNavTerms2() {
    document.getElementById("myNavTerms2").style.height = "0%";
  }
</script>
<section id="signup" class="section-padding ">
  <div class="container mt-12">
    <div class="row m-0 justify-content-center">
      <div class="col-12 ">
        <?php
        $error = $this->session->flashdata('error');
        $success = $this->session->flashdata('success');
        if ($error) {
          echo '<div class="alert alert-danger text-center" role="alert">
                        <div class="container" id="qr">' . $error . '
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">
                                    <i class="now-ui-icons ui-1_simple-remove"></i>
                                </span>
                            </button>
                        </div>
                    </div>';
        }
        if ($success) {
          echo '<h6 class="mx-auto alert alert-success text-center">' . $success . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                        </span>
                    </button></h6>';
        }
        ?>
      </div>
    </div>

    <div class="row justify-content-center backgroundImage">
      <div class="col-12">
        <div class="section-title-header text-center">
          <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s"><?php echo $signup ?></h1>
        </div>
      </div>
      <div class="col-12 col-md-8 col-lg-8">
        <div class="cardUser fadeInLeft" data-wow-delay="0.2s">
          <div class="form-wrapper">
            <form role="form" method="post" id="signupForm" name="signup_form" onsubmit="return validateForm()" action="<?php echo base_url('web/checkout'); ?>" data-toggle="validator">
              <div class="row">

                <div class="col-12 form-line">
                  <div class="userFromLabel"><span class="errorColor">*</span> <?php echo $firstName; ?></div>
                  <div class="form-group">
                    <input type="hidden" name="course_id" value="<?php echo $course_id; ?> ">
                    <input type="hidden" name="sub_course_id" value="<?php echo $sub_course_id; ?> ">
                    <input type="hidden" name="sub_course_name" value="<?php echo $sub_course_name; ?> ">
                    <input type="hidden" name="course_name" value="<?php echo $course_name; ?> ">
                    <input type="hidden" name="course_price" value="<?php echo $course_price; ?> ">

                    <input type="hidden" name="course_date" value="<?php echo $course_date; ?>" />
                    <input type="hidden" name="batch_hours" value="<?php echo $batch_hours; ?>" />
                    <input type="hidden" name="batch_time" value="<?php echo $batch_time; ?>" />
                    <!-- First name -->
                    <input type="text" class="form-control" id="name" name="f_name" placeholder="First Name" required data-error="Please enter your first name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                    <div class="help-block with-errors errorColor" id="error_fname"></div>
                  </div>
                </div>
                <!-- Last Name -->
                <div class="col-12 form-line">
                  <div class="userFromLabel"><span class="errorColor">*</span> <?php echo $lastName; ?></div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="lname" name="l_name" placeholder="Last Name" required data-error="Please enter your last name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                    <div class="help-block with-errors errorColor" id="error_lname"></div>
                  </div>
                </div>
                <!-- Mobile number -->
                <div class="col-12 form-line">
                  <div class="userFromLabel"><span class="errorColor">*</span><?php echo $mobile; ?></div>
                  <div class="form-group">
                    <input type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" id="mobile" class="form-control " placeholder="Ex. 9594234323" name="mobile" minlength="10" maxlength="10" required data-error="Please enter your mobile number" onkeypress="return isNumber(event)">
                    <div class="help-block with-errors errorColor" id="error_mobile"></div>
                  </div>
                </div>

                <!-- Email -->
                <div class="col-12 form-line">
                  <div class="userFromLabel"><span class="errorColor">*</span> <?php echo $email; ?></div>
                  <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    <div class="help-block with-errors errorColor" id="error_email"></div>
                  </div>
                </div>
                <!-- Date Of Birth -->
                <div class="col-12 form-line">
                  <div class="userFromLabel"><?php echo $dob; ?></div>
                  <div class="form-group">
                    <input type="date" class="form-control" id="dob" name="dob" placeholder="Date of birth">
                    <div class="help-block with-errors errorColor" id="error_dob"></div>
                  </div>
                </div>
                <!-- Select batch -->
                <div class="col-12 form-line">
                  <div class="userFromLabel"><span class="errorColor">*</span>Batch</div>
                  <div class="form-group">
                    <select name="batch" id="batch" class="form-control" required>
                      <?php
                      foreach ($batchess as $batch) { ?>
                        <option value="<?php echo $batch['name']; ?>"><?php echo $batch['name']; ?></option>
                      <?php
                      }
                      ?>
                      <!-- <option value="">----- select batch ------</option>
                        <option value="Monday,Wednesday,Friday (Morning 8am - 10am)">Monday,Wednesday,Friday (Morning 8am - 10am)</option>
                        <option value="Monday,Wednesday,Friday (Evening 7pm - 9pm)">Monday,Wednesday,Friday (Evening 7pm - 9pm)</option>
                        <option value="Tuesday,Thrusday,Saturday (Morning 8am - 10am)">Tuesday,Thrusday,Saturday (Morning 8am - 10am)</option>
                        <option value="Tuesday,Thrusday,Saturday (Evening 7pm - 9pm)">Tuesday,Thrusday,Saturday (Evening 7pm - 9pm)</option>
                        <option value="Weekend Batch (Sat Mor 8am - 11am & Eve 7pm - 9pm, Sun Mor 8am - 11am & Eve 7pm - 9pm)">Weekend Batch (Sat Mor 8am - 11am & Eve 7pm - 9pm, Sun Mor 8am - 11am & Eve 7pm - 9pm)</option> -->

                    </select>
                    <div class="help-block with-errors errorColor" id="error_city"></div>
                  </div>
                </div>
                <!-- Address line 2 -->
                <div class="col-12 col-md-6 form-line">
                  <div class="form-group">
                    <div class="userFromLabel"><span class="errorColor">*</span>Enter address line 1</div>
                    <input type="text" class="form-control" id="address1" name="address1" placeholder="Address line 1" required data-error="Please enter your address line 1">
                    <div class="help-block with-errors errorColor" id="error_address1"></div>
                  </div>
                </div>

                <!-- address line 2 -->
                <div class="col-12 col-md-6 form-line">
                  <div class="form-group">
                    <div class="userFromLabel"><span class="errorColor"></span>Enter address line 2</div>
                    <input type="text" class="form-control" id="address2" name="address2" placeholder="Address line 2" data-error="Please enter your address line 2">
                    <div class="help-block with-errors errorColor" id="error_address2"></div>
                  </div>
                </div>

                <!-- City -->
                <div class="col-12 form-line">
                  <div class="userFromLabel"><span class="errorColor">*</span><?php echo $city; ?></div>
                  <div class="form-group">
                    <!-- <input type="text" class="form-control" id="city" name="city" placeholder="Enter city" required data-error="Please enter your city name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"> -->
                    <select name="city" id="city" class="form-control" required>
                      <option value="">----- select city ------</option>
                      <?php
                      foreach ($cities as $cits) { ?>
                        <option value="<?php echo $cits['name']; ?>"><?php echo $cits['name']; ?></option>
                      <?php
                      }
                      ?>
                    </select>
                    <div class="help-block with-errors errorColor" id="error_city"></div>
                  </div>
                </div>

                <!-- //Pincode -->
                <div class="col-12 col-md-6 form-line">
                  <div class="form-group">
                    <div class="userFromLabel"><span class="errorColor">*</span>Enter pincode</div>
                    <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Enter pincode" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" minlength="6" maxlength="6" required data-error="Please enter your pincode" onkeypress="return isNumber(event)" />
                    <div class="help-block with-errors errorColor" id="error_pincode"></div>
                  </div>
                </div>
                
                 <!-- //Referral code -->
                <div class="col-12 col-md-6 form-line">
                  <div class="form-group">
                    <div class="userFromLabel"><span class="errorColor">*</span>Enter Referral Code</div>
                    <input type="text" class="form-control" id="refcode" name="refcode" placeholder="Enter Referral Code" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" minlength="5" maxlength="5" required data-error="Please enter your Referral Code" onkeypress="return isNumber(event)" />
                    <div class="help-block with-errors errorColor" id="error_refcode"></div>
                  </div>
                </div>
                
                <!-- Checkbox for Terms & conditions -->
                <div style="width:100%; display: flex; flex-direction: row; justify-content: flex-start; margin:10px;">
                  <div class="form-group">
                    <div class="userFromLabel"><span class="errorColor">*</span>Terms & Conditions</div><br />
                    <input type="checkbox" style="align-self: flex-start; width:5%;" name="termsNConditions" required />
                    I hereby declare that I read all the <span style="color: cornflowerblue;cursor: pointer;" onclick="openNavTerms2();">terms and conditions.</span>
                  </div>
                </div>


                <div class="col-12 text-center mt-5">
                  <div class="form-submit">
                    <button type="submit" class="btn btn-common btn-sm colorWhite" id="form-submit"> Submit</button>
                  </div>

                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal     -->
  <div id="myNavTerms2" class="overlay" style="display:flex;justify-content: center; align-items: center;">
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
          <a href="javascript:closeNavTerms2();" class="btn buttonBuy btn-lg" style="background-color: black;font-size: 20px;">Close</a>
        </div>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
  function validateForm() {
    var f_name = document.forms["signup_form"]["f_name"].value;
    var l_name = document.forms["signup_form"]["l_name"].value;
    var mobile = document.forms["signup_form"]["mobile"].value;
    var email = document.forms["signup_form"]["email"].value;
    var batch = document.forms["signup_form"]["batch"].value;
    var address1 = document.forms["signup_form"]["address1"].value;
    var address2 = document.forms["signup_form"]["address2"].value;
    var city = document.forms["signup_form"]["city"].value;
    var pincode = document.forms["signup_form"]["pincode"].value;

    if (f_name == null || f_name == "", l_name == null || l_name == "", mobile == null || mobile == "", batch == null || batch == "") {
      return false;
    } else if (mobile.length < 10) {
      console.log("----------error in mobile-----------");
      document.getElementById("error_mobile").innerHTML = "Please enter 10 digit mobile number";
      return false;
    } else {
      localStorage.setItem('mobile', mobile);
      document.getElementById("error_mobile").innerHTML = "";
      return true;
    }
  }

  function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
      return false;
    }
    return true;
  }
</script>