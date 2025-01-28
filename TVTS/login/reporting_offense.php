<?php


// Include other necessary files
include 'config.php';
include 'sidebar.php';

// Define an empty variable to hold the message
$message = '';

// Handle form submission
if (isset($_POST["create_challan"])) {
    // Get form data
    $challan_date = $_POST["challan_date"];
    $violation_type = $_POST["violation_type"];
    $vehicle_number = $_POST["vehicle_number"];

    // Query to fetch challan_cost from violations_cost table based on violation_type
    $violation_cost_query = "SELECT amount FROM violations_cost WHERE violation_type = ?";
    $stmt = $conn->prepare($violation_cost_query);
    $stmt->bind_param("s", $violation_type);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $challan_cost = $row["amount"];

        // Insert values into challan table
        $insert_query = "INSERT INTO challan (challan_date, challan_cost, violation_type, pid, vhno) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($insert_query);
        // Assuming police_id is available in session
        $police_id = $_SESSION['police_id'];
        $stmt->bind_param("sisis", $challan_date, $challan_cost, $violation_type, $police_id, $vehicle_number);
        if ($stmt->execute()) {
            // Set the message
            $message = 'Offense recorded';
        } else {
            $message = "Error inserting challan details: " . $conn->error;
        }
    } else {
        $message = "Please Add the violation type !!.";
    }
    // Close statement
    $stmt->close();
}

