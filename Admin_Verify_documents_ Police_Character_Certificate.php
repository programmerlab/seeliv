<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Verify Police Character Certificate</title>
<link href="css/datepicker.min.css" rel="stylesheet" type="text/css">
<?php include("head.php") ?>
</head>

<body>
<!--<?php include("Admin_Verify_header.php"); ?>-->
<?php include('includes/admin_header.php');?>
<!--<section class="side-bar">-->
<!--  <div class="side-bar-content">-->
<!--    <div class="search-list-item"><input type="text" placeholder="Search here"></div>-->
<!--    <div class="sidebar-list">-->
<!--    <ul class="fa-ul">-->
<!--                                <li><a class="active" href="#"><span class="fa-li"><i class="fas fa-passport"></i></span>Passport Size Picture</a></li>-->
<!--                                <li><a href="#"><span class="fa-li"><i class="fas fa-id-card-alt"></i></span>Account Owner Id Card Picture</a></li>-->
<!--                                <li><a href="#"><span class="fa-li"><i class="far fa-play-circle"></i></span>Introduction Video</a></li>-->
<!--                                <li><a href="#"><span class="fa-li"><i class="fas fa-medal"></i></span>Academic Degrees</a></li>-->
<!--                                <li><a href="#"><span class="fa-li"><i class="fas fa-certificate"></i></span>Teaching Certificate</a></li>-->
<!--                                <li><a href="#"><span class="fa-li"><i class="fas fa-shield-alt"></i></span>Police Character Certificate</a></li>-->
<!--                                <li><a href="#"><span class="fa-li"><i class="fas fa-notes-medical"></i></span>Medical / Physical Report</a></li>-->
<!--                                <li><a href="#"><span class="fa-li"><i class="fas fa-file-alt"></i></span>School License Picture</a></li>-->
<!--                          </ul>-->
<!--                          </div>-->
<!--  </div>-->
<!--</section>-->
<div class="content">
  <div class="content-data">
  <div class="content-in">
    <div class="content-fix-head with-lf-rgt">
       <button id="tog-more-all">Show more</button>
       <h1>Police Character Certificate</h1>
       <div class="usr-mail-tool">
        <ul>
          <li class="ml-tl-lnk"><label>
         <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span> </label>
                            Auto Verify</label></li>
          <li><a href="#" id="expand-main"><i class="fas fa-arrows-alt"></i></a></li>
        </ul>
      </div>
       <div class="filter-form">
         <div class="form-fl form-fl-full form-5"><!--
           <div class="mob-filter-head"><button id="filter-close"><i class="fa fa-arrow-left"></i></button><p>State Search</p></div>-->
           <div class="o-b-one">
             <div class="for-lbl lft-txt-fr">Location</div>
             <select>
             <option>All Countries</option>
             <option>----</option>
             <option>----</option>
             </select>
           </div>
           <div class="o-b-one">
             <div class="for-lbl"></div>
             <select>
             <option>All States</option>
             <option>----</option>
             <option>----</option>
             </select>
           </div>
           <div class="t-b-one">
           <div class="for-lbl"><label><input checked="checked" type="radio" name="lbl-dte-for-rng" /><i class="roll-chk-show"></i>All</label><label><input type="radio"  name="lbl-dte-for-rng" /><i class="roll-chk-show"></i>Requested On</label><label><input type="radio" name="lbl-dte-for-rng" /><i class="roll-chk-show"></i>Varified On</label></div>
           <input type="text" readonly="readonly" data-date-format="yyyy-mm-dd" data-range="true" data-multiple-dates-separator=" - " placeholder="Select Date Range" class="from-date datepicker-here" data-language='en' ><button type="submit"><i class="fa fa-search"></i></button></div>
           <div class="t-b-one">
           <div class="for-lbl"><label><input checked="checked" type="radio" name="lbl-sel-for" /><i class="roll-chk-show"></i>All</label><label><input type="radio" name="lbl-sel-for" /><i class="roll-chk-show"></i>Requested On</label><label><input type="radio" name="lbl-sel-for" /><i class="roll-chk-show"></i>Varified On</label></div>
           <input type="text" readonly="readonly" data-date-format="yyyy-mm-dd" class="select-date datepicker-here" placeholder="Enter Date" ><button type="submit"><i class="fa fa-search"></i></button></div>
           <div class="t-b-one">
           <div class="for-lbl for-lbl-4">
             <label><input checked="checked" type="radio" name="lbl-id-for" /><i class="roll-chk-show"></i>All</label>
             <label><input type="radio" name="lbl-id-for" /><i class="roll-chk-show"></i>AC-ID</label>
             <label><input type="radio" name="lbl-id-for" /><i class="roll-chk-show"></i>AP-ID</label>
             <label><input type="radio" name="lbl-id-for" /><i class="roll-chk-show"></i>Email</label>
             <label><input type="radio" name="lbl-id-for" id="srch-tog-0" /><i class="roll-chk-show"></i>Phone</label>
           </div>
           <input type="text" placeholder="Search here" id="srch-tog-1" >
           <input type="text" placeholder="+86" id="srch-tog-2" >
           <button type="submit"><i class="fa fa-search"></i></button></div>
         </div>
       </div>   
       <div class="table-options opt-wth-chks">
         <div class="all-sel"><label class="chk-bx"><input type="checkbox" /><i class="fa fa-check-square"></i></label> <a id="edit-mod">Edit</a></div>
         <div class="mob-page-tool">
           <ul>
             <li>
               <button class="mob-fil-sh filt-click" id="filter-open"><i class="fa fa-search"></i></button>
             </li>
             
             <li>
               <button class="mob-fil-sh filt-click" id="fill-optn"><i class="fa fa-filter"></i></button>
               <div class="filter-bt-bl"></div>
             </li>
             <li>
               <button class="mob-fil-sh filt-click" id="fill-sort"><i class="fa fa-sort"></i></button>
             </li>
           </ul>
         </div>
         <div class="sort-option">
           <!--<button class="sort-button roll-filter"><i class="fa fa-filter"></i></button>-->
           <ul>
             <li><button class="sort-button active">Verification In Pending</button></li>
             <li><button class="sort-button">Verification Completed</button></li>
             <li><button class="sort-button">Overall Requests</button></li>
           </ul>
         </div>
         <div class="table-pagging">
           <a href="#">&lt;</a>
           <a href="#">1</a>
           <a href="#">2</a>
           <a href="#">3</a>
           <a href="#" class="last-btn-pg">&gt;</a>
           <div class="pagging-opt">
             
              <a class="chk-icn" href="#"><img src="images/time.png" /></a>
              <a class="chk-icn" href="#"><img src="images/Verify.png" /></a>
              <a class="rmv-icn" href="#"><img src="images/Reject.png" /></a>
              <!--<a class="chk-icn" href="#"><i class="fa fa-check-circle"></i></a>
              <a class="rmv-icn" href="#"><i class="fa fa-remove"></i></a>-->
           </div>
         </div>
       </div>
    </div>
    <div class="main-content">
       <h4 class="result-flag">512 results</h4>
      <div class="table-list country-table for-usr-wt-img">
        <div class="table-row">
          <label class="chk-bx"><input type="checkbox" /><i class="fa fa-check-square"></i></label>
          <div class="cnt-top">
          <div class="country-name">
           <div class="usr-img-unvr">
             <img src="images/22.png" />
           </div>
           <div>Unverified User<br/><span class="unv-usrNm"><img src="images/triplearrow.png">Kamran Ali</span></div>
          </div>
          </div>
          <div class="cnt-btom tog-expand">
           <div class="row-list">
           <ul>
                                
                                                   <li><img src="images/currentLocation.png"><span>Punjab, India</span></li>
                                                   <li><img src="images/compass.png"><span>Geo Stamp</span></li>
                                                   <li><img src="images/lastlogin.png"><span>Last Login Location</span></li>
                                                    <li><img src="images/icon53.png"><span>23 March 2018  10:10:20</span></li>
                                                     <li><img src="images/Verify1.png"><span>Verification in Pending</span> </li>
                                                    <li><img src="images/icon53.png"><span>24 March 2018 10:10:20</span></li>
                                                      <li><img src="images/icon10.png"><span>Kamran Ali </span></li>
                                                       <li><img src="images/icon22.png"><span>36363636763746</span></li>
                                             </ul>
                                             
          <div class="row-option"><a href="#">Edit</a></div>
          </div>
          </div>
          <div class="row-fix-optn">
            <!--<ul>
              <li><a class="p-icn" href="#">P</a></li>
              <li><a class="n-icn" href="#">N</a></li>
              <li><a class="imgs-icn" href="#"><img src="images/icon13.png" /></a></li>
              <li><a class="chk-icn" href="#"><i class="fa fa-check-circle"></i></a></li>
              <li><a class="rmv-icn" href="#"><i class="fa fa-remove"></i></a></li>
            </ul>-->
            <ul>
              <li><a class="p-icn" href="#"><img src="images/ReplaceP.png" /></a></li>
              <li><a class="n-icn" href="#"><img src="images/ReplaceN.png" /></a></li>
              <li><a class="imgs-icn" href="#"><img src="images/download.png" /></a></li>
              <li><a class="n-icn" href="#"><img src="images/Verify.png" /></a></li>
              <li><a class="rmv-icn" href="#"><img src="images/Reject.png" /></a></li>
            </ul>
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
})
$('.select-date').datepicker({
    language: 'en',
    maxDate: new Date(), // Now can select only dates, which goes after today
	//range: true
})
</script>
</body>
</html>