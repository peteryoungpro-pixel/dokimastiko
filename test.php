<?php
 echo "Εισάγετε την πρώτη τιμή: ";
 $a = (float) trim(fgets(STDIN));
 
 echo "Εισάγετε τη δεύτερη τιμή: ";
 $b = (float) trim(fgets(STDIN));
 
 $c = $a + $b;
 
 echo "\nΤο άθροισμα είναι: " . $c . "\n";
?> 