<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "company"; // replace with your DB name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query all employees
$result = $conn->query("SELECT * FROM employess");

$employees = [];
$totalSalary = 0;

// Fetch data and calculate total salary
while ($row = $result->fetch_assoc()) {
    $employees[] = $row;
    $totalSalary += $row['salary'];
}

echo "<table border='1' cellpadding='8'>";
echo "<tr>
        <th>ID</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Hire Date</th>
        <th>Job ID</th>
        <th>Percentage</th>
      </tr>";

// Display rows with percentage instead of salary
foreach ($employees as $emp) {
    $percentage = ($emp['salary'] / $totalSalary) * 100;
    echo "<tr>
            <td>{$emp['id']}</td>
            <td>{$emp['email']}</td>
            <td>{$emp['phone_number']}</td>
            <td>{$emp['hire_date']}</td>
            <td>{$emp['job_id']}</td>
            <td>" . number_format($percentage, 2) . "%</td>
          </tr>";
}

echo "</table>";

$conn->close();
?>
