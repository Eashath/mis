<!-- BLOCK#1 START DON'T CHANGE THE ORDER-->
<?php
$title = "Home | SLGTI";
include_once("config.php");
include_once("head.php");
include_once("menu.php");
?>
<!--END DON'T CHANGE THE ORDER-->

<!--BLOCK#2 START YOUR CODE HERE -->



<h1 class="text-center">Donor Details</h1>
<br>

<div class="row">

<div class="col-sm-6 " ></div>
<div class="col-sm-3 " > 
<form class="form-inline md-form form-sm mt-4">
  <input class="form-control form-control-sm ml-3 w-75 rounded-pill" type="text" placeholder="Search D_ID" aria-label="Search"id="search"> 
  <i class="fas fa-search ml-3" aria-hidden="true"></i>
</form>
</div>
</div>

<button type="button" class="btn btn-light" ><div class="spinner-grow" role="status">
  <span class="sr-only">Loading...</span>
</div> </button>
  



         <div class="row">   
         <div class="col-12">
         <form>
         <p style="font-size:20px;"> Donor_Info <hr color ="black" style="height:1px;"></p><br>
         </form>
</div>
</div>
<table class="table">
  <thead class="thead-r">
    <tr>
      <th scope="col">D_id</th>
      <th scope="col">Reference id</th>
      <th scope="col">fullname</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Blood group</th>
      <th scope="col">dob</th>
      <th scope="col">join date</th>
      <th scope="col">Weight</th>
      <th scope="col">Gender</th>

    </tr>
  </thead>
  
</table>
<div class="row">
<div class="col-6"></div>
<div class="col-3"></div>
<div class="col-2"></div>

<div class="col-1">
    <button type="button" class="btn btn-secondary" onclick="location.href='donor.php'"> Join Donor</button>
    
    </div>
</div>


<!--END OF YOUR COD-->

<!--BLOCK#3 START DON'T CHANGE THE ORDER-->
<?php include_once("footer.php"); ?>
<!--END DON'T CHANGE THE ORDER-->