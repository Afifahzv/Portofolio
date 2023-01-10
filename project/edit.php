<?php
include "db_conn.php";
$id = $_GET['id'];

if(isset($_POST['submit'])){
    $project_name = $_POST['project_name'];
    $client = $_POST['client'];
    $email = $_POST['email'];
    $star_date = $_POST['star_date'];
    $end_date = $_POST['end_date'];
    $progress = $_POST['progress'];

    $sql = "UPDATE `project` SET
    `Project Name`='$project_name',`Client`='$client',
    `Project Leader`='$email',`Start Date`='$star_date',
    `End Date`='$end_date',`Progress`='$progress' WHERE id=$id";

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: index.php?msg=Data Update successfully");
    }

    else{
      echo "Failed: " . mysqli_error($conn);
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- title this page -->
    <title>Monitor Project</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5">
        Project monitoring
</nav>

<div class="container">
    <div class="text-center mb-4">
    <h3>  Edit </h3>
    <p class="text-muted">Informasi</p>
    </div>

    <?php
    $sql = "SELECT * FROM `project` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    ?>
    
<div class="container d-flex justify-content-center">
    <form action="" method="post" style="width:50vw; min-width:300px;">
    <div class="row">
        <div class="mb-3">
            <label class="form-label"> Project Name:</label>
            <input type="text" class="form-control" name="project_name" value="<?php echo $row ['Project Name']?>">
        </div>

        <div class="mb-3">
            <label class="form-label"> Client:</label>
            <input type="text" class="form-control" name="client" value="<?php echo $row ['Client']?>">
        </div>

        <div class="mb-3">
            <label class="form-label"> Project Leader:</label>
            <input type="email" class="form-control" name="email" value="<?php echo $row ['Project Leader']?>">
        </div>

        <div class="col">
            <label class="form-label"> Start Date:</label>
            <input type="date" class="form-control" name="start_date" value="<?php echo $row ['Start Date']?>">
        </div>

        <div class="col">
            <label class="form-label"> End Date:</label>
            <input type="date" class="form-control" name="end_date" value="<?php echo $row ['End Date']?>">
        </div>

        <div class="mb-3">
            <label class="form-label"> Progress:</label>
            <input type="text" class="form-control" name="progress" value="<?php echo $row ['Progress']?>">
        </div>

        <div>
            <button type="submit" class="btn btn-success" name="submit">Update</button>
            <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>

</form>
    </div>
</div>



<!-- boostrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>