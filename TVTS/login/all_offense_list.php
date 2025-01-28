<?php
session_start();
require_once('config.php');
$query = "SELECT * FROM Challan";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offense List</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    
    <style>
       .back {
                background: -webkit-linear-gradient(to right, #d2f9f2, #d8ddf3);
                background: linear-gradient(to right, #d2f9f2, #d8ddf3);
        }
        .main{
            background: -webkit-linear-gradient(to right, #d2f9f2, #d8ddf3);
            background: linear-gradient(to right, #d2f9f2, #d8ddf3);
        }
        .card-body{
            background: -webkit-linear-gradient(to right, #d2f9f2, #d8ddf3);
            background: linear-gradient(to right, #d2f9f2, #d8ddf3);
        
        }
        .full_background{
            background: -webkit-linear-gradient(to right, #d2f9f2, #d8ddf3);
            background: linear-gradient(to right, #d2f9f2, #d8ddf3);
        }

        .Heading {
         margin-top: 1%;
         text-shadow: 2px 2px 4px rgb(0, 174, 255);
          font-weight: bold;
          font-size: 30px;
          text-shadow: 1px 1px blue;
         
        }

    
      .table-primary{
            font-weight: bold;
            font-size: 20px;
            text-shadow: 1px 1px white  ;
        }
        .row{
            box-shadow: 0 0 7px #ff0000, 0 0 7px #0000ff;
        }
        

    </style> 

</head>
<body class="back">
    <?php include('sidebar.php'); ?>

    <div class="main">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="full_background">
                        <h2 class="Heading">Offense List </h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-dark">
                            <thead class="table-primary">
                                <tr>
                                    <th>Challan ID</th>
                                    <th>Vehicle No</th>
                                    <th>Violation Type</th>
                                    <th>Challan Cost</th>
                                    <th>Challan Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if($result) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $challan_id = $row['challan_id'];
                                        $vhno = $row['vhno'];
                                        $challan_date = $row['challan_date'];
                                        $challan_cost = $row['challan_cost'];
                                        $violation_type = $row['violation_type'];
                                        
                                        echo '<tr>
                                                <td>'. $challan_id.'</td>
                                                <td>'. $vhno.'</td>
                                                <td>'. $violation_type.'</td>
                                                <td>'. $challan_cost.'</td>
                                                <td>'. $challan_date.'</td>
                                                <td><button class="btn btn-primary" onclick="getVehicleDetails(\''.$vhno.'\')">Details</button></td>
                                              </tr>';  
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script>
    function getVehicleDetails(vhno) {
        $.ajax({
            url: 'get_vehicle_details.php',
            type: 'POST',
            data: { vhno: vhno },
            success: function(response) {
                alert(response); // Modify this to display response in modal or another container
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    }
    </script>
</body>
</html>