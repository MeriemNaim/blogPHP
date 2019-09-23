<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogdb";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $cmt= $_POST['comment'];
    $id=$_POST['id_article'];
    $userid=$_SESSION['uid'];
    echo "string".$id;
    $sql = "INSERT INTO comment (textcmt,idart,userId)
    VALUES ('$cmt','$id' ,'$userid')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully"; 
    // header("location:'blog-details.php?P_ID=<?php echo $id;?>'");
    
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>