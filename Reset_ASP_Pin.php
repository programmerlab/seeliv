<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Reset ASP Pin</title>
<link href="css/datepicker.min.css" rel="stylesheet" type="text/css">
<?php include("head.php") ?>
<?php include("includes/config.php") ?>
</head>

<body >
<div class="top-log">
  <div class="lang"><a id="langSelBtn" href="#">English</a>
    <div class="lang-selection">
      <ul>
       <li><label data-lang="English"><input type="radio" name="langSelct"/>English</label></li>
       <li><label data-lang="русский"><input type="radio" name="langSelct"/>русский</label></li>
       <li><label data-lang="Español"><input type="radio" name="langSelct"/>Español</label></li>
       <li><label data-lang="中文"><input type="radio" name="langSelct"/>中文</label></li>
       <li><label data-lang="हिंदी"><input type="radio" name="langSelct"/>हिंदी</label></li>
       <li><label data-lang="Türk"><input type="radio" name="langSelct"/>Türk</label></li>
       <li><label data-lang="Português"><input type="radio" name="langSelct"/>Português</label></li>
       <li><label data-lang="Deutsche"><input type="radio" name="langSelct"/>Deutsche</label></li>
       <li><label data-lang="français"><input type="radio" name="langSelct"/>français</label></li>
      </ul>
    </div>
  </div>
  <div class="log-pg-hds">Reset ASP PIN</div>
  <div class="log-pg-optn"><a href="#"><strong>Support</strong></a></div>
</div>

<!--<div class="general-form">-->
<!--  <div class="form-field">-->
<!--    <div class="cnt-sort  for-mobile-mod active"><input type="text" /><div class="cnt-optn"></div></div>-->
<!--    <div class="for-email-mod"><input type="text" placeholder="Email / Account ID / Approval ID" /></div>-->
<!--  </div>-->
<!--  <div class="form-field">-->
<!--  <input type="text" readonly="readonly" data-date-format="yyyy-mm-dd" class="select-date datepicker-here" placeholder="Enter DOB / Account Reg. Date" >-->
<!--  </div>-->
<!--  <p class="lnk-two">-->
<!--  <a href="#" class="send-log-mod">Reset Via Email / IDs</a>-->
<!--  </p>-->
<!--  <div class="form-field">-->
<!--    <button type="submit" class="roll-btn full-btn" >Next</button>-->
<!--  </div>-->
<!--  <p><a href="#" >Return To Login</a></p>-->
<!--</div>-->

<!--step-1-->

<div class="general-form remove step1">
    <!--<h3 style="text-align:center;margin-bottom:30px;">Reset ASP PIN</h3>-->
  <div class="form-field">
    <div class="cnt-sort  for-mobile-mod active"><input type="text" /><div class="cnt-optn"></div></div>
    <div class="for-email-mod"><input type="text" placeholder="Email / Account ID / Approval ID" /></div>
  </div>
  <div class="form-field">
  <input type="text" readonly="readonly" data-date-format="yyyy-mm-dd" class="select-date datepicker-here" placeholder="Enter DOB / Account Reg. Date" >
  </div>
  <p class="lnk-two">
  <a href="#" class="send-log-mod">Reset Via Email / IDs</a>
  </p>
  <div class="form-field">
    <button type="button" data-value="step2" class="roll-btn full-btn click_button" >Next</button>
    <!--<button type="button" data-value="main" class="roll-btn full-btn click_button">Back</button>-->
  </div>
  <p><a href="<?php echo $base_url?>login.php" >Return To Login</a></p>
</div>


<!--step2-->

<div class="general-form remove step2" style="display:none;">
    <!--<h3 style="text-align:center;margin-bottom:30px;">Reset ASP PIN</h3>-->
  <div class="form-field">
    <a href="#" class="send-btn-fl"><i class="fa fa-envelope"></i>Send OTP on Email</a>
  </div>
  <div class="form-field">
    <input type="text" placeholder="Enter OTP recieved on Email" />
  </div>
  <div class="form-field">
     <button type="button" data-value="step3" id="step2" class="roll-btn full-btn click_button" >Next</button>
     <button type="button" data-value="step1" class="roll-btn full-btn click_button">Back</button>
  </div>
  <p><a href="<?php echo $base_url?>login.php" >Return To Login</a></p>