// Function to fetch vehicle details
function fetch_vehicle_details($conn, $vehicle_number) {
    // Prepare SQL statement
    $stmt = $conn->prepare("SELECT * FROM vehicle_detail WHERE vhno=?");
    $stmt->bind_param("s", $vehicle_number);
    
    // Execute SQL statement
    $stmt->execute();
  
    // Get result
    $result = $stmt->get_result();
  
    // Check if vehicle number exists
    if ($result->num_rows > 0) {
        // Fetch and display details in a table
        echo '<div class="box">';
        echo '<h3>Fetched Vehicle Details</h3>';
        echo '<div class="table-responsive">';
        echo '<table class="table table-sm table-bordered table-smaller">';
        while ($row = $result->fetch_assoc()) {
            echo '<tr><td>Vehicle Number</td><td>' . $row['vhno'] . '</td></tr>';
            echo '<tr><td>Vehicle Owner</td><td>' . $row['vowner'] . '</td></tr>';
            echo '<tr><td>Vehicle Name</td><td>' . $row['vname'] . '</td></tr>';
            echo '<tr><td>Vehicle Type</td><td>' . $row['vtype'] . '</td></tr>';
            echo '<tr><td>Vehicle Model</td><td>' . $row['vmodel'] . '</td></tr>';
            // Add more fields as needed
        }
        // Additional fields with input boxes
        echo '<form method="post" action="">'; // Action set to blank to submit to the same page
        echo '<tr><td>Challan Date</td><td><input type="date" name="challan_date" required></td></tr>';
        echo '<tr><td>Violation Type</td><td><select name="violation_type" required>';
        echo '<option value="select">select</option>';
        echo '<option value="Drunk and Drive">Drunk and Drive</option>';
        echo '<option value="no seatbelt">No Seatbelt</option>';
        echo '<option value="Not Wearing Helmet">Not Wearing Helmet</option>';
        echo '<option value="jumping signal">Jumping Traffic Signals</option>';
        echo '<option value="No license">No license</option>';
        echo '<option value="Driving Rashly">Driving Rashly</option>';
        echo '<option value="overspeed">Violating Speed Regulations</option>';
        
        echo '</select></td></tr>'; 
        echo '<input type="hidden" name="vehicle_number" value="' . $vehicle_number . '">';
        echo '<tr><td colspan="2"><input type="submit" name="create_challan" value="Submit" class="btn btn-primary"></td></tr>'; // Hidden field to pass vehicle_number
        echo '</form>';
        echo '</table>';
        // Submit button
        echo '</div>';
    } else {
        // Displaying "Vehicle number not found" message in a styled box
        echo '<div class="notfound">';
        echo   "Vehicle number not found.";
        echo '</div>';
    }
  
    // Close statement
    $stmt->close();
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Vehicle Details</title>

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <style>


      .back {
                background: -webkit-linear-gradient(to right, #d2f9f2, #d8ddf3);
                background: linear-gradient(to right, #d2f9f2, #d8ddf3);
        }

        .table-smaller {    
            font-size: 23px;
        } 
        .table-smaller th{
            text-align: center;
            color: black;
            text-decoration: underline;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            background-color:  #0F7CB7;
        }
        .table-smaller td {
            text-align: center;
            color: black;
            /* font-style:italic; */
            background-color:#c7e3f8;
            
        }
        .table-smaller th {
            border: 2px solid black;
        }
        .table-smaller td {
            border: 2px solid black;
        }
        .styled-box {
            background-color: lightgreen;
            padding: 20px;
            border: 4px solid darkgreen;
            margin-top: 50px;
            color: blue;
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            /* font-style: oblique; */
            width: 50%;
            border-radius: 40px;
            margin-left: 380px;
        }
        .notfound {
            background-color: #ff4d4d;
            padding: 18px;
            border: 2px solid black;
            margin-top: 50px;
            color: black;
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            /* font-style: oblique; */
            width: 35%;
            border-radius: 30px;
            margin-left: 380px;
          
            
        }
        /* Additional styles from the first file */
        .box {
            background-color: #fff;
            padding: 20px;
            /* border: 3px solid black; */
            margin-top: 20px;
        }
        .box h3 {
            color: black;
            text-align: center;
            background-color: #fff;
            padding: 10px;
            border-radius: 5 px;
        }

        .btn-primary {
            background-color: lightblue;
            color: darkcyan;
            padding: 9px;
            border-radius: 10px;
            width: 12%;
            font-weight: bold;
            font-size: large;

        }
        .inputbox {
            padding: 6px;
            margin-top: 11px;
            background-color: #cedce6;
            /* border-color: 2px solid red; */
            border-radius: 10px;
            width: 20%;
            color: black; 
            font-size: larger;
            font-weight: bold;
            /* border-radius: 30px; */
            align-items: center;
        }

        .top{ 
            text-align: center;
            font-size: 40px;
            font-weight: bold;
            /* font-style: oblique; */
            color: #0F7CB7 ;
            text-decoration:underline;
        }
    </style>
</head>
<body class="back">
<div class="main">
    <div class="top">
        <h2>Enter Vehicle Number</h2>
    </div>
    <center>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <input type="text" placeholder="Enter Vehicle Number" name="vehicle_number" class="inputbox"  required>
        <input type="submit" name="fetch_details" value="Fetch Details" class="btn btn-primary">
    </form>
    </center>
    <div class="mt-4 custom-width">
        <!-- Display message -->
        <?php if (!empty($message)): ?>
            <div class="styled-box">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>
        <!-- PHP code to display fetched vehicle details and create challan form goes here -->
        <?php
       // Display message if available
       if (isset($_SESSION['message'])) {
        echo '<div class="box">';
        echo '<h3>' . $_SESSION['message'] . '</h3>';
        echo '</div>';
        unset($_SESSION['message']); // Clear the message
    }

    // Check if the form to fetch details was submitted
    if (isset($_POST["fetch_details"])) {
        $vehicle_number = $_POST["vehicle_number"];
        fetch_vehicle_details($conn, $vehicle_number);
    } else {
        // If the vehicle number was not found, display a message in a styled box
        if (!empty($message) && strpos($message, 'Vehicle number not found') !== false) {
            echo '<div class="styled-box">';
            echo $message;
            echo '</div>';
        }
    }
        ?>
    </div>
</div>
</body>
</html>
