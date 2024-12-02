<?php



//PHP Check End-Of-File - feof()
/*

$myfile = fopen("users.txt", "r");
while(!feof($myfile)) 
{
  echo fgets($myfile) . "<br>";
  //echo fgets($myfile) . "<br>";
}
fclose($myfile);

*/



$myfile = fopen("users.txt", "r");
fread($myfile,filesize("users.txt"));
fclose($myfile);

?>