</div>

<!--step3-->

<!-- <div class="log-pg-hds">Reset ASP PIN</div>-->
<!--  <div class="log-pg-optn"><a href="#"><strong>Support</strong></a></div>-->
<!--</div>-->
<div class="general-form remove step3" style="display:none;">
     <!--<h3 style="text-align:center;margin-bottom:30px;">Reset ASP PIN</h3>-->
  <div class="form-field">
    <a href="#" class="send-btn-fl"><i class="fa fa-mobile-alt"></i>Send OTP on Phone</a>
  </div>
  <div class="form-field">
    <input type="text" placeholder="Enter OTP recieved on Phone" />
  </div>
  <div class="form-field">
     <button type="button" data-value="step4" class="roll-btn full-btn click_button" >Next</button>
     <button type="button" data-value="step2" class="roll-btn full-btn click_button">Back</button>
  </div>
  <p><a href="<?php echo $base_url?>login.php" >Return To Login</a></p>
</div>

<!--step4-->

<!--<div class="log-pg-hds">Reset Password</div>-->
<!--  <div class="log-pg-optn"><a href="#"><strong>Support</strong></a></div>-->
<!--</div>-->
<div class="general-form remove step4" style="display:none;">
    <!--<h3 style="text-align:center;margin-bottom:30px;">Reset Password</h3>-->
  <div class="form-field">
  <input type="text" placeholder="Type 4 digit New ASP PIN" />
  </div>
  <div class="form-field">
  <input type="text" placeholder="Retype 4 digit New ASP PIN" />
  </div>
  <div class="form-field">
     <button type="button" data-value="step5" id="step4" class="roll-btn full-btn" >Update ASP PIN</button>
      <button type="button" data-value="step3" class="roll-btn full-btn click_button">Back</button>
  </div>
  <p><a href="<?php echo $base_url?>login.php" >Return To Login</a></p>
</div>

<!--step5-->
<!-- <div class="log-pg-hds">Quick Reset Password</div>-->
<!--  <div class="log-pg-optn"><a href="#"><strong>Support</strong></a></div>-->
<!--</div>-->
<!--<div class="general-form step5 remove" style="display:none;">-->
<!--      <h3 style="text-align:center;margin-bottom:30px;">Quick Reset Password</h3>-->
<!--  <p class="sim-pera">Not interested to change Account password ? skip it</p>-->
<!--  <div class="form-field">-->
<!--  <input type="text" placeholder="Type New Password" />-->
<!--  </div>-->
<!--  <div class="form-field">-->
<!--  <input type="text" placeholder="Retype New Password" />-->
<!--  </div>-->
<!--  <div class="form-field">-->
<!--     <button type="button" data-value="" id="" class="roll-btn full-btn" >Update Password</button>-->
<!--     <button type="button" data-value="step4" class="roll-btn full-btn click_button">Back</button>-->
<!--  </div>-->
<!-- <p><a href="<?php echo $base_url?>login.php" >Return To Login</a></p>-->
<!--</div>-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".click_button").click(function(){
    var menu_name = $(this).data('value');
    hide(menu_name);
    // $( "#mob-usr-submenu" ).trigger( "click" );
  });
});

function hide(name){
    $('.remove').css('display','none');
    $('.'+name).css('display','block');
    
    // $('.click_button').css('color','#777777');
    // $('#'+name).css('color','green');
}
</script>




<?php include("footer.php"); ?>

<script src="js/datepicker.min.js"></script>
<script src="js/datepicker.en.js"></script>
<script>
$('.select-date').datepicker({
    language: 'en',
    maxDate: new Date(), // Now can select only dates, which goes after today
});
</script>
</body>
</html>