
<!------START DON'T CHANGE ORDER HEAD,MANU,FOOTER----->
<!---BLOCK 01--->
<?php 
   
include_once("config.php");

$title ="STUDENT COURSEREENROLL | SLGTI"; //YOUR HEAD TITLE CREATE VARIABLE BEFORE FILE NAME
include_once("head.php");
include_once("menu.php");

?>
<!----END DON'T CHANGE THE ORDER---->


<!---BLOCK 02--->
<!---START YOUR CODER HERE----->


<!-----END YOUR CODE----->
<!-- form start---->
<?php
    $stid = $coid = $year = $enroll = $exit = $enstatus = $mode = null;

    // edit coding
    
    if((isset($_GET['stid'])) && (isset($_GET['coid'])))
    {
      $stid =$_GET['stid'];
      $coid =$_GET['coid'];
     
      //echo 'coid'.$_POST['coid'];
      $sql = "SELECT `student_id`,`course_id`,`course_mode`,`academic_year`,`student_enroll_date`,`student_enroll_exit_date`,`student_enroll_status` 
      FROM `student_enroll` WHERE `student_id`='$stid' AND `course_id`='$coid'";
      $result = mysqli_query($con,$sql);

      if(mysqli_num_rows($result)==1)
        {
          //echo "welcom";
        $row =mysqli_fetch_assoc($result);
        $stid = $row['student_id'];
        $coid = $row['course_id'];
        $mode = $row['course_mode'];
        $year = $row['academic_year'];
        $enstatus =$row['student_enroll_status'];
        $enroll = $row['student_enroll_date'];
        $exit = $row['student_enroll_exit_date'];
      }
    }

    // update coding

    if(isset($_POST['Edit']))
     {
      // echo "welcome Edit"; 
      echo 'stid'.$_POST['stid'];echo 'mode'.$_POST['mode']; echo 'status'.$_POST['status'];
      echo 'ayear'.$_POST['ayear'];echo 'edate'.$_POST['edate']; echo 'exdate'.$_POST['exdate'];
      
     if(!empty($_POST['ayear']) && !empty($_POST['status']) && !empty($_POST['mode']) && !empty($_POST['edate']) && !empty($_POST['exdate']) && !empty($_GET['Edit']))
       {
        echo "SUCCESS";
        $stid=$_GET['stid'];
        $coid=$_GET['coid'];
        $mode=$_POST['mode'];
        $year=$_POST['ayear'];
        $enstatus=$_POST['status'];
        $enroll=$_POST['edate'];
        $exit=$_POST['exdate'];

        echo $sql2 = "UPDATE `student_enroll` SET `course_mode`='$mode',`academic_year`='$year',`student_enroll_date`='$enstatus',
        `student_enroll_exit_date`='$enroll',`student_enroll_status`='$exit' WHERE `student_id`='$stid' and `course_id`='$coid'";

            if(mysqli_query($con,$sql2))
            {
              echo "Record Updated Successfully";
            }
            else
            {
              echo "Error: ".$sq2. "<br>" . mysqli_error($con);
              echo "Fill the required field";
            }
          }
    }
    // insert coding

    if(isset($_POST['Submit']))
     {
      //  echo 'stid'.$_POST['stid']; echo 'coid'.$_POST['coid'];echo 'mode'.$_POST['mode'];echo 'exdate'.$_POST['exdate'];
      //  echo 'ayear'.$_POST['ayear'];echo 'status'.$_POST['status'];echo 'edate'.$_POST['edate'];
       
      if(!empty($_POST['stid']) && !empty($_POST['coid']) && !empty($_POST['mode']) && !empty($_POST['ayear']) 
      && !empty($_POST['status']) && !empty($_POST['edate']) && !empty($_POST['exdate']))
        {
        echo "SUCCESS";
        $stid=$_POST['stid'];
        $coid=$_POST['coid'];
        $mode=$_POST['mode'];
        $year=$_POST['ayear'];
        $enstatus=$_POST['status'];
        $enroll=$_POST['edate'];
        $exit=$_POST['exdate'];

          $sqlenroll = "INSERT INTO `student_enroll`(`student_id`,`course_id`,`course_mode`,`academic_year`,`student_enroll_date`,`student_enroll_exit_date`,
          `student_enroll_status`) VALUES ('$stid','$coid','$mode','$year','$enroll','$exit','$enstatus')";

            if(mysqli_query($con,$sqlenroll))
            {
              echo "Record Insert Successfully";
            }
            else
            {
            // echo "Error: ".$sqlstudent . "<br>" . mysqli_error($con);
              echo "Error: ".$sqlenroll . "<br>" . mysqli_error($con);
              //echo "Error: ".$sqlqualification . "<br>" . mysqli_error($con);
              echo "Fill the required field";
            }
    }
  }
