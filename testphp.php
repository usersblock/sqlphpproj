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
  Producer name: <input type="text" name="year"><br>
  Supplier name: <input type="text" name="type"><br>
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

<form action="cddeadline.php" method="get" id="insertcd">
  Title:<input type="text" name="title"><br>
  Date: <input type="text" name="date"><br>
</form>
<button type="submit" form="cddeadline" value="Submit">Submit</button>

<form action="findproducer.php" method="get" id="insertcd">
  Artist:<input type="text" name="title"><br>
  Year: <input type="text" name="date"><br>
</form>
<button type="submit" form="findproducer" value="Submit">Submit</button>
</body>
</html>

