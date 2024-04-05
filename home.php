<?php include('header.php'); ?>
<div class="container mt-5">
<button type="button" class="btn btn-primary member" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Member</button>
  <table class="table table-hover table-bordered table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php

      $sql = "SELECT * FROM `students`";
      $result = mysqli_query($conn, $sql);

      if (!$result) {
        die("Failed to Connect!");
      } else {
        while ($row = mysqli_fetch_assoc($result)) {
      ?>
          <tr>
            <th><?php echo $row['id'] ?></th>
            <td><?php echo $row['first_name'] ?></td>
            <td><?php echo $row['last_name'] ?></td>
            <td><?php echo $row['age'] ?></td>
            <td><a href="update.php?id=<?php echo $row['id'] ?>" name="update" value="Update" class="btn btn-success">Update</a></td>
            <td><a href="delete.php?id=<?php echo $row['id'] ?>" name="delete" value="Delete" class="btn btn-danger">Delete</a></td>
          </tr>
      <?php
        }
      }

      ?>
    </tbody>
  </table>
  <?php include('insert_user.php');
    if(isset($_GET['message'])){
      echo "<h6>".$_GET['message']."</h6>";
    }
    if(isset($_GET['msg'])){
      echo "<h6 class='succ'>".$_GET['msg']."</h6>";
    }
    if(isset($_GET['smg'])){
      echo "<h6 class='succ'>".$_GET['smg']."</h6>";
    }
  ?>

</div>

<script src="js/bootstrap.bundle.js"></script>
</body>

</html>