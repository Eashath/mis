<?php
$title = "Department Details | SLGTI";
 include_once("config.php"); 
 include_once("head.php"); 
 include_once("menu.php"); 
 ?>
<!-- end default code -->

<!-- start my code -->
<?PHP

// Add coding
$inventoryid=$Departmentid=$itemid=$inventorystatus=$inventoryquantity=null;

if(isset($_POST['Add'])){
  if(!empty($_POST['inventoryid'])
    &&!empty($_POST['Departmentid'])
    &&!empty($_POST['itemid'])
    &&!empty($_POST['inventorystatus'])
    &&!empty($_POST['inventoryquantity'])){
      
      $inventoryid=$_POST['inventoryid'];
      $Departmentid=$_POST['Departmentid'];
      $itemid=$_POST['itemid'];
      $inventorystatus=$_POST['inventorystatus'];
      $inventoryquantity=$_POST['inventoryquantity'];
      

      $sql="INSERT INTO `inventory`(`inventory_id`, `department_id`, `item_id`, `inventory_status`, `inventory_quantity`) 
      VALUES ('$inventoryid','$Departmentid','$itemid','$inventorystatus','$inventoryquantity')";

      if(mysqli_query($con,$sql))
      {
        echo '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>'.$inventoryid.'</strong> Staff details inserted
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>    
        ';
      }
      else{
        
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>'.$inventoryid.'</strong> echo "Error".$sql."<br>".mysqli_error($con);
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        
        ';


      }

    }

}
?>


<form>
<div class="row ">
            <div class="col-md-12 col-sm-12  form-group  container bg-info">
                <h2  class="pt-2" style="color:white">ADD INVENTORY</h2>
              </div>
              <div class="w-100"></div>
              <div class="col-md-6 col-sm-12 form-group pl-3 pr-3 pt-2 container">
                      <label class="font-weight-bold" for="">01.DEPARTMENT ID</label> <span style="color:red;">*</span></label>
                      <input type="text"value="<?php echo $Departmentid;?>"  class="form-control<?php if(isset($_POST['Add']) && empty($_POST['inventoryid'])){echo 'is-invalid';}if(isset($_POST['Add']) &&!empty($_POST['inventoryid'])&& !empty($_POST['inventoryid'])){echo '  is-valid';} ?>" placeholder="DEPARTMENT ID">
                      <small id="" class="form-text text-muted"></small>
              </div>
              
              <div class="col-md-6 col-sm-12 form-group pl-3 pr-3 pt-2 container">
                      <label class="font-weight-bold" for="authorName">02.INVENTORY ID</label> <span style="color:red;">*</span></label>
                      <input type="text" value="<?php echo $inventoryid;?>" class="form-control<?php if(isset($_POST['Add']) && empty($_POST['inventoryid'])){echo 'is-invalid';}if(isset($_POST['Add']) &&!empty($_POST['inventoryid'])&& !empty($_POST['inventoryid'])){echo '  is-valid';} ?>" id="inventory" aria-describedby="inventory" placeholder="inventory" required="required">
                      <small id="bookNameHelp" class="form-text text-muted"></small>
              </div>
              <div class="w-100"></div>
              <div class="col-md-6 col-sm-12 form-group pl-3 pr-3 container">
                  <label class="font-weight-bold" for="ITEM">03. ITEM ID</label> <span style="color:red;">*</span></label>
                  <input type="text" value="<?php echo $itemid;?>"class="form-control <?php if(isset($_POST['Add']) && empty($_POST['itemid'])){echo 'is-invalid';}if(isset($_POST['Add']) &&!empty($_POST['itemid'])&& !empty($_POST['itemid'])){echo '  is-valid';} ?>"  id="ITEM" aria-describedby="ITEM" placeholder="ITEM" required="required">
                  <small id="ITEM" class="form-text text-muted"></small>
              </div>
        
             
              <div class="col-md-6 col-sm-12 form-group pl-3 pr-3 container">
                  <label class="font-weight-bold" for="category">04.STATAUS</label> <span style="color:red;">*</span></label>
                  
                  <select class="form-control<?php  if(isset($_POST['Add']) && empty($_POST['inventorystatus'])){echo ' is-invalid';}if(isset($_POST['Add']) && !empty($_POST['inventorystatus'])){echo ' is-valid';} ?>" name="category">
                      <option value="working">working</option> 
                      <option value="dmage">damage</option>
            
                    </select>
                  <small id="" class="form-text text-muted"></small>
              </div>
              
              <div class="w-100"></div>
              <div class="col-md-6 col-sm-12 form-group pl-3 pr-3 container">
                  <label class="font-weight-bold" for="cost">05.QUANTITY</label> <span style="color:red;">*</span></label>
                  <input type="text"  value="<?php echo $inventoryquantity;?>" class="form-control  <?php if(isset($_POST['Add']) && empty($_POST['itemid'])){echo 'is-invalid';}if(isset($_POST['Add']) &&!empty($_POST['itemid'])&& !empty($_POST['itemid'])){echo '  is-valid';} ?>"id="quantity" aria-describedby="quantity" placeholder="quantity" required="required">
                  <small id="quantity" class="form-text text-muted"></small>
          </div>
          <div class="col-md-6 col-sm-12 form-group pl-3 pr-3 container">
              
          <input class="btn btn-dark ml-2 mt-3 float-right" type="reset" value="Reset">
                        <button type="submit" value="Add" name="Add"  class="btn btn-primary ml-2 mt-3 float-right">Add </button>
                        <button type="submit" class="btn btn-primary ml-2 mt-3 float-right"  onclick="location.href='inventory_view.php'">view </button>
                 
                 

            </div>
            </div>
      </form>












<!-- end my code\ -->


<!--BLOCK#3 START DON'T CHANGE THE ORDER-->
<?php include_once("footer.php"); ?>