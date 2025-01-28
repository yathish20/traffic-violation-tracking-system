<?php

include'config.php';
session_start();


if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])) {

    $vhno = $_POST['vhno'];
    $vowner=$_POST['vowner'];
    $vname = $_POST['vname'];
    $vtype = $_POST['vtype'];
    $vmodel = $_POST['vmodel'];

    $sql = "INSERT INTO vehicle_detail (vhno, vowner, vname, vtype, vmodel) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$vhno, $vowner, $vname, $vtype, $vmodel]);
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
 <style>
      .back {
                background: -webkit-linear-gradient(to right, #d2f9f2, #d8ddf3);
                background: linear-gradient(to right, #d2f9f2, #d8ddf3);
        }
        .table {
          margin-top: 5%;
        }

        .col-md-8 {
          background-color: #99e6ff;
          box-shadow: 0 0 4px #ff0000, 0 0 5px #0000ff;
          font-weight: bold;
          font-size: 20px;
          font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
          border-radius: 9%;
          border:2px solid black;
        }
        .main {
          margin-top: 5%;
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
        .Heading {
          margin-top: 5%;
          margin-bottom:4% ;
          font-weight: bold;
          font-size: 30px;
          text-shadow: 1px 1px blue;
         
        }


    </style> 
</head>

<body class="back">

<?php include('sidebar.php'); ?>

<div class="main"> 
<h2 class="Heading">Add New Vehicle Details</h2>      
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
          echo '<div class="success" role="alert">Vehicle Added successfully!</div>';
        }
      ?>
      <!-- <h2 class="form-title">Add Violator Details</h2> -->
      <form method="post">
       

        <table class="table">
          <tbody>
            <tr>
              <td><label for="vhno" class="form-label">Vehicle Number</label></td>
              <td><input type="text" class="form-control" id="vhno" name="vhno" required></td>
            </tr>
            <tr>
              <td><label for="vname" class="form-label">Vehicle Owner</label></td>
              <td><input type="text" class="form-control" id="vowner" name="vowner" required></td>
            </tr>
            <tr>
              <td><label for="vtype" class="form-label">Vehicle Name</label></td>
              <td><input type="text" class="form-control" id="vname" name="vname" required></td>
            </tr>
            
            <tr>
              <td><label for="vtype" class="form-label">Vehicle Type</label></td>
              <td><input type="text" class="form-control" id="vtype" name="vtype" required></td>
            </tr>
            <tr>
              <td><label for="vmodel" class="form-label">Vehicle Model</label></td>
              <td><input type="text" class="form-control" id="vmodel" name="vmodel" required></td>
            </tr>
         
          </tbody>
        </table>
        
        <button type="submit" class="button" name="submit">Add Details</button>
      </form>
    </div>
  </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>