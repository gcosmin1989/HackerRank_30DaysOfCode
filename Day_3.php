<?php

$n = 20;
if ($n % 2 == 1) {
    echo "Weird";
} elseif ($n % 2 == 0 && $n > 2 && $n < 5) {
    echo " Not Weird";
} elseif ($n % 2 == 0 && $n > 6 && $n <= 20) {
    echo "Weird";
} elseif ($n % 2 == 0 && $n > 20) {
    echo "Not weird";
}

