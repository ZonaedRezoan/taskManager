<?php
include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>All Tasks</title>
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="newTask.php" class="text-light">Add Task</a></button>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Task Name</th>
                    <th scope="col">Task</th>
                    <th scope="col">Edit/Delet</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql="SELECT * from crud";
                $result = mysqli_query($con, $sql);
                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        $taskName = $row['name'];
                        $task = $row['task'];

                        echo '<tr>
                        <th>'.$id.'</th>
                        <td>'.$taskName.'</td>
                        <td>'.$task.'</td>
                        <td>
                            <button class="btn btn-primary"><a href="update.php?update_id='.$id.'" class="text-light">Update</a></button>
                            <button class="btn btn-warning"><a href="delete.php?delete_id='.$id.'">Delet</a></button>
                        </td>
                        </tr>';
                    }
                }
                ?>


            </tbody>
        </table>
    </div>

</body>

</html>