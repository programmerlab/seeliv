<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>School Account Restriction</title>
<?php include("head.php") ?>
</head>

<body>
<?php include('includes/admin_header.php');?>
<?php include("includes/Admin_Update_header.php"); ?>
<main>
<section class="side-bar">
  <div class="side-bar-content">
    <div class="search-list-item lft-side-sort">
    <div class="sort-option option-sort-3">
            <ul>
            <li><button class="sort-button"><a href="<?php echo $base_url?>restriction_general_account.php">General Account</a></button></li>
             <li><button class="sort-button"><a href="<?php echo $base_url?>restriction_School_account.php">School Account</a></button></li>
             <li><button class="sort-button"><a href="<?php echo $base_url?>restriction_Attendant_account.php">Attendant Account</a></button></li>
           </ul>
         </div>
     
    <div class="sort-option">
           <ul>
             <li><button class="sort-button">General</button></li>
             <li><button class="sort-button active">Country</button></li>
             <li><button class="sort-button">State</button></li>
           </ul>
         </div>
    <input type="text" placeholder="Search here"></div>
    <div class="sidebar-list">
    <ul class="fa-ul">
                                <li><a class="active" href="#"><span class="fa-li"><i class="fas fa-user-plus"></i></span>New Account Sign-up</strong></a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-sign-in-alt"></i></span>Existing Account login</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-user-md"></i></span>Changing Coordinator</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-wallet"></i></span>Top-up Fund</strong></a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-money-check-alt"></i></span>Withdraw Fund</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-comments-dollar"></i></span>National fund Transfer</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-comments-dollar"></i></span>International fund Transfer</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-hand-holding-usd"></i></span>National fund Collection</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-hand-holding-usd"></i></span>International fund Collection</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-user-plus"></i></span>Adding New Friends</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-podcast"></i></span>Broadcast Service</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-calendar-alt"></i></span>1-on-1 Chat Calendar Access</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-microphone"></i></span>1-on-1 Chat Microphone Access</a></li>
                                <li><a href="#"><span class="fa-li"><i class="far fa-images"></i></span>1-on-1 Chat Gallery Access</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-camera"></i></span>1-on-1 Chat Camera Access</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-print"></i></span>1-on-1 Chat Documents Access</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-comment-dots"></i></span>1-on-1 Chat Outgoing message</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-comment-dots"></i></span>1-on-1 Chat Incoming message</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-phone-volume"></i></span>1-on-1 Chat Outgoing Audio call</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-phone-volume"></i></i></span>1-on-1 Chat Incoming audio call</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-video"></i></span>1-on-1 Chat Outgoing video call</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-video"></i></span>1-on-1 Chat Incoming video call</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-heart"></i></span>1-on-1 Chat Favorite Sharing</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-map-marker-alt"></i></span>1-on-1 Chat Location Sharing</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-address-book"></i></span>1-on-1 Chat Contact Card Sharing</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-users"></i></span>Creating New Group</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-calendar-alt"></i></span>Group Chat Calendar Access</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-microphone"></i></span>Group Chat Microphone Access</a></li>
                                <li><a href="#"><span class="fa-li"><i class="far fa-images"></i></span>Group Chat Gallery Access</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-camera"></i></span>Group Chat Camera Access</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-print"></i></span>Group Chat Documents Access</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-comment-dots"></i></span>Group Chat Outgoing message</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-comment-dots"></i></span>Group Chat Incoming message</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-phone-volume"></i></span>Group Chat Outgoing Audio call</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-phone-volume"></i></i></span>Group Chat Incoming audio call</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-video"></i></span>Group Chat Outgoing video call</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-video"></i></span>Group Chat Incoming video call</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-heart"></i></span>Group Chat Favorite Sharing</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-map-marker-alt"></i></span>Group Chat Location Sharing</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-address-book"></i></span>Group Chat Contact Card Sharing</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-calendar-alt"></i></span>Enrollment Chat Calendar Access</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-microphone"></i></span>Enrollment Chat Microphone Access</a></li>
                                <li><a href="#"><span class="fa-li"><i class="far fa-images"></i></span>Enrollment Chat Gallery Access</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-camera"></i></span>Enrollment Chat Camera Access</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-print"></i></span>Enrollment Chat Documents Access</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-comment-dots"></i></span>Enrollment Chat Outgoing message</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-comment-dots"></i></span>Enrollment Chat Incoming message</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-phone-volume"></i></span>Enrollment Chat Outgoing Audio call</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-phone-volume"></i></i></span>Enrollment Chat Incoming audio call</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-video"></i></span>Enrollment Chat Outgoing video call</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-video"></i></span>Enrollment Chat Incoming video call</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-heart"></i></span>Enrollment Chat Favorite Sharing</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-map-marker-alt"></i></span>Enrollment Location Sharing</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-address-book"></i></span>Enrollment Chat Contact Card Sharing</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-file"></i></span>Job Posting & Teacher Hiring</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-graduation-cap"></i></span>Scholarship Posting</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-book"></i></span>Program Posting</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-signature"></i></span>Show of scholarships’ School Name</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-globe-asia"></i></span>Show of scholarships’ School website</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-poll"></i></span>Creating, Posting & Releasing Test</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-chalkboard-teacher"></i></span>New Session Creation</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-calendar-check"></i></span>Classes Schedule & Attendance</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-ticket-alt"></i></span>Ticket Booking</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-trash-alt"></i></span>Auto-Deleting Message</a></li>
        </li>
      </ul>
    </div>
  </div>
