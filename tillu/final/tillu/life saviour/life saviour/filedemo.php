
<?php
/*
$myfile=fopen("filedemo.txt", "r");
echo fread($myfile,filesize("filedemo.txt"));
fclose($myfile);
$myfile = fopen("filedemo.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
*/
$myfile = fopen("filedemo1.txt", "w") or die("Unable to open file!");
$txt = "John Doe";
fwrite($myfile, $txt);
$txt = "Jane Doe";
fwrite($myfile, $txt);
$txt = "jane tillu\n";
fwrite($myfile, $txt);
$txt = "If we now open the  file, we will see that Donald Duck and Goofy Goof is appended to the end of the file:

Mickey Mouse
Minnie Mouse
Donald Duck
Goofy Goof";
fwrite($myfile, $txt);
fclose($myfile);
?>