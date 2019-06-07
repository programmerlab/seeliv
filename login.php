<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Account login</title>
<?php include("head.php") ?>
<?php include("includes/config.php") ?>
</head>

<body class="log-body" >
<div class="scan-qr-wrap">
<a id="closeQr"><i class="fa fa-close"></i></a>
<div class="scan-qr">
        <img src="images/qr.png" />
        <a href="#" class="reload-qr"><i class="fa fa-repeat"></i>Click to reload QR code</a>
      </div>
</div>
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
  <div class="log-pg-hds">Account login</div>
  <div class="log-pg-optn"><a id="suptSelBtn" href="#"><!--<i class="fa fa-question"></i>--><strong>Support</strong></a>
  <div class="sup-sectn">
    <form>
      <div class="field">
       <input type="text" placeholder="Name" />
    </div>
      <div class="field">
       <input type="text" placeholder="Email" />
    </div>
      <div class="field">
       <input type="text" placeholder="Mobile" />
    </div>
      <div class="field">
       <select><option>--Select Option--</option></select>
    </div>
    <div class="field">
      <textarea></textarea>
    </div>
    <div class="log-btn">
      <button type="submit" class="btn" >Support</button>
    </div>
    </form>
  </div>
  </div>
</div>
<div class="login-form">
  <!--<a href="#" class="oth-log-pnl"><span></span></a>-->
  <div class="top-log-fields">
    <div class="log-via-social">
      <div class="for-logo"><img src="" /></div>
      <div class="otr-log-otn">
      <div class="social-links active">
        <a href="#" class="qrLog qr-show"><i class="fa fa-qrcode"></i>Login With QR Code</a>
        <a href="#" class="wChat qr-show"><i class="fab fa-wechat"></i>Login With Linked Wechat</a>
        <a href="#" class="gPlus"><i class="fab fa-google-plus-square"></i>Login With Linked Google</a>
        <a href="#" class="fBook"><i class="fab fa-facebook-f"></i>Login With Linked Facebook</a>
        <a href="#" class="lIn"><i class="fab fa-twitter"></i>Login With Linked Twitter</a>
      </div>
      </div>
    </div>
    <div class="log-via-qr"></div>
  </div>
  <div class="or-div">OR</div>
  <div class="bottom-log">
    <div class="field for-mobile-mod active">
     <div class="code-sort">
       <input type="text" />
       <div class="code-option">
         
       </div>
     </div>
    </div>
    
    <div class="field for-email-mod">
       <input type="text" placeholder="Email / Account ID / Approval ID" />
    </div>
    <div class="field">
      <input type="password" placeholder="Password" />
    </div>
    <div class="txt-lnk">
      <a href="#" class="chng-log-mod">Change Login Mode</a>
      <a href="<?php echo $base_url?>Reset_Password.php" class="fl-r-lnk">Forget Password</a>
    </div>
    <div class="log-btn">
      <button type="submit" class="btn" >Login</button>
    </div>
    <p>
      Don't have an account? <a href="<?php echo $base_url?>signup.php">Create account</a>
    </p>
  </div>
</div>
<?php include("footer.php"); ?>
</body>
</html>