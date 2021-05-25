<?php
include("benchmarks/integer.php");
include("benchmarks/float.php");

$starttime=microtime(true);

//Set of interger tests
intAdd();
intSub();
intMulti();
intDive();

//Set of float tests
floatAdd();
floatSub();
floatMulti();
floatDive();

$endtime=microtime(true);

$score=$endtime-$starttime;

printf("Score: ".$score.PHP_EOL."NOTE: Lower is better");
?>
