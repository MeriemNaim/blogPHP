<?php
    require ('MySqlDrive.php');
    $db_con = new MySqlDrive();

session_start();
$name = "";
$phone = "";
$roll = "";
$id = "";
$update = FALSE;

if($_GET['statue']=='delete'){
  $test=$_GET['P_ID'];
  $id = $_GET['statue'];
 echo $id ."<br/>";
 $A=1;
 $date=date('Y-m-d H:i:s');
    $query = "UPDATE articles SET deleted='$A',DD='$date'
    WHERE idart=$test";
    $db_con->excute_query($query);
// header('location:postes');
    
}

if($_GET['statue']=='edit'){
 $id = $_GET['statue'];
 echo $id ."<br/>";
$test=$_GET['P_ID'];
echo $test;
    $query = "SELECT * FROM articles WHERE idart=$test";
    $result = mysqli_query($db_con->db_connect(), $query);
    if(mysqli_num_rows($result) == 1){
        $row = $result->fetch_array();
        $titre = $row['titre'];
        $content = $row['content'];
        $update = TRUE;
    }
}

if(isset($_POST['enregistrer'])){
$titre =mysqli_real_escape_string($db_con->db_connect(),$_POST['titre']);
$test=$_GET['P_ID'];
 $content =mysqli_real_escape_string($db_con->db_connect(),$_POST['content']);

 $date=date('Y-m-d H:i:s');
    $query = "UPDATE articles SET titre='$titre',content='$content' ,DM='$date'
    WHERE idart=$test";
    echo $titre ."<br/>";
    echo $content ."<br/>";
    $result = mysqli_query($db_con->db_connect(),$query)
     or die(mysqli_error($db_con->db_connect()));
     header('location:postes');
      // .$mysqli->error
    // header('location:./');
}

?>


<!DOCTYPE html>
<html>
    <header>
        <meta charset="utf-8">
        <title>AAD ARTICLE</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
            <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-filestyle.min.js"></script>
            <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <link type="text/css" rel="stylesheet" href="style.css">
    </header>
    <body>

<div  class="btn btn-sub btn-success "> <a class="text-white" href="./">take me back </a>   </div>

      <form class="form-inline  my-2 my-lg-0 ml-auto">
         <label>
           <?php 
           // echo "hello " .$_SESSION['user']; 
           ?>
               
             </label>
                

     </form>




        <div class="fond">
 <form  style="color: #757575;" method="post" class="form"  enctype="multipart/form-data">
             <p class="h4 mb-4">Article</p>

                    <!-- First name -->
                    <div class="md-form col-xl-4 article">
                        <label for="materialRegisterFormFirstName">Titre</label>
                        <input type="text" id="materialRegisterFormFirstName" class="form-control " aria-describedby="materialRegisterFormPasswordHelpBlock" name="titre"
                          value=" <?php echo $row['titre']; ?> " >
                    </div>

                    <!-- Last name -->
                    <div class="md-form col-xl-4 article">
                        <label for="materialRegisterFormLastName">Contenu</label>
                        <textarea class="form-control" rows=20 cols=50 name="content" 
 > <?php echo $row['content']; ?></textarea>
                    </div>
         <div class="col-xs-4">

     </div>
   
            <input type="submit" name="enregistrer" class="btn btn-sub btn-success" value="Enregistrer">
        </form>
            </div>
    </body>

</html>
