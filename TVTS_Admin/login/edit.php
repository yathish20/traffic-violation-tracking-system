
<?php
include 'config.php';
session_start();

$vhno = $vowner = $vname = $vtype = $vmodel = "";
$update_success = false;

if (isset($_GET['editvhno'])) {
    $vhno = $_GET['editvhno'];

    $sql_vehicle = "SELECT * FROM vehicle_detail WHERE vhno = '$vhno'";
    $result_vehicle = mysqli_query($conn, $sql_vehicle);
    $row_vehicle = mysqli_fetch_assoc($result_vehicle);

    if ($row_vehicle) {
        $vowner = $row_vehicle['vowner'];
        $vname = $row_vehicle['vname'];
        $vtype = $row_vehicle['vtype'];
        $vmodel = $row_vehicle['vmodel'];
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $vowner = $_POST['vowner'];
    $vname = $_POST['vname'];
    $vtype = $_POST['vtype'];
    $vmodel = $_POST['vmodel'];

    $sql = "UPDATE vehicle_detail SET vowner='$vowner', vname='$vname', vtype='$vtype', vmodel='$vmodel' WHERE vhno='$vhno'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $update_success = true;
    }
}

session_abort();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Vehicle Details</title>
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
            margin-top: 5%;
            margin-bottom: 4%;
            font-weight: bold;
            font-size: 30px;
            text-shadow: 1px 1px blue;
        }

        .button {
            margin-top: 5%;
            margin-bottom: 6%;
            margin-left: 45%;
            box-shadow: 0 0 4px #ff0000, 0 0 5px #0000ff;
            border-radius: 0%;
            font-weight: bold;
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
            display: <?php echo $update_success ? 'block' : 'none'; ?>;
            background-color:  #d1eac8;
            color: #336634;
            border: 1px solid #3c763d;
            box-shadow: 0 0 4px  #ff8080, 0 0 5px #6666ff;
            padding: 15px;
            margin-top: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body class="back">
<?php include('sidebar.php'); ?>
<div class="main">       
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="Heading">Edit Vehicle Details</h2>
                <div class="success-message">Successfully Updated ! Check Out !</div>
                <form method="post">
                    <div class="mb-3">
                        <label for="vhno" class="form-label">Vehicle Number</label>
                        <input type="text" class="form-control" id="vhno" name="vhno" value="<?php echo $vhno; ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="vowner" class="form-label">Vehicle Owner</label>
                        <input type="text" class="form-control" id="vowner" name="vowner" value="<?php echo $vowner; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="vname" class="form-label">Vehicle Name</label>
                        <input type="text" class="form-control" id="vname" name="vname" value="<?php echo $vname; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="vtype" class="form-label">Vehicle Type</label>
                        <input type="text" class="form-control" id="vtype" name="vtype" value="<?php echo $vtype; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="vmodel" class="form-label">Vehicle Model</label>
                        <input type="text" class="form-control" id="vmodel" name="vmodel" value="<?php echo $vmodel; ?>" required>
                    </div>
                    <button type="submit" class="button" name="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>


