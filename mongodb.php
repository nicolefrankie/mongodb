<?php
include "vendor/autoload.php";
$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->local->students;
$result = $collection->find();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>Views Student Records</title>
    </head>
    <body>
        <h1>VIEW STUDENTS RECORDS</h1>
        <div class = "container-fluid p-3 mb-2">
            <div class="table-responsive text-nowrap">
                <table class="table table-success table-striped-columns">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Student ID</th>
                            <th scope="col">Complete Name</th>
                            <th scope="col">Birthdate</th>
                            <th scope="col">Address</th>
                            <th scope="col">Program</th>
                            <th scope="col">Contact Number</th>
                            <th scope="col">Emergency Contact</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php foreach ($result as $student){ ?>
                            <tr class = "table-active">
                            <th scope="row"><?php echo $student['_id']; ?></th>
                            <td><?php echo $student['studentId']; ?></td>
                            <td><?php echo $student['firstName']; ?> <?php echo $student['lastName']; ?></td>
                            <td><?php echo $student['birthdate']; ?></td>
                            <td><?php echo $student['address']; ?></td>
                            <td><?php echo $student['program']; ?></td>
                            <td><?php echo $student['contactNumber']; ?></td>
                            <td><?php echo $student['emergencyContact']; ?></td> 
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>