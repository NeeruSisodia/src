  <?php
  $title="Exercise 7: CRUD APP";
  include '../ner_tasks/header.php';
 
  include 'db.php';
  $a = $_GET['id'];
  $result = mysqli_query($conn,"SELECT * FROM studentsInfo WHERE id= '$a'");
  $row= mysqli_fetch_array($result);
  ?>
  <div class="container">

  <h2> Update your information below: </h2>
  <form name= "form1" method="post" action=" ">
    <div class="row">
      <div class="col">
        <input type="text" class="form-control" placeholder="First name" name="fname" required value="<?php echo $row['first_name']; ?>">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Last name" name="lname" required value="<?php echo $row['last_name']; ?>" >
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col">
        <input type="text" class="form-control" placeholder="City" name="city" required value="<?php echo $row['city']; ?>">
      </div>

      <div class="col">
        <input type="text" class="form-control" placeholder="groupid" name="groupid" required value="<?php echo $row['groupid']; ?>">    
      </div>

    </div>
  <br>
    <div class="row">
    <div class="col">
      <button type="submit" class="btn btn-primary" name="submit">Update your Information</button>
  </div>
    <div class="col">
      <button type="submit" class="btn btn-primary" name="delete">Delete your Information</button>
  </div>

  </div>
  <br>
  </form>
  </div>
  <?php 
  /* 
  The isset() function is used to check if a variable is set and not NULL.
  In this case, it's checking if the $_POST['submit'] 
  value is set and not NULL. If the form has been submitted, the value of $_POST['submit'] will be set,
  and the code inside the if block will be executed. If the form has not been submitted, 
  the value of $_POST['submit'] will not be set, and the code inside the if block will not be executed.
  */
  if (isset($_POST['submit'])){
      
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $city = $_POST['city'];
      $groupid = $_POST['groupid'];
      $query = mysqli_query($conn,"UPDATE studentsInfo set first_name='$fname', last_name='$lname',city='$city',groupid='$groupid' where id='$a'");
      if($query){
          echo "<h2>Your information is updated Successfully</h2>";
          // if you want to redirect to update page after updating
      }
      else { echo "Record Not modified";}
      }

      if (isset($_POST['delete'])){
          $query = mysqli_query($conn,"DELETE FROM studentsInfo where id='$a'");
          if($query){
              echo "Record Deleted with id: $a <br>";
              // if you want to redirect to update page after updating
              //header("location: update.php");
          }
          else { echo "Record Not Deleted";}
          }

  $conn->close();
  
  include '../ner_tasks/footer.php';

  ?>  