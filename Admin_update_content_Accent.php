<?php
session_start();
require('action/connection.php');?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>update Accent</title>
<?php include("head.php") ?>


</head>

<body>
<?php include('includes/admin_header.php');?>
<div class="content">
  <div class="content-data">
  <div class="content-in">
    <div class="content-fix-head">
       <h1>Accent</h1>
       <div class="usr-mail-tool">
            <ul>
              <li><a class="orde-rev-bt">Order Review</a></li>
              <li><a href="#" id="expand-main"><i class="fas fa-arrows-alt"></i></a></li>
            </ul>
      </div>
       <div class="filter-form">
         <div class="form-fl form-4" ><!--
           <div class="mob-filter-head"><button id="filter-close"><i class="fa fa-arrow-left"></i></button><p>Subway Address Search</p></div>-->
           <div class="t-b-one" style="width:50%;"><input type="text" placeholder="Accent id" ><button type="submit"><i class="fa fa-search"></i></button></div>
           <div class="t-b-one" style="width:50%;"><input type="text" placeholder="Enter Accent name " ><button type="submit"><i class="fa fa-search"></i></button></div>
         </div>
         <div class="form-usr-option">
           <a href="#" id="myBtn" class="add-opn">Add As New</a>
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
        $sel="select * from tbl_accent";
    $result=mysqli_query($conn, $sel);


	if(mysqli_num_rows($result) > 0)
	{
		while($row=mysqli_fetch_array($result)){
		   ?>
          
        <div class="table-row">
          <label class="chk-bx"><input type="checkbox" /><i class="fa fa-check-square"></i></label>
          <div class="cnt-top">
          <div class="country-name"> 
            <div><?php echo $row['eng_accent_name']?></div>
            <div><a class="fr-expnd"><i class="fa fa-angle-down"></i> <span>Show more</span></a></div>
          </div>
          </div>
          <div class="cnt-btom tog-expand">
           <div class="row-list">
           <ul>
                                                   <li><img src="images/icon19.png"><span><?php echo $row['accent_id']?></span></li>
                                                     <li><img src="images/icon30.png"><span><?php if($row['eng_review_status']=="0"){ echo "Review In Pending";}else{ echo "Active"; }?></span></li>
                                                      <li><img src="images/icon10.png"><span><?php echo $row['eng_reviewer_name']?></span></li>
                                                       <li><img src="images/icon22.png"><span><?php echo $row['eng_reviewer_id']?></span></li>
                                             </ul>
          <div class="row-option"><a href="#">Edit</a></div>
          </div>
          </div>
          
        </div>
        
        
        <!--<div class="table-row">-->
        <!--  <label class="chk-bx"><input type="checkbox" /><i class="fa fa-check-square"></i></label>-->
        <!--  <div class="cnt-top">-->
        <!--  <div class="country-name"> -->
        <!--    <div>European</div>-->
        <!--    <div><a class="fr-expnd"><i class="fa fa-angle-down"></i> <span>Show more</span></a></div>-->
        <!--  </div>-->
        <!--  </div>-->
        <!--  <div class="cnt-btom tog-expand">-->
        <!--   <div class="row-list">-->
        <!--   <ul>-->
        <!--                                           <li><img src="images/icon19.png"><span>621</span></li>-->
        <!--                                             <li><img src="images/icon30.png"><span>Review In Pending</span></li>-->
        <!--                                              <li><img src="images/icon10.png"><span>Kamran Ali</span></li>-->
        <!--                                               <li><img src="images/icon22.png"><span>GH213433453324532343</span></li>-->
        <!--                                     </ul>-->
        <!--  <div class="row-option"><a href="#">Edit</a></div>-->
        <!--  </div>-->
        <!--  </div>-->
          
        <!--</div>-->
        
    <?php } } ?>    
      </div>
    </div>
  </div>
  </div>
