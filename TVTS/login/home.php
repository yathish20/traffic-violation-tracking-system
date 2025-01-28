<?php
require_once('config.php');

// Check database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Execute the query using query()
$query = "SELECT COUNT(vhno) AS vehicleno_count FROM challan";
$stmt = $conn->query($query);

// Check for errors in query execution
if (!$stmt) {
    die("Query failed: " . $conn->error);
}

// Fetch the result using fetch()
$result = $stmt->fetch_assoc();

// Check if any result is fetched
if (!$result) {
    die("No result fetched.");
}

// Get the total count of unique UIDs
$total_unique_uids = $result['vehicleno_count'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Another Frame after login</title>
    
    <style>

        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
           /* background-image: url('./images/traffic_main.jpg');  Change this to the video source */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;   
            background-position: center;
            background-color: #fff;
        } 

        #myVideo {
            position:fixed;
            top:2%;
            left: 7%;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -5; 
        } 

        .container {
            position: relative;
            width: 100%;
            height: 100%;
        } 

        .challans-box {
            width: 400px;
            height: 100px;
            border: 1px solid black;
            margin-top: 1%;
            color: #fff;
            text-align: center; 
            line-height: 100px; /* Center the text vertically */
            font-size: 30px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            border-radius: 70px;
            /* margin: 50px auto;  */
            text-shadow: 2px 2px 4px rgb(0, 174, 255);
            background-color: #0F7CB7;
            box-shadow: 2px 2px 20px rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 50%;
            left: 80%;
            transform: translate(-50%, -10%);
        }

        .challans-box:hover {
            box-shadow: 20px 20px 20p   x rgba(0, 0, 0, 0.5);
            transition-property: transform;
            transition-duration: 3s;
            transition-timing-function: ease-in-out;
            background-color: lightgreen;
            transition: 0.5s;
        }
       
        
    </style>

</head>
<body>
    <div class="container">
        <video autoplay muted loop id="myVideo">
            <source src="Video1.mp4" type="video/mp4">
        </video>
    </div>

    <?php include('sidebar.php'); ?>
    
    <div class="main">
        <!-- Display the count in a box -->
        <div class="challans-box">
            Total no of Challans: <?php echo $total_unique_uids; ?>
        </div>
    </div>

</body>
</html>