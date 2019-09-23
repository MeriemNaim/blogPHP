<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogdb";

$conn = mysqli_connect($servername, $username,$password ,$dbname);

if(! $conn ) {
die('Could not connect: ' . mysqli_error());
}

$sql = 'SELECT * FROM bloguser
where id_statue=1';
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {




	} }
else {
echo "0 results";
}
mysqli_close($conn); 
?>

