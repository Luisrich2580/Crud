<?php include('conn.php')?>
<form action="insert_user.php" method="POST">
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby=" " aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-bold" id="exampleModalLabel">Add Member</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">First Name</label>
            <input type="text" class="form-control" name='firstName' id="exampleInputEmail1" aria-describedby="emailHelp" >
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Last Name</label>
            <input type="text" name='lastName' class="form-control" id="exampleInputPassword1" required>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Age</label>
            <input type="text" name='age' class="form-control" id="exampleInputPassword1" required>
          </div>

        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" name="submit" value="Add">
        </div>
      </div>
    </div>
  </div>
</form>

<?php
if (isset($_POST['submit'])) {
  $first_name = $_POST['firstName'];
  $last_name = $_POST['lastName'];
  $age = $_POST['age'];

  if ($first_name == "" || empty($first_name)) {
    header('location:home.php?message=You need to fill all the gap!');
  }
   else {
    $data = "INSERT INTO `students`(`first_name`, `last_name`, `age`) VALUES ('$first_name', '$last_name', '$age')";
    $sql = mysqli_query($conn, $data);

    if(!$sql){
      die("Query Failed");
    }
    else{
      header("location:home.php?msg= Succesiful Added");
    }
  }
  // mysqli_close($sql);
}
?>