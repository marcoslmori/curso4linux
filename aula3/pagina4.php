<?php
$skils_a = array("PHP, "Test Driven Development", "scrum");
$skils_b = "PHP, Test Driven Developlment, scrum";

echo "<h2>implode(glue, pieces) </h2>";
$value = implode($skils_b, '');
var_dump($value);
echo "<hr>";


