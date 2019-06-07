<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Welcome To Signup</title>
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
  <div class="log-pg-hds">Sign-Up</div>
  <div class="log-pg-optn"><a href="#"><strong>Support</strong></a></div>
</div>



<div class="usr-sign-up remove signup-1" >
 <div class="sign-up-wrp">
  <div class="sign-up-sectn">
    <div class="roll-fr-log" style="background: #25a2b8;"><i class="fa fa-users"></i></div>
    <div class="log-fr-cnts">
      <h2><i class="fa fa-users"></i>General Account</h2>
      <p>General Account is <strong>Multi-functional</strong> account for Students, Teachers
as well as for Local Users.</p>
      <ul>
      <li>After signed up, You will be able to instant log-in to your account.</li>
<li>In case of providing wrong information, you will be requested to
provide Personal documents for account verification.</li>
<li>In case of providing fake information, your account can be blocked
Temporarily or permanently.</li>

      </ul>
      <div>
        <label class="chk-bx roll-chkbx"><input type="checkbox" /><i class="fa fa-check-square"></i></label>Agreed to our <a href="#">Terms</a>, <a href="#">Data Policy</a> & <a href="#">Cookies Policy</a>.

      </div>
      <a data-value="signup" class="roll-bt click_button">Sign-Up Now For Free</a>
    </div>
  </div>
  <p>Already have an account? <a href="<?php echo $base_url?>login.php" >Login</a></p>
  </div>
 <div class="sign-up-wrp">
  <div class="sign-up-sectn">
    <div class="roll-fr-log" style="background: #2ba745;"><i class="fa fa-bank"></i></div>
    <div class="log-fr-cnts">
      <h2><i class="fa fa-bank"></i>School Account</h2>
      <p>School Account is <strong>Multi-functional</strong> account for Educational Institute, 
School & Organizations.</p>
      <ul>
      <li>After signed up, You will be able to instant log-in to your account.</li>
<li>In case of providing wrong information, you will be requested to
provide Personal documents for account verification.</li>
<li>In case of providing fake information, your account can be blocked
Temporarily or permanently.</li>

      </ul>
      <div>
        <label class="chk-bx roll-chkbx"><input type="checkbox" /><i class="fa fa-check-square"></i></label>Agreed to our <a href="#">Terms</a>, <a href="#">Data Policy</a> & <a href="#">Cookies Policy</a>.

      </div>
      <a data-value="signup" class="roll-bt click_button">Sign-Up Now For Free</a>
    </div>
  </div>
  <p>Already have an account? <a href="<?php echo $base_url?>login.php" >Login</a></p>
  </div>
</div>

<!--General Account Signup-->

<div class="general-form remove main signup" style="display:none">
    <h5 style="text-align:center;margin-bottom:30px;">Verify Your Phone Number</h5>
  <div class="form-field">
    <div class="cnt-sort field-75"><input type="text" /><div class="cnt-optn"></div></div>
    <button type="submit" class="roll-btn field-25" >Send OTP</button>
  </div>
  <div class="form-field">
  <input type="text" placeholder="Enter OTP received on Phone" />
  </div>
  <div class="form-field">
    <button type="button" data-value="step1" class="roll-btn full-btn">Next</button>
     <button type="button" data-value="signup-1" class="roll-btn full-btn click_button">Back</button>
  </div>
  <p>Already have an account? <a href="<?php echo $base_url?>login.php" >Login</a></p>
</div>


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
</body>
</html>