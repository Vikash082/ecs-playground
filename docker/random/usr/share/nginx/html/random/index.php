<!DOCTYPE html>
<html>
<body>

<?php
echo "<strong>Random Service</strong>";
$output = shell_exec('/usr/games/fortune');
echo "<pre>$output</pre>";
echo "<br/>";
echo "Container name: " . gethostname();
echo "<hr/>";

?>  