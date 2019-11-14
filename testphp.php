<!DOCTYPE HTML>
<html>
<body>
<form action="insertproducer.php" method="post" id="insertproducer">
  Name: <input type="text" name="name"><br>
  Address: <input type="text" name="address"><br>
</form>
<button type="submit" form="insertproducer" value="Submit">Submit</button>

<form action="insertcd.php" method="post" id="insertcd">
  Title:<input type="text" name="title"><br>
  Year: <input type="text" name="year"><br>
  Type: <input type="text" name="type"><br>
  Producer name: <input type="text" name="producername"><br>
  Supplier name: <input type="text" name="suppliername"><br>
</form>

<button type="submit" form="insertcd" value="Submit">Submit</button>

<form action="insertcustomerrent.php" method="post" id="insertcustomerrent">
  Name: <input type="text" name="name"><br>
  SSN: <input type="text" name="ssn"><br>
  telephone: <input type="text" name="telephone"><br>
  CD title: <input type="text" name="title"><br>
  borrow date: <input type="text" name="borrowdate"><br>
  duration: <input type="text" name="duration"><br>
</form>
<button type="submit" form="insertcustomerrent" value="Submit">Submit</button>


<form action="insertviprent.php" method="post" id="insertviprent">
  Vip Name: <input type="text" name="name"><br>
  SSN: <input type="text" name="ssn"><br>
  telephone: <input type="text" name="telephone"><br>
  startingdate: <input type="text" name="startingdate"><br>
  discount percentage: <input type="text" name="discountpercentage"><br>
  CD title: <input type="text" name="title"><br>
  borrow date: <input type="text" name="borrowdate"><br>
  duration: <input type="text" name="duration"><br>
</form>
<button type="submit" form="insertviprent" value="Submit">Submit</button>

<form action="cddeadline.php" method="post" id="cddeadline">
  Title:<input type="text" name="title"><br>
  Date: <input type="text" name="date"><br>
</form>
<button type="submit" form="cddeadline" value="Submit">Submit</button>

<form action="findproducer.php" method="post" id="findproducer">
  Artist:<input type="text" name="artist"><br>
  Year: <input type="text" name="year"><br>
</form>
<button type="submit" form="findproducer" value="Submit">Submit</button>

CD<br>
<?php
$conn = mysqli_connect("134.74.112.21","ly019f","thomas","d115");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM CD";
if(!mysqli_query($conn,$sql))
{
 echo("Error description: " . mysqli_error($conn));
}
else{
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Title: " . $row["title"]. " - Year: " . $row["year"]." - Type: " . $row["type"]."<br>";
    }
} else {
    echo "0 results";
}
}
mysqli_close($conn);
?>

Song<br>
<?php
$conn = mysqli_connect("134.74.112.21","ly019f","thomas","d115");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM SONG";
if(!mysqli_query($conn,$sql))
{
 echo("Error description: " . mysqli_error($conn));
}
else{
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. " - Artist: " . $row["tracknumber"]. " - Tracknumber: " . $row["tracknumber"]."<br>";
    }
} else {
    echo "0 results";
}
}
mysqli_close($conn);
?>

Producer<br>
<?php
$conn = mysqli_connect("134.74.112.21","ly019f","thomas","d115");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM PRODUCER";
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
?>

Supplier<br>
<?php
$conn = mysqli_connect("134.74.112.21","ly019f","thomas","d115");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM SUPPLIER";
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
?>

Customer<br>
<?php
$conn = mysqli_connect("134.74.112.21","ly019f","thomas","d115");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM CUSTOMER";
if(!mysqli_query($conn,$sql))
{
 echo("Error description: " . mysqli_error($conn));
}
else{
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Ssn: " . $row["socialsecuritynumber"]. " - Name: " . $row["name"]." - Telephone: " . $row["telephone"]."<br>";
    }
} else {
    echo "0 results";
}
}
mysqli_close($conn);
?>

Vip<br>
<?php
$conn = mysqli_connect("134.74.112.21","ly019f","thomas","d115");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM CUSTOMER";
if(!mysqli_query($conn,$sql))
{
 echo("Error description: " . mysqli_error($conn));
}
else{
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Ssn: " . $row["socialsecuritynumber"]. " - Starting date: " . $row["startingdate"]." - Discount: " . $row["discount"]."<br>";
    }
} else {
    echo "0 results";
}
}
mysqli_close($conn);
?>

Has<br>
<?php
$conn = mysqli_connect("134.74.112.21","ly019f","thomas","d115");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM HAS";
if(!mysqli_query($conn,$sql))
{
 echo("Error description: " . mysqli_error($conn));
}
else{
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "title: " . $row["title"]. " - tracknumber: " . $row["tracknumber"]."<br>";
    }
} else {
    echo "0 results";
}
}
mysqli_close($conn);
?>

Produces<br>
<?php
$conn = mysqli_connect("134.74.112.21","ly019f","thomas","d115");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM PRODUCES";
if(!mysqli_query($conn,$sql))
{
 echo("Error description: " . mysqli_error($conn));
}
else{
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "name: " . $row["name"]. " - title: " . $row["title"]."<br>";
    }
} else {
    echo "0 results";
}
}
mysqli_close($conn);
?>

Supplied<br>
<?php
$conn = mysqli_connect("134.74.112.21","ly019f","thomas","d115");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM SUPPLIED";
if(!mysqli_query($conn,$sql))
{
 echo("Error description: " . mysqli_error($conn));
}
else{
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "name: " . $row["name"]. " - title: " . $row["title"]."<br>";
    }
} else {
    echo "0 results";
}
}
mysqli_close($conn);
?>

Produces<br>
<?php
$conn = mysqli_connect("134.74.112.21","ly019f","thomas","d115");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM RENTS";
if(!mysqli_query($conn,$sql))
{
 echo("Error description: " . mysqli_error($conn));
}
else{
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "socialsecuritynumber: " . $row["socialsecuritynumber"]. " - title: " . $row["title"]. " - date: " . $row["date"]. " - rentperiod: " . $row["rentperiod"]."<br>";
    }
} else {
    echo "0 results";
}
}
mysqli_close($conn);
?>

</body>
</html>


