<?php
session_start();
require('action/connection.php');?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>update Subject List</title>
<?php include("head.php") ?>
</head>

<body>
<?php include('includes/admin_header.php');?>
<div class="content">
  <div class="content-data">
  <div class="content-in">
    <div class="content-fix-head">
       <h1>Subject</h1>
       <div class="usr-mail-tool">
        <ul>
          <li><a class="orde-rev-bt">Order Review</a></li>
          <li><a href="#" id="expand-main"><i class="fas fa-arrows-alt"></i></a></li>
        </ul>
      </div>
       <div class="filter-form">
         <div class="form-fl form-4" ><!--
           <div class="mob-filter-head"><button id="filter-close"><i class="fa fa-arrow-left"></i></button><p>Subway Address Search</p></div>-->
           <div class="t-b-one" style="width:50%;"><input type="text" placeholder="Subject id" ><button type="submit"><i class="fa fa-search"></i></button></div>
           <div class="t-b-one" style="width:50%;"><input type="text" placeholder="Subject name " ><button type="submit"><i class="fa fa-search"></i></button></div>
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
    $sel="select * from  tbl_subject";
    
    $result=mysqli_query($conn, $sel);
    
    // echo "<pre>";
    // print_r($result);
    // die;
	if(mysqli_num_rows($result) > 0)
	    {
		while($row=mysqli_fetch_array($result)){
		   ?>  
          
       <div class="table-row">
          <label class="chk-bx"><input type="checkbox" /><i class="fa fa-check-square"></i></label>
          <div class="cnt-top">
          <div class="country-name">
           <div><?php echo  $row['eng_subject_name']?></div>
           <div><a class="fr-expnd"><i class="fa fa-angle-down"></i> <span>Show more</span></a></div>
          </div>
          </div>
          <div class="cnt-btom tog-expand">
            <div class="row-list" >
                                <ul>
                                   <li><img src="images/icon19.png"><span><?php echo $row['subject_id'];?></span></li>
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