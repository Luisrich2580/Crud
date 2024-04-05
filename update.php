<?php include('header.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}


$sql = "SELECT * FROM `students` WHERE `id` = '$id'";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Failed to Connect!");
} else {
    $row = mysqli_fetch_assoc($result);
}
?>
<div class="container">
    <form action="update.php?new_id=<?php echo $row['id'] ?>" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">First Name</label>
            <input type="text" class="form-control" name='firstName' value="<?php echo $row['first_name'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Last Name</label>
            <input type="text" name='lastName' class="form-control" value="<?php echo $row['last_name'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Age</label>
            <input type="text" name='age' class="form-control" value="<?php echo $row['age'] ?>">
        </div>
        <input type="submit" class="btn btn-success" name="update" value="Update">
    </form>
</div>

<?php
if (isset($_POST['update'])) {

    if (isset($_GET['new_id'])) {
        $newid = $_GET['new_id'];
    }

    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $age = $_POST['age'];



    $sql = "UPDATE `students` SET `first_name`='$first_name',`last_name`='$last_name',`age`='$age' WHERE `id` = '$newid'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Failed to Update");
    } else {
        header("location:home.php? smg= You Updated the file");
    }
};
?>