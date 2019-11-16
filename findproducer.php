<?php
//Connecting
$conn = mysqli_connect("134.74.112.21","ly019f","thomas","d115");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//Connecting done
$artistvalue=$_POST["artist"];
$yearvalue=$_POST["year"];
$sql = "SELECT * FROM PRODUCER WHERE name<>
(SELECT name FROM PRODUCES WHERE title<>(SELECT title FROM CD WHERE year='$yearvalue' AND title<>
(SELECT title FROM HAS WHERE tracknumber <>
(SELECT tracknumber FROM SONG WHERE artist='$artistvalue'))))";

if(!mysqli_query($conn,$sql))
{
 echo("Error description: " . mysqli_error($conn));
}
else{
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. " - Address: " . $row["address"]."<br>";
    }
} else {
    echo "0 results";
}
}
mysqli_close($conn);
echo "Connected successfully";
?>