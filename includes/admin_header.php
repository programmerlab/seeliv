<?php include('config.php');
?>

<header>
  <div class="mob-header">
    <div class="mob-menu"><a id="mob-usr-menu" href="#"><img src="images/22.png" /></a></div>
    <div class="mob-menu"><a id="mob-usr-submenu" href="#"><img src="images/list.png" /></a></div>
    <div class="mob-menu"><a id="mob-usr-panel"  href="#"><img src="images/dotlist.png" /></a></div>
    <div class="mob-menu"><a id="mob-usr-optn" href="#"><img src="images/22.png" /></a></div>
  </div>
  <div class="header-top">
    <div class="menu-block">
    <div class="school-info">
      <div class="profile-pic"> <img src="images/22.png" /> </div>
      <div class="school-name">
        <div>global institute</div>
        <div>school: R932749380310</div>
      </div>
    </div>
    <div class="header-form">
      <form>
        <div class="in-form">
          <input class="tx-box" type="text" placeholder="+86" name="search2">
          <button class="tx-btn" type="submit">Search</button>
        </div>
        <div class="in-form">
          <input class="tx-box" type="text" placeholder="Email / Account Id / Approval Id" name="search2">
          <button class="tx-btn" type="submit">Search</button>
        </div>
      </form>
    </div>
    
    <div class="main-menu">
      <div class="nn-MenuNav_Wrapper">
        <nav id="pnProductNav" class="nn-MenuNav">
          <div id="pnProductNavContents" class="nn-MenuNav_Contents"> 
            <a data-value="search2" id="search2" class="nn-MenuNav_Link click_button"><i class="fas fa-search "></i>Search</a>
            <a data-value="verify2" id="verify2" class="nn-MenuNav_Link click_button"><i class="fas fa-check-circle "></i>Verify</a>
            <a data-value="review2" id="review2" class="nn-MenuNav_Link click_button"><i class="fa fa-globe "></i>Review</a>
            <a data-value="moniter2" id="moniter2" class="nn-MenuNav_Link click_button"><i class="fa fa-eye "></i>Monitor</a>
            <a data-value="email2" id="email2" class="nn-MenuNav_Link click_button"><i class="fa fa-envelope-open "></i>Email</a>
            <a data-value="support2" id="support2" class="nn-MenuNav_Link click_button"><i class="fas fa-question-circle "></i>Support</a>
            <a data-value="finance2" id="finance2" class="nn-MenuNav_Link click_button"><i class="fa fa-briefcase"></i>Finance </a>
            <a data-value="update2" id="update2" class="nn-MenuNav_Link click_button"><i class="fa fa-atom"></i>Update</a>
            <a data-value="home2" id="home2" class="nn-MenuNav_Link click_button" style="color:green;"><i class="fa fa-home"></i>Home</a>
            <span id="pnIndicator" class="nn-MenuNav_Indicator"></span> </div>
        </nav>
        <button id="pnAdvancerLeft" class="pn-Advancer pn-Advancer_Left" type="button">
        <svg class="pn-Advancer_Icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 551 1024">
          <path d="M445.44 38.183L-2.53 512l447.97 473.817 85.857-81.173-409.6-433.23v81.172l409.6-433.23L445.44 38.18z"/>
        </svg>
        </button>
        <button id="pnAdvancerRight" class="pn-Advancer pn-Advancer_Right" type="button">
        <svg class="pn-Advancer_Icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 551 1024">
          <path d="M105.56 985.817L553.53 512 105.56 38.183l-85.857 81.173 409.6 433.23v-81.172l-409.6 433.23 85.856 81.174z"/>
        </svg>
        </button>
      </div>
    </div>
    </div>
    
    
    <div class="user-block">
      <a href="#"><img src="images/22.png" /></a>
      <div class="user-log">
        <a href="<?php echo $base_url;?>Admin_my_Account.php?menu=home2&sub=basic2"><i class="fa fa-user"></i> My Account</a>
        <a href="action/logout.php"><i class="fa fa-sign-out-alt"></i> Sign Out</a>
      </div>
    </div>
    
  </div>
  
  
  <div class="header-bottom" id="hidediv">
      <ul class="sub-menu home2 remove">
        <li><a data-value="basic2" id="basic2" class="click_sub_button"><i class="fa fa-briefcase"></i>Summary</a></li>
      </ul>
      
      <ul class="sub-menu update2 remove" style="display:none;">
        <li><a data-value="profile2" id="profile2" class="click_sub_button"><i class="fab fa-sellsy"></i>Content</a></li>
        <li><a data-value="content2" id="content2" class="click_sub_button"> <i class="fas fa-users-cog"></i>Profile</a></li>
        <li><a data-value="pcharge2" id="pcharge2" class="click_sub_button"><i class="fa fa-search-dollar"></i>P-charges</a></li>
        <li><a data-value="dcharge2" id="dcharge2" class="click_sub_button"><i class="fa fa-comment-dollar"></i>D-charges</a></li>
        <li><a data-value="dtax2" id="dtax2" class="click_sub_button"><i class="fas fa-dollar-sign"></i>D-Tax</a></li>
        <li><a ><i class="fab fa-alipay"></i>D-Paym</a></li>
        <li><a ><i class="fa fa-user-circle"></i>D-Account</a></li>
        <li><a data-value="register2" id="register2" class="click_sub_button"><i class="fa fa-ban"></i>Restriction</a></li>
        <li><a ><i class="fa fa-shield-alt"></i>Limitations</a></li>
        <li><a ><i class="fas fa-th-large"></i>Offensive Data</a></li>
        <li><a ><i class="fas fa-print"></i>cDocument</a></li>
      </ul>
      
      <ul class="sub-menu email2 remove" style="display:none;">
        <li><a data-value="inbox" id="inbox" href="<?php echo $base_url;?>Admin_email_inbox.php?menu=email2&sub=inbox"><i class="fa fa-envelope"></i>Inbox</a></li>
        <li><a data-value="compose" id="compose" href="<?php echo $base_url;?>Admin_email_compose-email.php?menu=email2&sub=compose"><i class="fa fa-envelope-open-text"></i>Sent</a></li>
        <li><a href=""><i class="fa fa-drafting-compass" ></i>Draft</a></li>
        <li><a href=""> <i class="fa fa-recycle" ></i>Junk</a></li>
        <li><a href=""> <i class="fa fa-trash" ></i>Delete</a></li>
      </ul>
      
      <ul class="sub-menu finance2 remove" style="display:none;">
        <li><a data-value="fin2" id="fin2" class="click_sub_button"><i class="fas fa-history"></i>Transaction History</a></li>
        <li><a ><i class="fas fa-chevron-circle-left"></i>Refund Applied</a></li>
        <li><a ><i class="fas fa-house-damage"></i>Reported Transaction</a></li>
        <li><a ><i class="fas fa-money-check-alt"></i>Company Income</a></li>
      </ul>
      
      <ul class="sub-menu moniter2 remove" style="display:none;">
        <li><a href=""><i class="fab fa-sellsy"></i>Content</a></li>
        <li><a href=""><i class="fas fa-users-cog"></i>Profile</a></li>
      </ul>
      
       <ul class="sub-menu review2 remove" style="display:none;">
        <li><a href=""><i class="fab fa-sellsy"></i>Content</a></li>
        <li><a href=""><i class="fas fa-users-cog"></i>Profile</a></li>
      </ul>
      
      <ul class="sub-menu search2 remove" style="display:none;">
        <li><a href=""><i class="fas fa-users"></i>Users</a></li>
        <li><a href=""><i class="fas fa-search-dollar"></i>Transaction</a></li>
        <li><a href=""><i class="fas fa-comments"></i>User Chat</a></li>
        <li><a href=""><i class="fas fa-comments-dollar"></i>E-Chat</a></li>
        <li><a href=""><i class="fas fa-address-card"></i>Resume</a></li>
        <li><a href=""><i class="fas fa-business-time"></i>Jobs</a></li>
        <li><a href=""><i class="fas fa-book"></i>Programs</a></li>
        <li><a href=""><i class="fas fa-graduation-cap"></i>Scholarships</a></li>
        <li><a href=""><i class="fas fa-school"></i>Schools</a></li>
        <li><a href=""><i class="fas fa-print"></i>Document</a></li>
      </ul>
      
      <ul class="sub-menu support2 remove" style="display:none;">
        <li><a data-value="g-inc" id="g-inc" href="<?php echo $base_url?>Admin_support_G_Inquiry.php?menu=support2&sub=g-inc"><i class="fa fa-question-circle"></i>G-inquiry</a></li>
        <li><a href=""><i class="fas fa-thumbs-up"></i>Suggestion</a></li>
        <li><a href=""><i class="fa fa-user-shield"></i>Login-Signup</a></li>
        <li><a href=""><i class="fa fa-user-secret"></i>Reported User</a></li>
      </ul>
      
      <ul class="sub-menu verify2 remove" style="display:none;">
        <li><a data-value="veri2" id="veri2" class="click_sub_button"><i class="fas fa-user-plus"></i>Signup</a></li>
        <li><a data-value="veri2" id="veri2" class="click_sub_button"><i class="fas fa-school"></i>Ranking</a></li>
        <li><a data-value="cont2" id="cont2" class="click_sub_button"><i class="fab fa-sellsy"></i>Content</a></li>
        <li><a data-value="verif2" id="verif2" class="click_sub_button"><i class="fas fa-users-cog"></i>Profile</a></li>
        <li><a data-value="doc2" id="doc2" class="click_sub_button"><i class="fas fa-print"></i>Documents</a></li>
      </ul>
      
        
      
    </div>
