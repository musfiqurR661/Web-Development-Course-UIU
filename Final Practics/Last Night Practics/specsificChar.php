<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Count Character Occurrences</title>
</head>

<body>

    <h2>Count Occurrences of a Character in a String</h2>

    <form method="POST" action="">
        <label for="text">Enter a string:</label><br>
        <input type="text" id="text" name="text" required><br><br>

        <label for="char">Enter a character to search:</label><br>
        <input type="text" id="char" name="char" maxlength="1" required><br><br>

        <button type="submit">Count</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST['text'];
        $search_char = $_POST['char'];

        $count = 0;
        $length = strlen($text);

        for ($i = 0; $i < $length; $i++) {
            if (substr($text, $i, 1) === $search_char) {
                $count++;
            }
        }

        // echo "<p>The character '<strong>" . htmlspecialchars($search_char) . "</strong>' appears <strong>$count</strong> times in the string '<strong>" . htmlspecialchars($text) . "</strong>'.</p>";
        echo $count;
    }
    ?>

</body>

</html>