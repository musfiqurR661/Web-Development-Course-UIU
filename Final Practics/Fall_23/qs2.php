<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST" action="">
        Enter a number: <input type="number" name="n" required>
        <button type="submit">Generate</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['n'])) {
        $n = (int) $_POST['n'];
        echo "<br>";
        // echo "<h3>Multiplication Table of size $n × $n</h3>";
        echo "<table border='1' style='border-collapse: collapse'>";

        for ($row = 1; $row <= $n; $row++) {
            echo "<tr>";
            for ($col = 1; $col <= $n; $col++) {
                echo "<td style='padding: 5px; text-align: center'>" . ($row * $col) . "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    }
    ?>

</body>
</html>