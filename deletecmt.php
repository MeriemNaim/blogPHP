<?php
    require ('admin/MySqlDrive.php');
    $db_con = new MySqlDrive();

session_start();


if($_GET['statue']=='delete'){

  $test=$_GET['CID'];
  $id = $_GET['statue'];
  $e=$_GET['P_ID'];

 $A=1;
 $date=date('Y-m-d H:i:s');
    $query = "UPDATE comment SET cmtst='$A',DD='$date'
    WHERE cmtid='$test' ";
    $db_con->excute_query($query);
header('location:./');
    
}
// if($_GET['statue']=='edit'){
//  $id = $_GET['statue'];
//  echo $id ."<br/>";
// $test=$_GET['P_ID'];
// echo $test;
//     $query = "SELECT * FROM articles WHERE idart=$test";
//     $result = mysqli_query($db_con->db_connect(), $query);
//     if(mysqli_num_rows($result) == 1){
//         $row = $result->fetch_array();
//         $titre = $row['titre'];
//         $content = $row['content'];
//         $update = TRUE;
//     }
// }

?>
