<!-- BLOCK#1 START DON'T CHANGE THE ORDER-->
<?php
$title = "Home | SLGTI";
include_once("config.php");
include_once("head.php");
include_once("menu.php");
?>
<!--END DON'T CHANGE THE ORDER-->

<!--BLOCK#2 START YOUR CODE HERE -->

<br><br>


<div class="col container form-group   p-3 mb-2 bg-light text-dark border border-primary rounded">
<h1 class="h3 p-4 mb-4 bg-primary text-white rounded text-center "><i class="fas fa-file-alt"></i>   Off-peak Info</h1>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-thumbs-up"></i> Approved Off-peaks</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-thumbs-down"></i> Rejected Off-peaks</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false"><i class="fas fa-sync"></i> Pending Off-peaks</a>
  </li>
  
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
  <table class="table">
  <thead class="thead-dark">
    <tr>
       <th scope="col">#</th>
      <th scope="col">Name of applicant</th>
      <th scope="col">Registration No</th>
      <th scope="col">Department</th>
      <th scope="col">Contact No</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Reason for exit</th>
      <th colspan="3">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <th scope="row">1</th>
      <td>????</td>
      <td>????</td>
      <td>????</td>
      <td>?????</td>
      <td>?????</td>
      <td>????</td>
      <td>??????</td>
      <td>??????</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>


  </div>
  <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab"><table class="table">
  <thead class="thead-dark">
    <tr>
    <th scope="col">#</th>
      <th scope="col">Name of applicant</th>
      <th scope="col">Registration No</th>
      <th scope="col">Department</th>
      <th scope="col">Contact No</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Reason for exit</th>
      <th colspan="3">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <th scope="row">1</th>
      <td>????</td>
      <td>????</td>
      <td>????</td>
      <td>?????</td>
      <td>?????</td>
      <td>????</td>
      <td>??????</td>
      <td>??????</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
  <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab"><table class="table">
  <thead class="thead-dark">
    <tr>
    <th scope="col">#</th>
      <th scope="col">Name of applicant</th>
      <th scope="col">Registration No</th>
      <th scope="col">Department</th>
      <th scope="col">Contact No</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Reason for exit</th>
      <th colspan="3">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <th scope="row">1</th>
      <td>????</td>
      <td>????</td>
      <td>????</td>
      <td>?????</td>
      <td>?????</td>
      <td>????</td>
      <td>??????</td>
      <td>??????</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
  

<script>
  $(function () {
    $('#myTab li:last-child a').tab('show')
  })
</script>
  
</div>
</div>
   

<!--END OF YOUR COD-->

<!--BLOCK#3 START DON'T CHANGE THE ORDER-->
<?php include_once("footer.php"); ?>
<!--END DON'T CHANGE THE ORDER-->