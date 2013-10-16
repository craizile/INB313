<?php

echo "<h1>Yes! local host working!</h1>";

echo "<h2>Here is the directory of INB313: </h2>";

$dir    = 'file://localhost/Applications/XAMPP/xamppfiles/htdocs/INB313/';
$files1 = scandir($dir);

$n = 0;

for ($i=0; $i < sizeof($files1); $i++) { 
	if ($i>3) {
		print("<a href='http://localhost/INB313/{$files1[$i]}'>{$files1[$i]}</a><br>");
	}
	
}

?>