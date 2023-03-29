<?php
echo "version 01 - " . gethostname() . "<br>";
if (isset($_GET['loadtest'])) {             
    echo "Load test <br>";     
    for($i = 0; $i < 1000000000; $i++) {
        $a += $i;
    }  
    echo "Done load test <br>";
}