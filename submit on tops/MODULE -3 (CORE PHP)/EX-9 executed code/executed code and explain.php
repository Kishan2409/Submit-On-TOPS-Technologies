<?php
$a='1';// $a value is  1
echo $a."<br>";
$b=&$a;// $b value is $a value it's meance $b value is 1
echo $b."<br>";
$b="2&b";// $b vale is 2&b
echo $a."<br>";
echo $b."<br>";
?>