<?php
// DB Connection using variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "electricty_bill";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get POST data
$location = $_POST['location'];
$area = $_POST['area'];
$unit = (int)$_POST['unit'];

// Fetch rate for location and area
$sql = "SELECT * FROM bill_info WHERE location='$location' AND area='$area'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Get appropriate rate based on unit range
    if ($unit <= 75) {
        $rate = $row['rate_0_75'];
    } elseif ($unit <= 200) {
        $rate = $row['rate_76_200'];
    } else {
        $rate = $row['rate_201_above'];
    }

    $base_bill = $unit * $rate;

    // Apply tax
    $tax_rate = 0;
    if ($location == "Dhaka") {
        $tax_rate = 0.20;
    } elseif ($location == "Chittagong") {
        $tax_rate = 0.15;
    }

    $tax_amount = $base_bill * $tax_rate;
    $total_bill = $base_bill + $tax_amount;

    // Output the result
    echo "<h2>Electricity Bill</h2>";
    echo "Your Location: <strong>$location</strong><br>";
    echo "Your Area: <strong>$area</strong><br>";
    echo "Unit Consumed: <strong>$unit</strong><br>";
    echo "Total Bill (including tax): <strong>" . number_format($total_bill, 2) . " BDT</strong>";
} else {
    echo "No rate found for location '$location' and area '$area'.";
}

$conn->close();
?>
