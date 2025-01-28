<?php


require_once('config.php');
$query="select * from vehicle_detail";
$result=mysqli_query($conn,$query);

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
        .full_background{
            background: -webkit-linear-gradient(to right, #d2f9f2, #d8ddf3);
            background: linear-gradient(to right, #d2f9f2, #d8ddf3);
        }
        
         .card-body{
            background: -webkit-linear-gradient(to right, #d2f9f2, #d8ddf3);
            background: linear-gradient(to right, #d2f9f2, #d8ddf3);
        
        }

        .table, .table-striped, .table-dark{

            box-shadow: 0 0 6px #ff0000, 0 0 8px #0000ff;
        }
        .dhanush{
        
          margin-bottom:1% ;
         
          font-weight: bold;
          font-size: 30px;
          text-shadow: 1px 1px blue;
        }
        .table-primary{
            font-weight: bold;
            font-size: 20px;
            text-shadow: 1px 1px white;   
             
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
                            <h2 class="dhanush"> Vehicle Details</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-dark">
                                <tr class="table-primary">
                                    <td>Vehicle No</td>
                                    <td>Vehicle Owner</td>
                                    <td>Vehicle Name</td>
                                    <td>Vehicle Type</td>
                                    <td>Vehicle Model</td>
                                    <td>Edit</td>
                                    <td>Delete</td>
                                </tr>
                                <tr>
                                <?php
                                if($result)
                                {

                                    while($row=mysqli_fetch_assoc($result))
                                    {

                                        $vhno = $row['vhno'];
                                        $vowner=$row['vowner'];
                                        $vname = $row['vname'];
                                        $vtype = $row['vtype'];
                                        $vmodel = $row['vmodel'];
                                    
                                        echo '<tr>
                                        <th scope="row">'.$vhno.'</th>
                                        
                                        <td>'.$vowner.'</td>
                                        <td>'.$vname.'</td>
                                        <td>'.$vtype.'</td>
                                        <td>'.$vmodel.'</td>
                                      
                                        <td><a href="edit.php?editvhno='.$vhno.'" class="btn btn-primary">edit</a></td>
                                        <td><a href="delete.php?deletevhno='.$vhno.'" class="btn btn-danger">delete</a></td>
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