</div>
</main>
<?php include("footer.php"); ?>
<script type="javascript/text">
     $("document").ready(function() {
      	var mob_class = ["menu-block","header-bottom","side-bar","user-block"];
	$(".mob-menu > a").click(function(){
		if($(this).parents(".mob-menu").hasClass("mob-menu-sx")){
			var mob_class_sx = ["","","","header-bottom","side-bar","menu-block"];
	
		if($(this).hasClass("active")){
			$(".menu-block,.header-bottom,.side-bar").hide();
			$(this).removeClass("active");
			return;
			}
		$(".menu-block,.header-bottom,.side-bar").hide();
		$(".mob-menu.mob-menu-sx > a").removeClass("active");
		$(this).addClass("active");
		$("."+mob_class_sx[$(this).parent(".mob-menu.mob-menu-sx").index()]).show();
		setTop();
			
		  return;
			}
		if($(this).hasClass("active")){
			$(".menu-block,.header-bottom,.side-bar,.user-block").hide();
			$(this).removeClass("active");
			return;
			}
		$(".menu-block,.header-bottom,.side-bar,.user-block").hide();
		$(".mob-menu > a").removeClass("active");
		$(this).addClass("active");
		$("."+mob_class[$(this).parent(".mob-menu").index()]).show();
		setTop();
		});
    }); 
    
 
  </script>
  

  
  
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
<form method="POST" action="action/do_add_accent.php"> 
        <div class="container">
    <div class="row">
      <div class="col-100 top-search">
        <input type="text" class="text" id="fname" name="firstname" placeholder="Enter Accent Name">
        
      <input  class="btn btn-success" type="submit" value="Translate">
      </div>
    </div>        
       <p class="pera-modal">Translated Content Apperared</p>     
<div class="input-group">
  <div class="input-group-icon div1" style="background-color:#F0E584;">English</div>
  <div class="input-group-area"><input type="text" id="eng" name="eng" placeholder="Accent Name In English"></div>
</div>
<div class="input-group">
  <div class="input-group-icon div1" style="background-color:#D0F084;">Chinese</div>
  <div class="input-group-area"><input type="text" id="Chi" name="chi" placeholder="Accent Name In Chinese"></div>
</div>
<div class="input-group">
  <div class="input-group-icon div1" style="background-color:#A7F0C6;">Russian</div>
  <div class="input-group-area"><input type="text" id="english" name="rus" placeholder="Accent Name In Russian"></div>
</div>
<div class="input-group">
  <div class="input-group-icon div1" style="background-color:#A7F0EC;">Spanish</div>
  <div class="input-group-area"><input type="text" id="english" name="spa" placeholder="Accent Name In Spanish"></div>
</div>
<div class="input-group">
  <div class="input-group-icon div1" style="background-color:#A7C9F0;">Hindi</div>
  <div class="input-group-area"><input type="text" id="english" name="hin" placeholder="Accent Name In Hindi"></div>
</div>
<div class="input-group">
  <div class="input-group-icon div1" style="background-color:#CCCAF7;">portuguese</div>
  <div class="input-group-area"><input type="text" id="english" name="port" placeholder="Accent Name In Portuguese"></div>
</div>
<div class="input-group">
  <div class="input-group-icon div1" style="background-color:#E6CAF7;">German</div>
  <div class="input-group-area"><input type="text" id="english" name="ger" placeholder="Accent Name In German"></div>
</div>

<div class="input-group">
  <div class="input-group-icon div1" style="background-color:#F7CAE5;">Franch</div>
  <div class="input-group-area"><input type="text" id="english" name="fra" placeholder="Accent Name In Franch"></div>
</div>

<div class="input-group">
  <div class="input-group-icon div1" style="background-color:#F7CACD;">Turkish</div>
  <div class="input-group-area"><input type="text" id="english" name="tur" placeholder="Accent Name In Turkish"></div>
</div>
<div class="row">
      <div class="col-100 modal-foot">
            <input class="btn close" type="submit" value="Close">
            
            <input class="btn-success" name="accent" type="submit" value="Submit">
      </div>
        </div>   
        </div>
</form>        
    </div> 
</div> 
  
  
  <!--qwerty-->
  <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>