<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Search Users</title>
<?php include("head.php") ?>
</head>

<body>

<?php include('includes/admin_header.php');?>

<!--<section class="side-bar">-->
<!--  <div class="side-bar-content">-->
<!--    <div class="search-list-item"><input type="text" placeholder="Search here"></div>-->
<!--    <div class="sidebar-list">-->
<!--    <ul class="fa-ul">-->
<!--                                <li><a class="active" href="#"><span class="fa-li"><i class="fas fa-user-edit"></i></span>Respective Content</a></li>-->
<!--                          </ul>-->
<!--                          </div>-->
<!--  </div>-->
<!--</section>-->
<div class="content">
  <div class="content-data">
  <div class="content-in">
    <div class="content-fix-head">
       <h1>Account Name</h1>
       <div class="usr-mail-tool">
        <ul>
          <li><a href="#" id="expand-main"><i class="fas fa-arrows-alt"></i></a></li>
        </ul>
      </div>
       <div class="filter-form">
         <div class="form-fl form-3"><!--
           <div class="mob-filter-head"><button id="filter-close"><i class="fa fa-arrow-left"></i></button><p>State Search</p></div>-->
           <div class="t-b-one"><input type="text" placeholder="State id" ><button type="submit"><i class="fa fa-search"></i></button></div>
           <div class="o-b-one">
             <select>
             <option>All Country</option>
             <option>----</option>
             <option>----</option>
             </select>
           </div>
           <div class="t-b-one"><input type="text" placeholder="Enter State Name" ><button type="submit"><i class="fa fa-search"></i></button></div>
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
               <button class="mob-fil-sh filt-click" id="fill-optn"><i class="fa fa-filter"></i></button>
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
           <button class="sort-button roll-filter"><i class="fa fa-filter"></i></button>
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
        <div class="table-row">
          <label class="chk-bx"><input type="checkbox" /><i class="fa fa-check-square"></i></label>
          <div class="cnt-top">
          <div class="country-name">
           <div>Unverified User</div>
           <div><a class="fr-expnd"><i class="fa fa-angle-down"></i> <span>Show more</span></a></div>
          </div>
          </div>
          <div class="cnt-btom tog-expand">
           <div class="row-list">
           <ul>
                                
                                                   <li><img src="images/icon19.png"><span>621 </span></li>
                                                   <li><img src="images/icon25.png"><span>India  </span></li>
                                                   <li><img src="images/icon29.png"><span>Name of person </span></li>
                                                    <li><img src="images/icon20.png"><span>GH213433453324532343</span></li>
                                                     <li><img src="images/icon30.png"><span>Review In Pending</span> </li>
                                                      <li><img src="images/icon10.png"><span>Kamran Ali </span></li>
                                                       <li><img src="images/icon22.png"><span>GH213433453324532343</span></li>
                                             </ul>
                                             
          <div class="row-option"><a href="#">Edit</a></div>
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
</body>
</html>