<?php
//connection string to connect s3
include 'connecttoaws.php';

//code to get  bucket and key names  created earlier
$bucket = $_GET["bucket"];
$key = $_GET["key"];

//code to read the file on S3  you have created
$result = $client->getObject(array(
    'Bucket' => $bucket,
    'Key'    => $key
));
$data = $result['Body'];

//HTML to create page
echo "<h2 align=\"center\">The Bucket is $bucket</h2>";
echo "<h2 align=\"center\">The Object's name(file created here) is $key</h2>";
echo "<h2 align=\"center\">The Data in the object(contents in the file) is $data</h2>";
echo "<div align = \"center\"><img src=\"http://aemonline.net/images/logo_02.jpg\"></img></div>";
echo "<div align = \"center\"><a href=\"cleanup.php?bucket=$bucket&key=$key\">Click Here To Remove Files & Bucket you have created in the lab</a></div>";
?>
