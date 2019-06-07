<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Reset Password</title>
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
  <div class="log-pg-hds">Reset Password</div>
  <div class="log-pg-optn"><a href="#"><strong>Support</strong></a></div>
</div>

<!--step1-->
<div class="general-form remove step1">
  <div class="form-field">
    <div class="cnt-sort  for-mobile-mod active"><input type="text" /><div class="cnt-optn"></div></div>
    <div class="for-email-mod"><input type="text" placeholder="Email / Account ID / Approval ID" /></div>
  </div>
  <div class="form-field">
  <input type="text" placeholder="Enter ASP Pin" />
  </div>
  <p class="lnk-two">
  <a href="#" class="send-log-mod">Reset Via Email / IDs</a>
  <a href="<?php echo $base_url?>Reset_ASP_Pin.php">Forget ASP Pin</a>
  </p>
  <div class="form-field">
  <button type="button" data-value="step2" class="roll-btn full-btn click_button" >Next</button>
  </div>
  <p><a href="<?php echo $base_url?>login.php" >Return To Login</a></p>
</div>


<!--step2-->
<div class="general-form remove step2" style="display:none;">
  <div class="form-field">
    <a href="#" class="send-btn-fl for-mobile-mod active"><i class="fa fa fa-mobile-alt"></i>Send OTP on Phone</a>
    <a href="#" class="send-btn-fl for-email-mod"><i class="fa fa-envelope"></i>Send OTP on Email</a>
  </div>
  <div class="form-field">
    <div class="cnt-sort  for-mobile-mod active"><input type="text" placeholder="Enter OTP recieved on Phone" /><div class="cnt-optn"></div></div>
    <div class="for-email-mod"><input type="text" placeholder="Enter OTP recieved on Email" /></div>
  </div>
  <p class="lnk-two">
  <a href="#" class="send-log-mod" data-snd="onl-mail" >Reset Via Email</a>
  </p>
  <div class="form-field">
    <button type="button" data-value="step3" class="roll-btn full-btn click_button" >Next</button>
     <button type="button" data-value="step1" class="roll-btn full-btn click_button">Back</button>
  </div>
   <p><a href="<?php echo $base_url?>login.php" >Return To Login</a></p>
</div>

<!--step3-->

<div class="general-form remove step3" style="display:none;">
  <div class="form-field">
  <input type="text" placeholder="Type New Password" />
  </div>
  <div class="form-field">
  <input type="text" placeholder="Retype New Password" />
  </div>
  <div class="form-field">
    <button type="button" data-value=""class="roll-btn full-btn click_button" >Update Password</button>
     <button type="button" data-value="step2" class="roll-btn full-btn click_button">Back</button>
  </div>
  <p><a href="<?php echo $base_url?>login.php" >Return To Login</a></p>
</div>



<!--Script-->
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
    
    $('.click_button').css('color','#777777');
    $('#'+name).css('color','green');
}
</script>


<?php include("footer.php"); ?>
</body>
</html>