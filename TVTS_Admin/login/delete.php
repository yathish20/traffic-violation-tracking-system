<?php
include 'config.php';

$delete_success = false;
$error_message = '';

if (isset($_GET['deletevhno'])) {
    $vhno = $_GET['deletevhno'];

    try {
        $sql = "DELETE FROM vehicle_detail WHERE vhno ='$vhno'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $delete_success = true;
        } else {
            $error_message = "Failed to delete vehicle. Please try again later.";
        }
    } catch (mysqli_sql_exception $e) {
        $error_message = "Unable to delete vehicle. This vehicle is associated with other records and cannot be deleted.";
    }
}
?>

<!-- Display error message if any -->
<?php if (!empty($error_message)): ?>
    <div><?php echo $error_message; ?></div>
<?php endif; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Vehicle Details</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/sidebar.css">
    <style>
        .back {
            background: -webkit-linear-gradient(to right, #d2f9f2, #d8ddf3);
            background: linear-gradient(to right, #d2f9f2, #d8ddf3);
        }

        .col-md-6 {
            background-color: #b3ecff;
            box-shadow: 0 0 4px #ff0000, 0 0 5px #0000ff;
            font-weight: bold;
            font-size: 20px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
       
            border: 2px solid black;
            padding: 20px;
        }

        .Heading {
            margin-right: 60%;
            margin-top: 5%;
            /* margin-bottom: 4%; */
            font-weight: bold;
            font-size: 22px;
            text-shadow: 1px 1px blue;
        }

        .button {
            margin-top: 5%;
            margin-bottom: 6%;
            margin-left: 45%;
            box-shadow: 0 0 4px #ff0000, 0 0 5px #0000ff;
            border-radius: 0%;
            font-weight: bold ;
            background-color: #4d94ff;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            margin-bottom: 10px;
        }

        .btn-primary {
            margin-top: 10px;
            margin-left: 10%;
        }

        .success-message {
            display: <?php echo $delete_success ? 'block' : 'none'; ?>;
            background-color:  #d1eac8;
            color: #336634;
            border: 1px solid #3c763d;
            box-shadow: 0 0 4px  #ff8080, 0 0 5px #6666ff;
            padding: 15px;
            margin-top: 10px;
          
        }
    </style>
</head>
<body class="back">
<?php include('sidebar.php'); ?>
<div class="main">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
               
                <div class="success-message">One Record successfully deleted!</div>
                <h2 class="Heading">Click Below To Check</h2>
                <a href="vehicle_list.php" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
