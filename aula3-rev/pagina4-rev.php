<?php
	$skils_a = array("PHP", "Test drive development", "scrum");
	$skils_b = "PHP, Test drive development, scrum";

echo "<h2>implode(glue, pieces)</h2>";
$value = implode($skils_b, "', '");
var_dump($value);
echo "<hr>"
?>