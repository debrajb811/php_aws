<?php
//Sample Code for Student Practise

//connection string
include 'connecttoaws.php';

// Create a unique bucket name
$bucket = uniqid("devrajbktclass101", true);

// Create bucket using a unique bucket name
$result = $client->createBucket(array(
    'Bucket' => $bucket
));

//HTML to Create our webpage
echo "<h1 align=\"center\">Welcome to Devraj's AWS Class</h1>";
echo "<div align = \"center\"><img src=\"http://aemonline.net/images/logo_02.jpg\"></img></div>";
echo "<h3 align=\"center\">You have successfully created a bucket called {$bucket}</h3>";
echo "<div align=\"center\"><a href=\"createfile.php?bucket=$bucket\">Click Here to Continue</a></div>";
?>
