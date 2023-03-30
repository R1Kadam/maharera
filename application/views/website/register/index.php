<?php
$signup = "Webinar registration";
$firstName = "Enter your first name ";
$error_firstName = "Please enter your first name ";
$lastName = "Enter your last name";
$error_lastName = "Please enter your last name ";
$age = "Enter your age";
$error_age = "Please enter your age ";
$mobile = "Enter your whatsapp mobile number";
$error_mobile = "Please Enter your whatsapp mobile number";
$email = "Enter your email address";
$error_email = "Please enter your email address";
$city = "Enter your city name";
$error_city = "Please enter your city name";
$district = "Enter your district ";
$error_district = "Please enter your district ";
$broker = "Are you a practicing real estate broker";
$registeredMaharera = "Are you registered with MahaRera ";
$Choose = "Choose";

?>

<!-- 
    1. Name 
    2. Age 
    3. Mobile
    4. Email 
    5. City
    6. District 
    7. Are you a practicing real estate broker
    8. 
-->



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
            <form role="form" method="post" id="signupForm" name="signup_form" onsubmit="return validateForm()" action="<?php echo base_url('web/webinar_submit'); ?>" data-toggle="validator">
              <div class="row">

                <div class="col-12 form-line">
                  <div class="userFromLabel"><span class="errorColor">*</span> <?php echo $firstName; ?></div>
                  <div class="form-group">
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
                <!-- Age -->
                <div class="col-12 form-line">
                  <div class="userFromLabel"><span class="errorColor">*</span><?php echo $age; ?></div>
                  <div class="form-group">
                    <input type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" id="age" class="form-control " placeholder="Ex.27" name="age" minlength="0" maxlength="2" required data-error="Please enter your age" onkeypress="return isNumber(event)">
                    <div class="help-block with-errors errorColor" id="error_mobile"></div>
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

                <!-- District -->
                <div class="col-12 form-line">
                  <div class="userFromLabel"><span class="errorColor">*</span><?php echo $district; ?></div>
                  <div class="form-group">
                    <!-- <input type="text" class="form-control" id="city" name="city" placeholder="Enter city" required data-error="Please enter your city name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"> -->
                    <select name="district" id="district" class="form-control" required>
                      <option value="">----- select District ------</option>
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

                <!-- Broker -->
                <div class="col-12 form-line">
                  <div class="userFromLabel"><span class="errorColor">*</span><?php echo $broker; ?></div>
                  <div class="form-group">
                    <!-- <input type="text" class="form-control" id="city" name="city" placeholder="Enter city" required data-error="Please enter your city name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"> -->
                    <select name="broker" id="broker" class="form-control" required>
                      <option value="">----- Select YES/NO ------</option>
                      <option value="yes">YES</option>
                      <option value="no">NO</option>
                    </select>
                  </div>
                </div>

                <!-- registered maharera -->
                <div class="col-12 form-line">
                  <div class="userFromLabel"><span class="errorColor">*</span><?php echo $registeredMaharera; ?></div>
                  <div class="form-group">
                    <!-- <input type="text" class="form-control" id="city" name="city" placeholder="Enter city" required data-error="Please enter your city name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"> -->
                    <select name="registeredMaharera" id="registeredMaharera" class="form-control" required>
                      <option value="">----- Select YES/NO ------</option>
                      <option value="yes">YES</option>
                      <option value="no">NO</option>
                    </select>
                  </div>
                </div>

                <!-- //Pincode
                    <div class="col-12 col-md-6 form-line">
                      <div class="form-group">
                        <div  class="userFromLabel"><span class="errorColor">*</span>Enter pincode</div>
                        <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Enter pincode" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" minlength="6" maxlength="6" required data-error="Please enter your pincode" onkeypress="return isNumber(event)" />
                        <div class="help-block with-errors errorColor" id="error_pincode"></div>
                      </div>
                    </div> -->

                <div class="col-12 text-center mt-5">
                  <div class="form-submit">
                    <button type="submit" class="btn btn-common btn-sm colorWhite" id="form-submit">Submit</button>
                  </div>

                </div>
              </div>
            </form>
          </div>
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
    // var address1 = document.forms["signup_form"]["address1"].value;
    // var address2 = document.forms["signup_form"]["address2"].value;
    var city = document.forms["signup_form"]["city"].value;
    var pincode = document.forms["signup_form"]["pincode"].value;

    if (f_name == null || f_name == "", l_name == null || l_name == "", mobile == null || mobile == "") {
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