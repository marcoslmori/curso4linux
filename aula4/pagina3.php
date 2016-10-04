<?php
$skils_a = array("PHP", "Test Driven Development", "scrum");
$skils_b = "PHP, Test Driven Developlment, scrum";

echo "<h2>implode(glue, pieces) </h2>";
$value = implode($skils_a, ',');
var_dump($value);
echo "<hr>";

echo "<h2>explode(delimiter, string) </h2>";
$value = explode(',', $skils_b);
var_dump($value);
echo "<hr>";

