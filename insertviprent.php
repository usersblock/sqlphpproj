<?php
//Connecting
$conn = mysqli_connect("134.74.112.21","ly019f","thomas","d115");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//Connecting done
$namevalue=$_POST["name"];
$ssnvalue=$_POST["ssn"];
$telephonevalue=$_POST["telephone"];
$titlevalue=$_POST["title"];
$startingdatevalue=$_POST["startingdate"];
$discountvalue=$_POST["discountpercentage"];
$borrowdatevalue=$_POST["borrowdate"];
$durationvalue=$_POST["duration"];
$sql = "INSERT INTO CUSTOMER(socialsecuritynumber,name,telephone)
VALUES ('$ssnvalue', '$namevalue','$telephonevalue')";
$sqltwo = "INSERT INTO VIP(socialsecuritynumber,startingdate,discount)
VALUES ('$ssnvalue', '$startingdatevalue','$discountvalue')";
$sqlthree = "INSERT INTO RENTS(socialsecuritynumber,title,date,rentperiod)
VALUES ('$ssnvalue', '$titlevalue','$borrowdatevalue','$durationvalue')";

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