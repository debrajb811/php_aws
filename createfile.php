<?php
//Sampel student file for practise

//include the Connection string   to connect
include 'connecttoaws.php';



//get the bucket name
$bucket = $_GET["bucket"];

//create the file name
$key = 'file1.txt';

//put the file and data in our bucket
$result = $client->putObject(array(
    'Bucket' => $bucket,
    'Key'    => $key,
    'Body'   => "This is a file created by SDk Lab class"
));

//HTML to create our webpage
echo "<h2 align=\"center\">File - $key has been successfully uploaded to $bucket</h2>";
echo "<div align = \"center\"><img src=\"http://aemonline.net/images/logo_02.jpg\"></img></div>";
echo "<div align = \"center\"><a href=\"readfile.php?bucket=$bucket&key=$key\">Click Here To Read File you have just created</a></div>";
?>
