<?php
//Connecting
$conn = mysqli_connect("134.74.112.21","ly019f","thomas","d115");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//Connecting done
$namevalue=$_POST["name"];
$addressvalue=$_POST["address"];
$sql = "INSERT INTO PRODUCER(name,address)
VALUES ('$namevalue', '$addressvalue')";

mysql_query($sql);
echo "Connected successfully";
?>