?>

<div class="ROW">
        <div class="col text-center">
            <h2>StudentReEnrollment</h2>   
        </div>
    </div><BR>

    <form class="needs-validation" action="" method="POST">

    <div class="form-row">
          <div class class="col-md-1"></div>
          <div class="col">
          <p style="font-size: 20px; font-weight: 700; border-bottom: 2px solid #aaa;">ENTROLLMENT</p>
          </div>  
    </div><BR>

    <div class="container">                 
      <div class="form-row">
        
        <div class="col-md-5 mb-3">
          <label for="coid"> Course Name : </label>
          <select name="coid" id="coid" class="custom-select" value="<?php echo $coid; ?>" required>
          <option selected disabled> ........select the Course .......</option>
              <?php 
                $sql="SELECT * from course";
                $result = mysqli_query($con,$sql);
                if(mysqli_num_rows($result)>0)
                while($row = mysqli_fetch_assoc($result)) 
                {
                echo '<option value="'.$row['course_id'].'"';
                if ($row["course_id"]==$coid)
                {
                  echo 'selected'; 
                }
                echo '>'.$row['course_name'].'</option>';
                }
              ?> 
          </select>
        </div>
        
        <div class="col-md-1 mb-3"></div>

        <div class="col-md-5 mb-3">
          <label for="stid"> Student Id : </label>
          <input type="text" class="form-control" id="stid" name="stid" value="<?php echo $stid; ?>" placeholder="" aria-describedby="stidPrepend" required>
        </div>

      </div>

      <div class="form-row">

        <div class="col-md-5 mb-3">
          <label for="mode"> Course Mode : </label>
          <select name="mode" id="mode" class="custom-select" value="<?php echo $mode; ?>" required>
            <option selected disabled> Course Mode </option>
              <option value="Full"<?php if($mode=="Full") echo 'selected';?>>Full Time</option> 
              <option value="Part"<?php if($mode == "Part") echo 'selected';?>>Part Time</option>
         </select>
        </div>
        

        <div class="col-md-1 mb-3"></div>

        <div class="col-md-5 mb-3">
          <label for="type"> Academic Year : </label>
          <select name="ayear" id="ayear" class="selectpicker show-tick" data-live-search="true" data-width="100%" value="<?php echo $year; ?>" required>
          <option selected disabled>--Academic Year--</option>
          <?php
            $sql = "SELECT * FROM `academic` ORDER BY `academic_year`  DESC ";
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
            echo '<option  value="'.$row ['academic_year'].'" data-subtext="'.$row ['academic_year_status'].'"';
            if($row ["academic_year"] == $year)
            {
              echo 'selected';
            }
            echo '>'.$row ['academic_year'].'</option>';
            }
            }
            ?>
          </select>
        </div>
      
      </div>

      <div class="form-row">

        <div class="col-md-5 mb-3">   
          <label for="edate"> ReEntroll Date : </label>
          <input type="text" class="form-control" id="edate" name="edate" value="<?php echo $enroll; ?>" placeholder="" aria-describedby="edatePrepend" required>
        </div>

        <div class="col-md-1 mb-3"></div>
   
        <div class="col-md-5 mb-3">
          <label for="exdate"> ReExit Date : </label>
          <input type="text" class="form-control" id="exdate" name="exdate" value="<?php echo $exit; ?>" placeholder="" aria-describedby="ExdatePrepend" required>
        </div>
  
      </div>
      
      <div class="form-row">
      <div class="col-md-5 mb-3">
          <label for="status">Status:</label>
          <select name="status" id="status" class="custom-select" value="<?php echo $enstatus; ?>" >
            <option selected disabled>Choose Status</option>
              <option value="Following" <?php if($enstatus=="Following")  echo 'selected';?>>Following</option> 
              <option value="Completed" <?php if($enstatus == "Completed") echo ' selected';?>>Completed</option>
              <option value="Dropout"<?php if($enstatus=="Dropout") echo 'selected';?>>Dropout</option>
              <option value="Long Absent"<?php if($enstatus=="Long Absent") echo 'selected';?>>Long Absent</option>
          </select>
        </div>
      </div>

      <div class="col-md-3 mb-3"></div>

          <?php
              echo '<div class="btn-group-horizontal">';
              
              if((isset($_GET['stid'])) && (isset($_GET['coid'])))
              {
                
                echo '<button type="submit" value="Edit" name="Edit" class="btn btn-primary mr-2"><i class="fas fa-user-edit"></i>UPDATE</button>'; 
                
              }
              else
              {
                echo '<button type="submit" value="Submit" name="Submit" onclick="addtable();" class="btn btn-primary mr-2"><i class="fas fa-user-plus"></i>ADD</button>';
                echo'<button type="reset" value="Reset" class="btn btn-primary mr-2"><i class="fas fa-redo"></i>REFRESH</button>';
              }
              echo '</div>';
      ?>  
    </div><BR><BR><BR>

    <div class="form-row">
          <div class class="col-md-1"></div>
          <div class="col">
          <p style="font-size: 20px; font-weight: 700; border-bottom: 2px solid #aaa;">ENTROLLMENT INFORMATION</p>
          </div>  
    </div><BR>

 <div class="table-row">
    <div class="col-md-09 mb-3">
    <table class="table table-sm table-hover" id="table">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">student Id</th>
            <th scope="col">Course Id</th>
            <th scope="col">Course Mode</th>
            <th scope="col">Accademic Year</th>
            <th scope="col">ReEnroll Date </th>
            <th scope="col">ReExit Date </th>
            <th scope="col">Enroll Status </th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
           $sql = "SELECT `student_id`, `course_id`,`course_mode`, `academic_year`, `student_enroll_date`, `student_enroll_exit_date`,`student_enroll_status` FROM `student_enroll`";
           $result = mysqli_query($con, $sql);
           if (mysqli_num_rows($result)>0)
           {
            $num=1;
               while($row = mysqli_fetch_assoc($result))
                 
                {
                   echo '
                   <tr style="text-align:left";>
                        <td scope="row">'.$num."<br>".'</td>
                        <td>'.$row["student_id"]."<br>".'</td>
                        <td>'.$row["course_id"]."<br>".'</td>
                        <td>'.$row["course_mode"]."<br>".'</td>
                        <td>'.$row["academic_year"]."<br>".'</td>
                        <td>'.$row["student_enroll_date"]."<br>".'</td>
                        <td>'.$row["student_enroll_exit_date"]."<br>".'</td>
                        <td>'.$row["student_enroll_status"]."<br>".'</td>
                        <td>
                        <a href="StudentReEnroll.php?stid='.$row["student_id"].'&&coid='.$row["course_id"].'" class="btn btn-sm btn-success""><i class="far fa-edit"></i></a> |
                        <a href="?Student_Id='.$row["student_id"].'" class="btn btn-info "> <i class="fas fa-angle-double-right"></i></td>
                   </tr>';
                  $num=$num+1;
                }
                
           }
           else
           {
            echo "0 results";
           }
        ?>
        </tbody>
    </table>

    
    <!-- <script>

        function addtable()
        {

          // grt the table by id & insert part
          // get value from input & set the value into row
          var table = document.getElementById("table"),
              newRow = table.insertRow(table.length),
              cell1 = newRow.insertCell(0),
              cell2 = newRow.insertCell(1),
              cell3 = newRow.insertCell(2),
              cell4 = newRow.insertCell(3),
              cell5 = newRow.insertCell(4),
              cell6 = newRow.insertCell(5),

              stid = document.getElementById("stid").value = this.cells[0].innerText;
              coid = document.getElementById("coid").value = this.cells[1].innerText;
              mode = document.getElementById("mode").value = this.cells[2].innerText;
              ayear = document.getElementById("ayear").value = this.cells[3].innerText;
              edate = document.getElementById("edate").value = this.cells[4].innerText;
              exdate = document.getElementById("exdate").value = this.cells[5].innerText; 

        }
        </script> -->
    <!-- <script>
                var table = document.getElementById('table');
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                         document.getElementById("coid").value = this.cells[0].innerText;
                         document.getElementById("stid").value = this.cells[1].innerText;
                         document.getElementById("mode").value = this.cells[2].innerText;
                         document.getElementById("ayear").value = this.cells[3].innerText;
                         document.getElementById("edate").value = this.cells[4].innerText;
                         document.getElementById("exdate").value = this.cells[5].innerText;
                    };
                }
    
         </script> -->
        
</div>
</div>




<!---BLOCK 03--->
<!----DON'T CHANGE THE ORDER--->
<?php 
include_once("FOOTER.PHP"); 
?>