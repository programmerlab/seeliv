<?php
session_start();
require('action/connection.php');?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>update Subway Address</title>
<?php include("head.php") ?>
</head>

<body>
<?php include('includes/admin_header.php');?>

<!--<section class="side-bar">-->
<!--  <div class="side-bar-content">-->
<!--    <div class="search-list-item"><input type="text" placeholder="Search here"></div>-->
<!--    <div class="sidebar-list">-->
<!--    <ul class="fa-ul">-->
<!--                                <li><a href="#"><span class="fa-li"><i class="fas fa-microphone"></i></span>Accent</a></li>-->
<!--                                <li><a href="#"><span class="fa-li"><i class="fas fa-globe-americas"></i></span>Countries</a></li>-->
<!--                                <li><a href="#"><span class="fa-li"><i class="fas fa-map-marked-alt"></i></span>States</a></li>-->
<!--                                <li><a href="#"><span class="fa-li"><i class="fas fa-search-location"></i></span>Postal Address</a></li>-->
<!--                                <li><a class="active" href="#"><span class="fa-li"><i class="fa fa-subway" ></i></span>Subway Address</a></li>-->
<!--                                <li><a href="#"><span class="fa-li"><i class="fas fa-microphone-alt"></i></span>Mother Tongue</a></li>-->
<!--                                <li><a href="#"><span class="fa-li"><i class="fas fa-compass"></i></span>Study Field</a></li>-->
<!--                                <li><a href="#"><span class="fa-li"><i class="fas fa-layer-group"></i></span>Study level</a></li>-->
<!--                                <li><a href="#"><span class="fa-li"><i class="fas fa-graduation-cap"></i></span>Programs</a></li>-->
<!--                                <li><a href="#"><span class="fa-li"><i class="fas fa-book"></i></span>Subjects</a></li>-->
<!--                          </ul>-->
<!--                          </div>-->
<!--  </div>-->
<!--</section>-->
<div class="content">
  <div class="content-data">
  <div class="content-in">
    <div class="content-fix-head">
       <h1>Subway Address</h1>
       
       <div class="usr-mail-tool">
        <ul>
          <li><a class="orde-rev-bt">Order Review</a></li>
          <li><a href="#" id="expand-main"><i class="fas fa-arrows-alt"></i></a></li>
        </ul>
      </div>
       <div class="filter-form">
         <div class="form-fl form-4"><!--
           <div class="mob-filter-head"><button id="filter-close"><i class="fa fa-arrow-left"></i></button><p>Subway Address Search</p></div>-->
           <div class="t-b-one"><input type="text" placeholder="Subway id" ><button type="submit"><i class="fa fa-search"></i></button></div>
           <div class="o-b-one">
             <select>
             <option>All Country</option>
             <option>----</option>
             <option>----</option>
             </select>
           </div>
           <div class="o-b-one">
             <select>
             <option>All States</option>
             <option>----</option>
             <option>----</option>
             </select>
           </div>
           <div class="t-b-one"><input type="text" placeholder="Enter Zip Code,Postal Code " ><button type="submit"><i class="fa fa-search"></i></button></div>
         </div>
         <div class="form-usr-option">
           <a href="#" class="add-opn">Add As New</a>
           <a href="#" class="rew-opn">Review Selected</a>
           <a href="#" class="del-opn">Delete Selected</a>
         </div>
       </div>   
       <div class="table-options">
         <div class="all-sel"><label class="chk-bx"><input type="checkbox" /><i class="fa fa-check-square"></i></label> <a id="edit-mod">Edit</a></div>
         <div class="mob-page-tool">
           <ul>
             <li>
               <button class="mob-fil-sh filt-click" id="filter-open"><i class="fa fa-search"></i></button>
             </li>
             
             <li>
               <div class="filter-bt-bl"></div>
             </li>
             <li>
               <button class="mob-fil-sh filt-click" id="fill-sort"><i class="fa fa-sort"></i></button>
             </li>
             <li>
               <button class="mob-fil-sh filt-click" id="form-opt-open" ><i class="fa fa-cog"></i></button>
             </li>
           </ul>
         </div>
         <div class="sort-option">
           <ul>
             <li><button class="sort-button active">Overall Input</button></li>
             <li><button class="sort-button">Review In Pending</button></li>
             <li><button class="sort-button">Review Completed</button></li>
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
    <h4 class="result-flag">512 results</h4>
      <div class="table-list country-table">
          <?php
    $sel="select * from tbl_subway_address 
    LEFT JOIN states ON tbl_subway_address.state_id = states.state_id  
    LEFT JOIN countries ON tbl_subway_address.country_id = countries.country_id
    GROUP BY  tbl_subway_address.subway_id
   ";
    
    $result=mysqli_query($conn, $sel);
	if(mysqli_num_rows($result) > 0)
	    {
		while($row=mysqli_fetch_array($result)){
		   ?>  
        <div class="table-row">
          <label class="chk-bx"><input type="checkbox" /><i class="fa fa-check-square"></i></label>
          <div class="cnt-top">
          <div class="country-name">
           <div><?php echo  $row['eng_subway_name']?></div>
           <div><a class="fr-expnd"><i class="fa fa-angle-down"></i> <span>Show more</span></a></div>
          </div>
          </div>
          <div class="cnt-btom tog-expand">
          <div class="row-list" >
                                            <ul>
                                                   <li><img src="images/icon19.png"><span><?php echo $row['subway_id'];?></span></li>
                                                   <li><img src="images/icon25.png"><span><?php echo $row['eng_country_name'];?></span></li>
                                                   <li><img src="images/icon17.png"><span><?php echo $row['eng_state_name'];?></span> </li>
                                                   <li><img src="images/icon30.png"><span><?php echo $row['eng_review_status'];?></span> </li>
                                                   <li><img src="images/icon10.png"><span><?php echo $row['eng_reviewer_name'];?></span></li>
                                                   <li><img src="images/icon22.png"><span><?php echo $row['eng_reviewer_id'];?></span></li>
                                             </ul>
                                             
          <div class="row-option"><a href="#">Edit</a></div>
          </div>
          </div>
        </div>
    
    <?php } } ?>    
      </div>
    </div>
  </div>
  </div>
</div>
</main>
<?php include("footer.php"); ?>
</body>
</html>