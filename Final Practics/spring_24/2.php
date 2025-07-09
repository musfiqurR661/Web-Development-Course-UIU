<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Info</title>
</head>

<body>
    <form method="POST" action="">
        Seed Value: <input type="text" name="seed" required><br>
        Terms: <input type="number" name="terms" required><br>
        <input type="submit" value="Generate Sequence">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $seed = (int) $_POST['seed'];
        $terms = (int) $_POST['terms'];

        $sequence = [];
        $current = $seed;

        for ($i = 0; $i < $terms; $i++) {
            $sequence[] = $current;

            $sum = 0;
            $digits = str_split((string)$current);
            foreach ($digits as $d) {
                $sum += (int)$d;
            }

            $current += $sum;
        }

        echo "<h3>Generated Sequence (Sum of digits):</h3>";
        echo implode(", ", $sequence);
    }
    ?>
</body>

</html>
