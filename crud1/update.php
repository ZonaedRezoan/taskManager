<?php
include 'connect.php';

$id = $_GET['update_id'];

if(isset($_POST['submit'])){
    $taskName = $_POST['taskName'];
    $task = $_POST['task'];

    $sql = "UPDATE crud SET name='$taskName', task= '$task' WHERE id=$id";

    //   var_dump($sql);
    $result = mysqli_query($con, $sql);
    var_dump($result);
  
    if($result){
        // echo "Updated succussfully";
        header('location:display.php');
    }else{
        echo "Failed to Update";
        // die(mysqli_error($con));
    }
}

$sql="SELECT * from crud where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Task Manager</title>
</head>

<body>
    <div class="container my-5">

        <form method="post">
            <div class="mb-3">
                <label>Task Name</label>
                <input type="text" class="form-control" name="taskName" placeholder="Task Heading" autocomplete="off" value="<?php echo $row['name'];?>">
            </div>

            <div class="mb-3">
                <label>Task</label>
                <input type="text" class="form-control" name="task" placeholder="Your Task" autocomplete="off" value="<?php echo $row['task'];?>">            
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>

        </form>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>