</section>
<div class="content">
  <div class="content-data">
  <div class="content-in">
    <div class="content-fix-head">
       <h1>New Account Sign-up</h1>
       <div class="filter-form wth-paggng">
         <div class="form-fl form-4">
           <div class="t-b-one"><input type="text" placeholder="Country id" ><button type="submit"><i class="fa fa-search"></i></button></div>
           <div class="o-b-one">
             <select>
             <option>Select Country</option>
             <option>Pakistan</option>
             <option>India</option>
             </select>
           </div>
           <div class="o-b-one">
             <select>
             <option>Select Action</option>
             <option>Active Countries</option>
             <option>Restricted Countries</option>
             <option>Single action required</option>
             <option>Multiple action required</option>
             </select>
           </div>
           <div class="t-b-one"><input type="text" placeholder="Country Name" ><button type="submit"><i class="fa fa-search"></i></button></div>
         </div>
         <div class="mob-page-tool">
           <ul>
             <li>
               <button class="mob-fil-sh filt-click" id="filter-open"><i class="fa fa-search"></i></button>
             </li>
           </ul>
         </div>
         <div class="table-pagging">
           <a href="#">&lt;</a>
           <a href="#">1</a>
           <a href="#">2</a>
           <a href="#">3</a>
           <a href="#">&gt;</a>
         </div>
       </div> 
    </div>
    <div class="main-content">
      <div class="acc-set-tog">
        <h4>150 results</h4>
        <div class="set-sectn">
          <div class="set-sctn-row set-bold-txt">
            <div class="set-scn-lbl">India</div>
            <div class="set-cnt-code">631</div>
          </div>
          <div class="set-sctn-row">
            <div class="set-scn-lbl">Restrict</div>
            <div class="set-action">
                  <div class="sidebtn ">
                    <ul>
                    <li> <a href="">
                        <label class="switch">
                          <input type="checkbox">
                          <span class="slider round"></span> </label>
                        </a> </li>
                    </ul>
                  </div> 
                  </div>
          </div>
          <div class="set-sctn-row">
            <div class="set-scn-lbl">Single Action Required</div>
            <div class="set-action">
                  <div class="sidebtn ">
                    <ul>
                    <li> <a href="">
                        <label class="switch">
                          <input type="checkbox">
                          <span class="slider round"></span> </label>
                        </a> </li>
                    </ul>
                  </div> 
                  </div>
          </div>
          <div class="set-sctn-row">
            <div class="set-scn-lbl">Multiple Action Required</div>
            <div class="set-action">
                  <div class="sidebtn ">
                    <ul>
                    <li> <a href="">
                        <label class="switch">
                          <input type="checkbox">
                          <span class="slider round"></span> </label>
                        </a> </li>
                    </ul>
                  </div> 
                  </div>
          </div>
          <div class="set-sctn-row-cntr">Verify Identity <a href="#">Edit</a></div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
</main>
<?php include("footer.php"); ?>
</body>
</html>