<?php

include'config.php';

session_start();

if(isset($_GET['editvhno']))
{
    $vhno = $_GET['editvhno'];

    $sql_vehicle = "SELECT * FROM vehicle_detail WHERE vhno = '$vhno'";
    $result_vehicle = mysqli_query($conn, $sql_vehicle);
    $row_vehicle = mysqli_fetch_assoc($result_vehicle);

    $vhno = $row_vehicle['vhno'];
    $vowner=$row_vehicle['vowner'];
    $vname = $row_vehicle['vname'];
    $vtype = $row_vehicle['vtype'];
    $vmodel = $row_vehicle['vmodel'];
  

}
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])) 
{
 
    $vhno = $_POST['vhno'];
    $vowner=$_POST['vowner'];
    $vname = $_POST['vname']; 
    $vtype = $_POST['vtype'];
    $vmodel = $_POST['vmodel'];
  

    
   
    $sql="update `vehicle_detail` set vowner='$vowner',vname='$vname',vtype='$vtype',vmodel='$vmodel' where vhno=$vhno";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header('location:vehicle_list.php');
    }
    
}

session_abort();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Violator Details</title>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/sidebar.css">
<body>

<?php include('sidebar.php'); ?>

<div class="main">       
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <?php 
             if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
                echo '<div class="success" role="alert">Report submitted successfully!</div>';
            }
            ?>

            
            <form method="post">
                
                
                <h2>Add Voilator Vehicle Details</h2>
                <div class="mb-3">
                    <label for="vhno" class="form-label">Vehicle Number</label>
                    <input type="text" class="form-control" id="vhno" name="vhno" value="<?php echo $vhno; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="vname" class="form-label">Vehicle Owner</label>
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
               
                <button type="submit" class="btn btn-primary" name="submit">Update</button>
            </form>
        </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>