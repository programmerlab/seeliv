<?php
session_start();
if($_SESSION['email']==""){
    echo "<script>window.location.href='index.php'</script>";
		die;
}
?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Account Summary</title>
<link href="css/datepicker.min.css" rel="stylesheet" type="text/css">
<?php include("head.php") ?>
</head>

<body>

<?php include('includes/admin_header.php');?>


<div class="content">
  <div class="content-data">
  <div class="content-in">
    <div class="content-fix-head">
       <h1>Account Summary</h1>
       <div class="usr-mail-tool">
        <ul>
          <li><a href="#" id="expand-main"><i class="fas fa-arrows-alt"></i></a></li>
        </ul>
      </div>
       <div class="filter-form">
         <div class="form-fl form-5 form-fl-full">
           <div class="o-b-one">
             <select>
             <option>All Countries</option>
             <option>----</option>
             <option>----</option>
             </select>
           </div>
           <div class="t-b-one"><input type="text" readonly="readonly" data-date-format="yyyy-mm-dd" data-range="true" data-multiple-dates-separator=" - " placeholder="From - To" class="from-date datepicker-here" data-language='en' ><button type="submit"><i class="fa fa-search"></i></button></div>
           <div class="t-b-one tbtn-t"><button type="submit" class="ovrall-bt">Overall</button><button type="submit" class="today-bt">Today</button></div>
           <div class="t-b-one"><input type="text" readonly="readonly" data-date-format="yyyy-mm-dd" class="select-date datepicker-here" placeholder="Enter Date" ><button type="submit"><i class="fa fa-search"></i></button></div>
           <div class="o-b-one wth-dwn">
           <select>
             <option>Select From Past</option>
             <option>----</option>
             <option>----</option>
             </select>
           <button type="submit" class="dwln-bt"><i class="fa fa-download"></i></button>
           </div>
         </div>
       </div>
       <div class="table-options sing-tb-Mob-op">
       <div class="mob-page-tool">
           <ul>
             <li>
               <button class="mob-fil-sh filt-click" id="filter-open"><i class="fa fa-search"></i></button>
             </li>
           </ul>
         </div>
         </div>
    </div>
    <div class="main-content">
      <div class="account-tools-block">
      <div class="acc-bages-wrp" >
      <div class="acc-bages">
        <a class="bgs-link">Create Account</a>
        <div class="bgs-acc">
          <div class="bgs-icon" style="background-color: #25a2b8;"><i class="fa fa-users"></i></div>
          <div class="bgs-detais">
            <h2>General Account</h2>
            <p><strong>Created : </strong><span>7</span></p>
            <p><strong>Deleted : </strong><span>2</span></p>
            <p><strong>Active : </strong><span>1800</span></p>
            <p><strong>Available : </strong><span>2200</span></p>
          </div>
        </div>
      </div>
      </div>
      <div class="acc-bages-wrp" >
      <div class="acc-bages">
        <a class="bgs-link">Create Account</a>
        <div class="bgs-acc">
          <div class="bgs-icon" style="background-color:#2ba745"><i class="fa fa-bank"></i></div>
          <div class="bgs-detais">
            <h2>School Account</h2>
            <p><strong>Created : </strong><span>7</span></p>
            <p><strong>Deleted : </strong><span>2</span></p>
            <p><strong>Active : </strong><span>1800</span></p>
            <p><strong>Available : </strong><span>2200</span></p>
          </div>
        </div>
      </div>
      </div>
      <div class="acc-bages-wrp" >
      <div class="acc-bages">
        <a class="bgs-link">Create Account</a>
        <div class="bgs-acc">
          <div class="bgs-icon"  style="background-color:#fdc10a"><i class="fa fa-user"></i></div>
          <div class="bgs-detais">
            <h2>Admin Account</h2>
            <p><strong>Created : </strong><span>7</span></p>
            <p><strong>Deleted : </strong><span>2</span></p>
            <p><strong>Active : </strong><span>1800</span></p>
            <p><strong>Available : </strong><span>2200</span></p>
          </div>
        </div>
      </div>
      </div>
      </div>
    </div>
  </div>
  </div>
</div>
</main>
<?php include("footer.php"); ?>

<script src="js/datepicker.min.js"></script>
<script src="js/datepicker.en.js"></script>
<script>
$('.from-date').datepicker({
    language: 'en',
    maxDate: new Date(), // Now can select only dates, which goes after today
	range: true
});
$('.select-date').datepicker({
    language: 'en',
    maxDate: new Date(), // Now can select only dates, which goes after today
});
</script>
</body>
</html>