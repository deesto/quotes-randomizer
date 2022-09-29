<?php
$font          = "Lucida\ Grande,Verdana,Lucida,Helvetica,Arial,sans-serif";
$fontsize      = "1.75";
$quotesource   = "quotes";

echo "<font face=\"$font\" size=\"$fontsize\">";
$quotes        = file("$quotesource");
$quote         = rand(0, sizeof($quotes)-1);
echo $quotes[$quote];
echo "</font>";
/*
echo "<br/>";
echo "<br/>";
echo "<form>";
echo "<input type=\"button\" value=\"More?\" onclick=\"history.go(0)\" />";
echo "</form>";
*/
?>
