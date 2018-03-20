 <?php

$data = $_POST["chainValue"];
$myfile = fopen("data.json", "w") or die("Unable to open file!");

fwrite($myfile, $data);

fclose($myfile);

include 'index2.html';

?>