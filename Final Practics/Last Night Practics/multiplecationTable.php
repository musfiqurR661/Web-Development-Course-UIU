<!DOCTYPE html>
<html>
<body>
<table align="left" border="1" cellpadding="3" cellspacing="0">
<?php
// Outer loop for creating rows in the table
for($i=1; $i<=6; $i++)
{
    echo "<tr>"; // Start a new table row
    
    // Inner loop for creating cells in each row
    for ($j=1; $j<=5; $j++)
    {
        // Print the multiplication table in each cell
        echo "<td>$i * $j = " . $i * $j . "</td>";
    }
    
    echo "</tr>"; // End the table row
}
?>
</table>
</body>
</html>
