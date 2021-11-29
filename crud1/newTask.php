<!-- https://www.youtube.com/watch?v=72U5Af8KUpA -->

<?php
include 'connect.php';

if(isset($_POST['submit'])){
  $taskName = $_POST['taskName'];
  $task = $_POST['task'];

  $sql = "INSERT into crud(name, task) values('$taskName', '$task')";
  $result = mysqli_query($con, $sql);
  
  if($result){
    // echo "data inserted succussfully";
    header('location:display.php');
  }else{
    echo "failed to insert";
    // die(mysqli_error($con));
  }
}

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
                <input type="text" class="form-control" name="taskName" placeholder="Task Heading" autocomplete="off">
            </div>

            <div class="mb-3">
                <label>Task</label>
                <input type="text" class="form-control" name="task" placeholder="Your Task" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>

        </form>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>