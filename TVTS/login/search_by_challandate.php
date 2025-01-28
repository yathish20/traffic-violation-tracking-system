

<?php
require_once('config.php');

// Initialize search variables
$search_query = "";

// Check if search form is submitted
if(isset($_GET['from_date']) && isset($_GET['to_date'])) {
    // Get the values of from and to dates from the form
    $from_date = $_GET['from_date'];
    $to_date = $_GET['to_date'];
    
    // Add condition to SQL query to filter by the date range
    $search_query = "WHERE challan_date BETWEEN '$from_date' AND '$to_date'";
}
$query = "SELECT * FROM Challan $search_query";

// Perform the database query
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
    </style>
</head>
<body class="back">
    <?php include('sidebar.php'); ?>

    <div class="main">
    <form method="GET" action="">
    <div class="form-group">
        <label for="from_date">From:</label>
        <input type="date" class="form-control" id="from_date" name="from_date">
    </div>
    <div class="form-group">
        <label for="to_date">To:</label>
        <input type="date" class="form-control" id="to_date" name="to_date">
    </div>
    <button type="submit" class="btn btn-primary">Search</button>
    </form>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="display-6 text-center">Offense List </h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-dark">
                                <tr class="table-primary">
                                    <td>Challan ID</td>
                                    <td>Vehicle No</td>
                                    <td>Violation Type</td>
                                    <td>Challan Cost</td>
                                    <td>Challan Date</td>
                                </tr>
                                <tr>
                                <?php
                                if($result && $search_query)
                                {

                                    while($row=mysqli_fetch_assoc($result))
                                    {

                                       $challan_id=$row['challan_id'];
                                       $vhno=$row['vhno'];
                                       $challan_date=$row['challan_date'];
                                       $challan_cost=$row['challan_cost'];
                                       $violation_type=$row['violation_type'];
                                
                                        
                                        echo '<tr>
                                        <th scope="row">'.$challan_id.'</th>
                                        <td>'. $vhno.'</td>
                                        <td>'.$violation_type.'</td>
                                        <td>'. $challan_cost.'</td>
                                        <td>'.$challan_date.'</td>
                                        
                                        
                                        </tr>';  
                                        
                                    }
                                }
                                
                            ?>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
       
    </div>
</body>
</html>
