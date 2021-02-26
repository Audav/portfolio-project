<?php
/* 305/student/new-student.php
 * Form to add a new student to the database
 *
 */

require ('includes/php-setup.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>
<body>
<div class="container">

    <h3>Admin Page</h3>

    <?php
    include('includes/navbar.html');
    ?>

    <table id="admin-table">
        <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Job</th>
            <th>Company</th>
            <th>Linkedin</th>
            <th>Email</th>
            <th>How We Met</th>
            <th>Other</th>
            <th>Message</th>
            <th>Mailing</th>
            <th>Format</th>
            <th>Datetime</th>
        </tr>
        </thead>
        <tbody>

        <?php

        //Define a query
        $sql = "SELECT * FROM guestbook ORDER BY 'time'";

        //Send the query to the db
        $result = mysqli_query($cnxn, $sql);
        //var_dump($result);

        //Process the result
        foreach ($result as $row) {
            //var_dump($row);

            $fname = $row['fname'];
            $lname = $row['lname'];
            $job = $row['job'];
            $company = $row['company'];
            $linkedin = $row['linkedin'];
            $email = $row['email'];
            $choosehow = $row['choosehow'];
            $other = $row['other'];
            $message = $row['message'];
            $dateadded = $row['dateadded'];

            echo "<tr>
                    <td>$fname</td>
                    <td>$lname</td>
                    <td>$job</td>
                    <td>$company</td>
                    <td>$linkedin</td>
                    <td>$email</td>
                    <td>$choosehow</td>
                    <td>$other</td>
                    <td>$message</td>
                    <td>$dateadded</td>
                  </tr>";
        }

        ?>

        </tbody>
    </table>

</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script>
    $('#admin-table').DataTable();
</script>

</body>
</html>