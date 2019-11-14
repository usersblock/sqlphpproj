<?php
//Connecting
$conn = mysqli_connect("134.74.112.21","ly019f","thomas","d115");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//Connecting done
$titlevalue=$_POST["title"];
$datevalue=$_POST["date"];
$sql = "SELECT name,telephone FROM CUSTOMER WHERE socialsecuritynumber<>
(SELECT socialsecuritynumber FROM RENTS WHERE title=$titlevalue AND dateadd('d',date,rentperiod,)<=$datevalue)";

if(!mysqli_query($conn,$sql))
{
 echo("Error description: " . mysqli_error($conn));
}
else{
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. " - Telephone: " . $row["telephone"]."<br>";
    }
} else {
    echo "0 results";
}
}
mysqli_close($conn);
echo "Connected successfully";
?>