</header>
<main>


<!--qwer-->
<section class="side-bar">
    
    <div class="side-bar-content">
        <div class="search-list-item"><input type="text" placeholder="Search here"></div>
        <div class="sidebar-list">
   
                <ul class="fa-ul remove1 basic2">
                    <li><a class="active" href="<?php echo $base_url?>home.php"><span class="fa-li"><i class="fa fa-briefcase"></i></span>Account Summary</a></li>
                </ul>
   
                <ul class="fa-ul remove1 content2" style="display:none;">
                    <li><a href="<?php echo $base_url?>Admin_update_profile_Account_Name.php?menu=update2&sub=content2"><span class="fa-li"><i class="fas fa-user-edit"></i></span>Account Name</a></li>
                    <li><a href="<?php echo $base_url?>Admin_update_profile_dp.php?menu=update2&sub=content2"><span class="fa-li"><i class="fas fa-camera-retro"></i></span>Display Picture (dp)</a></li>
                    <li><a href="<?php echo $base_url?>Admin_update_profile_cp.php?menu=update2&sub=content2"><span class="fa-li"><i class="fas fa-image"></i></span>Cover Photo (cp)</a></li>
                    <li><a href="<?php echo $base_url?>Admin_update_profile_Notice_Board.php?menu=update2&sub=content2"><span class="fa-li"><i class="fas fa-newspaper"></i></span>Notice Board</a></li>
                    <li><a class="" href="<?php echo $base_url?>Admin_update_profile_School_Introtr.php?menu=update2&sub=content2"><span class="fa-li"><i class="fas fa-pen-nib"></i></span>School Introduction</a></li>
                    <li><a href="<?php echo $base_url?>Admin_update_profile_slide_Bar1.php?menu=update2&sub=content2"><span class="fa-li"><i class="fas fa-images"></i></span>Slide Bar (1)</a></li>
                    <li><a href="<?php echo $base_url?>Admin_update_profile_slide_Bar2.php?menu=update2&sub=content2"><span class="fa-li"><i class="far fa-images"></i></span>Slide Bar (2)</a></li>
                </ul>
                
                <ul class="fa-ul remove1 profile2" style="display:none;">
                    <li><a href="<?php echo $base_url?>Admin_update_content_Accent.php?menu=update2&sub=profile2"><span class="fa-li"><i class="fas fa-microphone"></i></span>Accent</a></li>
                    <li><a href="<?php echo $base_url?>Admin_update_content_countries.php?menu=update2&sub=profile2"><span class="fa-li"><i class="fas fa-globe-americas"></i></span>Countries</a></li>
                    <li><a href="<?php echo $base_url?>Admin_update_content_state.php?menu=update2&sub=profile2"> <span class="fa-li"><i class="fas fa-map-marked-alt"></i></span>States</a></li>
                    <li><a href="<?php echo $base_url?>Admin_update_content_Postal_Address.php?menu=update2&sub=profile2"><span class="fa-li"><i class="fas fa-search-location"></i></span>Postal Address</a></li>
                    <li><a href="<?php echo $base_url?>Admin_update_content_Subway_Address.php?menu=update2&sub=profile2"><span class="fa-li"><i class="fa fa-subway" ></i></span>Subway Address</a></li>
                    <li><a href="<?php echo $base_url?>Admin_update_content_mother_tongue.php?menu=update2&sub=profile2"><span class="fa-li"><i class="fas fa-microphone-alt"></i></span>Mother Tongue</a></li>
                    <li><a href="<?php echo $base_url?>Admin_update_content_Study_field.php?menu=update2&sub=profile2"><span class="fa-li"><i class="fas fa-compass"></i></span>Study Field</a></li>
                    <li><a href="<?php echo $base_url?>Admin_update_content_study_level.php?menu=update2&sub=profile2"><span class="fa-li"><i class="fas fa-layer-group"></i></span>Study level</a></li>
                    <li><a href="<?php echo $base_url?>Admin_update_content_Programs.php?menu=update2&sub=profile2"><span class="fa-li"><i class="fas fa-graduation-cap"></i></span>Programs</a></li>
                    <li><a href="<?php echo $base_url?>Admin_update_content_subject.php?menu=update2&sub=profile2"><span class="fa-li"><i class="fas fa-book"></i></span>Subjects</a></li>
                </ul>
                
                
                <ul class="fa-ul remove1 pcharge2" style="display:none;">
                    <li><a href="#"><span class="fa-li"><img src="images/icon33.png"/></span>India</a></li>
                    <li><a href="#"><span class="fa-li"><img src="images/icon32.png"/></span>Pakistan</a></li>
                </ul>

                <ul class="fa-ul remove1 dcharge2" style="display:none;">
                    <li><a href="#"><span class="fa-li"><img src="images/icon32.png"/></span>Pakistan</a></li>
                    <li><a href="#"><span class="fa-li"><img src="images/icon33.png"/></span>India</a></li>
                </ul>
                
                
                <ul class="fa-ul remove1 dtax2" style="display:none;">
                    <li><a href="#"><span class="fa-li"><img src="images/icon33.png"/></span>India</a></li>
                    <li><a href="#"><span class="fa-li"><img src="images/icon32.png"/></span>Pakistan</a></li>
                </ul>
                
                <ul class="fa-ul remove1 fin2" style="display:none;">
                    <li><a href="#"><span class="fa-li"><img src="images/icon32.png"/></span>Pakistan</a></li>
                    <li><a href="#"><span class="fa-li"><img src="images/icon33.png"/></span>India</a></li>
                </ul>
                
            <ul class="fa-ul remove1 veri2" style="display:none;">
                    <li><a href="#"><span class="fa-li"><i class="fas fa-users"></i></span>General Account</a></li>
                    <li><a href="#"><span class="fa-li"><i class="fas fa-landmark"></i></span>Kindergarten</a></li>
                    <li><a href="#"><span class="fa-li"><i class="fas fa-landmark"></i></span>Training Center</a></li>
                    <li><a href="#"><span class="fa-li"><i class="fas fa-landmark"></i></span>Primary school</a></li>
                    <li><a href="#"><span class="fa-li"><i class="fas fa-landmark"></i></span>Middle School</a></li>
                    <li><a href="#"><span class="fa-li"><i class="fas fa-landmark"></i></span>Secondary school</a></li>
                    <li><a href="#"><span class="fa-li"><i class="fas fa-landmark"></i></span>Junior Secondary School</a></li>
                    <li><a href="#"><span class="fa-li"><i class="fas fa-landmark"></i></span>Senior Secondary School</a></li>
                    <li><a href="#"><span class="fa-li"><i class="fas fa-landmark"></i></span>Vocational School</a></li>
                    <li><a href="#"><span class="fa-li"><i class="fas fa-landmark"></i></span>Post-secondary school</a></li>
                    <li><a href="#"><span class="fa-li"><i class="fas fa-landmark"></i></span>High school</a></li>
                    <li><a href="#"><span class="fa-li"><i class="fas fa-landmark"></i></span>Junior high school</a></li>
                    <li><a href="#"><span class="fa-li"><i class="fas fa-landmark"></i></span>Senior high school</a></li>
                    <li><a href="#"><span class="fa-li"><i class="fas fa-landmark"></i></span>College</a></li>
                    <li><a href="#"><span class="fa-li"><i class="fas fa-landmark"></i></span>Tertiary School</a></li>
                    <li><a href="#"><span class="fa-li"><i class="fas fa-landmark"></i></span>University</a></li>
                    <li><a href="#"><span class="fa-li"><i class="fas fa-landmark"></i></span>Higher Authority</a></li>
        </ul>
                
        <ul class="fa-ul remove1 cont2" style="display:none;">
            <li><a href="<?php echo $base_url?>Admin_Verify_content_Postal_Address.php?menu=verify2&sub=cont2"><span class="fa-li"><i class="fas fa-search-location"></i></span>Postal Address</a></li>
            <li><a href="<?php echo $base_url?>Admin_Verify_content_ Subway_Address.php?menu=verify2&sub=cont2"><span class="fa-li"><i class="fa fa-subway" ></i></span>Subway Address</a></li>
        </ul>
           
       <ul class="fa-ul remove1 verif2" style="display:none;">
                    <li><a href="<?php echo $base_url?>Admin_Verify_Profile_Account_Name.php?menu=verify2&sub=verif2"><span class="fa-li"><i class="fas fa-user-edit"></i></span>Account Name</a></li>
                    <li><a href="<?php echo $base_url?>Admin_Verify_Profile_dp.php?menu=verify2&sub=verif2"><span class="fa-li"><i class="fas fa-camera-retro"></i></span>Display Picture (dp)</a></li>
                    <li><a href="<?php echo $base_url?>Admin_Verify_Profile_cp.php?menu=verify2&sub=verif2"><span class="fa-li"><i class="fas fa-image"></i></span>Cover Photo (cp)</a></li>
                    <li><a href="<?php echo $base_url?>Admin_Verify_Profile_Notice_Board.php?menu=verify2&sub=verif2"><span class="fa-li"><i class="fas fa-newspaper"></i></span>Notice Board</a></li>
                    <li><a class="" href="<?php echo $base_url?>Admin_Verify_Profile_School_Introduction.php?menu=verify2&sub=verif2"><span class="fa-li"><i class="fas fa-pen-nib"></i></span>School Introduction</a></li>
                    <li><a href="<?php echo $base_url?>Admin_Verify_Profile_Slide_Bar_1.php?menu=verify2&sub=verif2"><span class="fa-li"><i class="fas fa-images"></i></span>Slide Bar (1)</a></li>
                    <li><a href="<?php echo $base_url?>Admin_Verify_Profile_Slide_Bar_2.php?menu=verify2&sub=verif2"><span class="fa-li"><i class="far fa-images"></i></span>Slide Bar (2)</a></li>
        </ul>
          
              <ul class="fa-ul remove1 doc2" style="display:none;">
                                <li><a href="<?php echo $base_url?>Admin_Verify_documents_Passport_Size_Picture.php?menu=verify2&sub=doc2"><span class="fa-li"><i class="fas fa-passport"></i></span>Passport Size Picture</a></li>
                                <li><a href="<?php echo $base_url?>Admin_Verify_documents_ Account_owner_Identity.php?menu=verify2&sub=doc2"><span class="fa-li"><i class="fas fa-id-card-alt"></i></span>Account Owner Identity</a></li>
                                <li><a href="<?php echo $base_url?>Admin_Verify_documents_ Introduction_Video.php?menu=verify2&sub=doc2"><span class="fa-li"><i class="far fa-play-circle"></i></span>Introduction Video</a></li>
                                <li><a href="<?php echo $base_url?>Admin_Verify_documents_ Academic_Degrees.php?menu=verify2&sub=doc2"><span class="fa-li"><i class="fas fa-medal"></i></span>Academic Degrees</a></li>
                                <li><a href="<?php echo $base_url?>Admin_Verify_documents_ Teaching_Certificate.php?menu=verify2&sub=doc2"><span class="fa-li"><i class="fas fa-certificate"></i></span>Teaching Certificate</a></li>
                                <li><a href="<?php echo $base_url?>Admin_Verify_documents_ Police_Character_Certificate.php?menu=verify2&sub=doc2"><span class="fa-li"><i class="fas fa-shield-alt"></i></span>Police Character Certificate</a></li>
                                <li><a href="<?php echo $base_url?>Admin_Verify_documents_ Medical_Report.php?menu=verify2&sub=doc2"><span class="fa-li"><i class="fas fa-notes-medical"></i></span>Medical / Physical Report</a></li>
                                <li><a href="<?php echo $base_url?>Admin_Verify_documents_ School_License_Picture.php?menu=verify2&sub=doc2"><span class="fa-li"><i class="fas fa-file-alt"></i></span>School License Picture</a></li>
            </ul>
                
                <ul class="mail-list remove1 inbox" style="display:none;">
    
                                <li>
                                  <label class="chk-bx"><input type="checkbox"><i class="fa fa-check-square"></i></label>
                                  <a href="#">Alexander Pierce<strong class="tm-stmp">10 minute ago</strong></a>
                                  <p>AdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTE </p>  
                                </li>
                                <li>
                                  <label class="chk-bx"><input type="checkbox"><i class="fa fa-check-square"></i></label>
                                  <a href="#">Alexander Pierce<strong class="tm-stmp">yesterday</strong></a>
                                  <p>AdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTE </p>  
                                </li>
                                <li>
                                  <label class="chk-bx"><input type="checkbox"><i class="fa fa-check-square"></i></label>
                                  <a href="#">Alexander Pierce<strong class="tm-stmp">2 days ago</strong></a>
                                  <p>AdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTE </p>  
                                </li>
                                <li>
                                  <label class="chk-bx"><input type="checkbox"><i class="fa fa-check-square"></i></label>
                                  <a href="#">Alexander Pierce<strong class="tm-stmp">1 week ago</strong></a>
                                  <p>AdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTE </p>  
                                </li>
                                <li>
                                  <label class="chk-bx"><input type="checkbox"><i class="fa fa-check-square"></i></label>
                                  <a href="#">Alexander Pierce<strong class="tm-stmp">1 week ago</strong></a>
                                  <p>AdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTE </p>  
                                </li>
                                <li>
                                  <label class="chk-bx"><input type="checkbox"><i class="fa fa-check-square"></i></label>
                                  <a href="#">Alexander Pierce<strong class="tm-stmp">1 week ago</strong></a>
                                  <p>AdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTE </p>  
                                </li>
                                <li>
                                  <label class="chk-bx"><input type="checkbox"><i class="fa fa-check-square"></i></label>
                                  <a href="#">Alexander Pierce<strong class="tm-stmp">1 week ago</strong></a>
                                  <p>AdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTE </p>  
                                </li>
                                <li>
                                  <label class="chk-bx"><input type="checkbox"><i class="fa fa-check-square"></i></label>
                                  <a href="#">Alexander Pierce<strong class="tm-stmp">1 week ago</strong></a>
                                  <p>AdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTE </p>  
                                </li>
                                <li>
                                  <label class="chk-bx"><input type="checkbox"><i class="fa fa-check-square"></i></label>
                                  <a href="#">Alexander Pierce<strong class="tm-stmp">1 week ago</strong></a>
                                  <p>AdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTE </p>  
                                </li>
                                <li>
                                  <label class="chk-bx"><input type="checkbox"><i class="fa fa-check-square"></i></label>
                                  <a href="#">Alexander Pierce<strong class="tm-stmp">1 week ago</strong></a>
                                  <p>AdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTE </p>  
                                </li>
                                <li>
                                  <label class="chk-bx"><input type="checkbox"><i class="fa fa-check-square"></i></label>
                                  <a href="#">Alexander Pierce<strong class="tm-stmp">1 week ago</strong></a>
                                  <p>AdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTE </p>  
                                </li>
                          </ul>
            <ul class="mail-list remove1 compose" style="display:none;">
    
                                <li>
                                  <label class="chk-bx"><input type="checkbox"><i class="fa fa-check-square"></i></label>
                                  <a href="#">Alexander Pierce<strong class="tm-stmp">10 minute ago</strong></a>
                                  <p>AdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTE </p>  
                                </li>
                                <li>
                                  <label class="chk-bx"><input type="checkbox"><i class="fa fa-check-square"></i></label>
                                  <a href="#">Alexander Pierce<strong class="tm-stmp">yesterday</strong></a>
                                  <p>AdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTE </p>  
                                </li>
                                <li>
                                  <label class="chk-bx"><input type="checkbox"><i class="fa fa-check-square"></i></label>
                                  <a href="#">Alexander Pierce<strong class="tm-stmp">2 days ago</strong></a>
                                  <p>AdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTE </p>  
                                </li>
                                <li>
                                  <label class="chk-bx"><input type="checkbox"><i class="fa fa-check-square"></i></label>
                                  <a href="#">Alexander Pierce<strong class="tm-stmp">1 week ago</strong></a>
                                  <p>AdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTE </p>  
                                </li>
                                <li>
                                  <label class="chk-bx"><input type="checkbox"><i class="fa fa-check-square"></i></label>
                                  <a href="#">Alexander Pierce<strong class="tm-stmp">1 week ago</strong></a>
                                  <p>AdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTE </p>  
                                </li>
                                <li>
                                  <label class="chk-bx"><input type="checkbox"><i class="fa fa-check-square"></i></label>
                                  <a href="#">Alexander Pierce<strong class="tm-stmp">1 week ago</strong></a>
                                  <p>AdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTE </p>  
                                </li>
                                <li>
                                  <label class="chk-bx"><input type="checkbox"><i class="fa fa-check-square"></i></label>
                                  <a href="#">Alexander Pierce<strong class="tm-stmp">1 week ago</strong></a>
                                  <p>AdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTE </p>  
                                </li>
                                <li>
                                  <label class="chk-bx"><input type="checkbox"><i class="fa fa-check-square"></i></label>
                                  <a href="#">Alexander Pierce<strong class="tm-stmp">1 week ago</strong></a>
                                  <p>AdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTE </p>  
                                </li>
                                <li>
                                  <label class="chk-bx"><input type="checkbox"><i class="fa fa-check-square"></i></label>
                                  <a href="#">Alexander Pierce<strong class="tm-stmp">1 week ago</strong></a>
                                  <p>AdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTE </p>  
                                </li>
                                <li>
                                  <label class="chk-bx"><input type="checkbox"><i class="fa fa-check-square"></i></label>
                                  <a href="#">Alexander Pierce<strong class="tm-stmp">1 week ago</strong></a>
                                  <p>AdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTE </p>  
                                </li>
                                <li>
                                  <label class="chk-bx"><input type="checkbox"><i class="fa fa-check-square"></i></label>
                                  <a href="#">Alexander Pierce<strong class="tm-stmp">1 week ago</strong></a>
                                  <p>AdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTEAdminLTE 3.0 Issue AdminLTE </p>  
                                </li>
                          </ul>
                          
                          
    <div class="chat-message remove1 g-inc" style="display:none;">
       <ul class="chat-list">
         <li>
         <label class="chk-bx"><input type="checkbox"><i class="fa fa-check-square"></i></label>
           <a href="#">
             <div class="chat-list-frm"><img src="images/22.png" /></div>
             <div class="chat-list-info">
               <div class="chat-msg-sender">
                 <div class="chat-nms">Kamran Ali From Pakistan</div>
                 <div class="chat-dts">9 Second Ago</div>
               </div>
               <div class="chat-msg-cont">We will do our best for your Enrollment In April 2018 for you new</div>
             </div>
             <strong class="chat-count">2</strong>
             <div class="chat-option">
               <button class="chat-option-open"><i class="fa fa-angle-down"></i></button>
               <div class="chat-option-list">
                 <ul>
                   <li><button class="chat-opt-action">Mark Unread</button></li>
                   <li><button class="chat-opt-action">Select</button></li>
                   <li><button class="chat-opt-action">Delete</button></li>
                 </ul>
               </div>
             </div>
           </a>
         </li>
         <li>
         <label class="chk-bx"><input type="checkbox"><i class="fa fa-check-square"></i></label>
           <a href="#">
             <div class="chat-list-frm"><img src="images/22.png" /></div>
             <div class="chat-list-info">
               <div class="chat-msg-sender">
                 <div class="chat-nms">Kamran Ali From Pakistan</div>
                 <div class="chat-dts">Yesterday</div>
               </div>
               <div class="chat-msg-cont">Photo</div>
             </div>
             <strong class="chat-count">2</strong>
             <div class="chat-option">
               <button class="chat-option-open"><i class="fa fa-angle-down"></i></button>
               <div class="chat-option-list">
                 <ul>
                   <li><button class="chat-opt-action">Mark Unread</button></li>
                   <li><button class="chat-opt-action">Select</button></li>
                   <li><button class="chat-opt-action">Delete</button></li>
                 </ul>
               </div>
             </div>
           </a>
         </li>
         <li>
         <label class="chk-bx"><input type="checkbox"><i class="fa fa-check-square"></i></label>
           <a href="#">
             <div class="chat-list-frm"><img src="images/22.png" /></div>
             <div class="chat-list-info">
               <div class="chat-msg-sender">
                 <div class="chat-nms">Kamran Ali From Pakistan</div>
                 <div class="chat-dts">Last Week</div>
               </div>
               <div class="chat-msg-cont">Called Audio</div>
             </div>
             <strong class="chat-count">2</strong>
             <div class="chat-option">
               <button class="chat-option-open"><i class="fa fa-angle-down"></i></button>
               <div class="chat-option-list">
                 <ul>
                   <li><button class="chat-opt-action">Mark Unread</button></li>
                   <li><button class="chat-opt-action">Select</button></li>
                   <li><button class="chat-opt-action">Delete</button></li>
                 </ul>
               </div>
             </div>
           </a>
         </li>
         <li>
         <label class="chk-bx"><input type="checkbox"><i class="fa fa-check-square"></i></label>
           <a href="#">
             <div class="chat-list-frm"><img src="images/22.png" /></div>
             <div class="chat-list-info">
               <div class="chat-msg-sender">
                 <div class="chat-nms">Kamran Ali From Pakistan</div>
                 <div class="chat-dts">Last Month</div>
               </div>
               <div class="chat-msg-cont">Shared Contact Card</div>
             </div>
             <strong class="chat-count">2</strong>
             <div class="chat-option">
               <button class="chat-option-open"><i class="fa fa-angle-down"></i></button>
               <div class="chat-option-list">
                 <ul>
                   <li><button class="chat-opt-action">Mark Unread</button></li>
                   <li><button class="chat-opt-action">Select</button></li>
                   <li><button class="chat-opt-action">Delete</button></li>
                 </ul>
               </div>
             </div>
           </a>
         </li>
         <li>
         <label class="chk-bx"><input type="checkbox"><i class="fa fa-check-square"></i></label>
           <a href="#">
             <div class="chat-list-frm"><img src="images/22.png" /></div>
             <div class="chat-list-info">
               <div class="chat-msg-sender">
                 <div class="chat-nms">Kamran Ali From Pakistan</div>
                 <div class="chat-dts">24 Mar 2018</div>
               </div>
               <div class="chat-msg-cont">Shared Location</div>
             </div>
             <strong class="chat-count">2</strong>
             <div class="chat-option">
               <button class="chat-option-open"><i class="fa fa-angle-down"></i></button>
               <div class="chat-option-list">
                 <ul>
                   <li><button class="chat-opt-action">Mark Unread</button></li>
                   <li><button class="chat-opt-action">Select</button></li>
                   <li><button class="chat-opt-action">Delete</button></li>
                 </ul>
               </div>
             </div>
           </a>
         </li>
       </ul>
     </div> 
           
                
                
        </div>
    </div>
