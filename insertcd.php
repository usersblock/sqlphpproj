<?php
//Connecting
$conn = mysqli_connect("134.74.112.21","ly019f","thomas","d115");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//Connecting done
$titlevalue=$_POST["title"];
$yearvalue=$_POST["year"];
$typevalue=$_POST["type"];
$producervalue=$_POST["producername"];
$suppliervalue=$_POST["suppliername"];
$sql = "INSERT INTO CD(title,year,type)
VALUES ('$titlevalue', '$yearvalue','typevalue')";
$sqltwo = "INSERT INTO PRODUCES(name,title)
VALUES ('$producervalue', '$titlevalue')";
$sqlthree = "INSERT INTO SUPPLIED(name,title)
VALUES ('$suppliervalue', '$titlevalue')";

if(!mysqli_query($conn,$sql))
{
 echo("Error description: " . mysqli_error($conn));
}
if(!mysqli_query($conn,$sqltwo))
{
 echo("Error description: " . mysqli_error($conn));
}
if(!mysqli_query($conn,$sqlthree))
{
 echo("Error description: " . mysqli_error($conn));
}
mysqli_close($conn);
echo "Connected successfully";
?>