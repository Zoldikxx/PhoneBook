<?php
$myFile = fopen("data.txt", "r+") or die("cannot open file");
while(!feof($myFile)){
  $line = fgets($myFile);
  $array = explode("|",$line);
  $array2 = explode(" ",$array[0]);
  if($array2[0] == $_GET["name"]){
    $record = $line;
  }
}
$contents = file_get_contents("data.txt");
$newContents = str_replace($record, '', $contents);
file_put_contents("data.txt",$newContents);
header("Location:home.php");
