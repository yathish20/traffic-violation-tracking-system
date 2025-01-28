<?php
function displayUserProfile() {
    if(isset($_SESSION['username'])) {
        // Place your database connection code here
        include 'config.php';
        // Check connection
        

        $username = $_SESSION['username'];
        $sql = "SELECT police_id, username, policename, phoneno, email FROM p_info WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "<p>Welcome, ".$_SESSION['username']."!</p>";
            echo "<p><strong>Police ID:</strong> " . $row["police_id"] . "</p>";
            echo "<p><strong>Username:</strong> " . $row["username"] . "</p>";
            echo "<p><strong>Police Name:</strong> " . $row["policename"] . "</p>";
            echo "<p><strong>Phone No:</strong> " . $row["phoneno"] . "</p>";
            echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
        } else {
            echo "No user found";
        }
        $stmt->close();
        $conn->close();
    }
}
?>
