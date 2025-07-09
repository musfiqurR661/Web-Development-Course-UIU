<?php
// Outer loop for iterating over values of $a from 0 to 9
for($a=0; $a< 10; $a++)
 { 
   // Inner loop for iterating over values of $b from 0 to 9
   for($b=0; $b< 10; $b++)
      {
	     // Print the concatenated values of $a and $b followed by a comma and space
	     echo $a.$b.", "; 
      }
 }
 
// Move to the next line after printing the entire pattern
printf("\n"); 

?>
