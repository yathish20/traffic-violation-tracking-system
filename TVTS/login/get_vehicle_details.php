<?php
include './config.php';

// Check if vhno parameter is set in POST request
if (isset($_POST['vhno'])) {
    // Retrieve vhno from POST data
    $vhno = $_POST['vhno'];

    // Prepare and execute the stored procedure to get vehicle details
    $stmt = $conn->prepare("CALL GetVehicleOwnerDetails(?)");
    $stmt->bind_param("s", $vhno);
    $stmt->execute();

    // Bind result variables
    $stmt->bind_result($owner_name, $vehicle_make, $vehicle_model);

    // Fetch result
    if ($stmt->fetch()) {
        // Format the response
        $response = "Owner: $owner_name\nVehicle Name: $vehicle_make\nModel: $vehicle_model";
        echo $response;
    } else {
        // If no rows are fetched, return an error message
        echo "Error: Vehicle details not found for provided vhno.";
    }

    // Close statement
    $stmt->close();
} else {
    // If vhno parameter is not set, return an error message
    echo "Error: vhno parameter is not set.";
}
?>