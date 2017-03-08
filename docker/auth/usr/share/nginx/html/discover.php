<!DOCTYPE html>
<html>
<body>

<?php
echo "<strong>Auth Service</strong>";
echo "<strong>There is no place like 127.0.0.1</strong>";
echo "<br/>";
echo "Date & Time: " . date('Y-m-d H:i:s');
echo "<br/>";
echo "Container name: " . gethostname();
echo "<hr/>";

$curl = curl_init();
curl_setopt ($curl, CURLOPT_URL, "http://localhost:51678/v1/metadata");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec ($curl);
curl_close ($curl);
print $result;
?>  

</body>
</html>