</section>


<script src="<?php echo $base_url?>js/min.js"></script>
<script>
$(document).ready(function(){
  $(".click_button").click(function(){
    var menu_name = $(this).data('value');
    hide(menu_name);
    $( "#mob-usr-submenu" ).trigger( "click" );
  });
});

function hide(name){
    $('.remove').css('display','none');
    $('.'+name).css('display','block');
    
     if($(window).height() > 700) {
        $('.click_button').css('color','');
     }else{
        $('.click_button').css('color','#CCC');
     }
    $('#'+name).css('color','green');
}


$(document).ready(function(){
  $(".click_sub_button").click(function(){
    var sub_menu_name = $(this).data('value');
    hide_sub(sub_menu_name);
     $( "#mob-usr-panel" ).trigger( "click" );
  });
});

function hide_sub(sub_name){
    $('.remove1').css('display','none');
    $('.'+sub_name).css('display','block');
    if($(window).height() > 700) {
        $('.click_sub_button').css('color','');
    }else{
        $('.click_sub_button').css('color','#CCC');
    }
    $('#'+sub_name).css('color','green');
}


<?php if(isset($_GET['menu']) && isset($_GET['sub'])){ ?>
if("<?php echo $_GET['menu']?>" > ""){
    hide("<?php echo $_GET['menu']?>");
    hide_sub("<?php echo $_GET['sub']?>");
}
<?php } ?>




</script>




