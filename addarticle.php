<?php
    session_start();
 try
{
  $conn= new PDO('mysql:host=localhost;dbname=blogdb;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


 if(isset($_POST["titre"]))
    {
$titre = $_POST["titre"];
    }
    if(isset($_POST["content"]))
    {
$content= $_POST["content"];
    }

    if(isset($_POST["category"]))
    {
$category=$_POST["category"];
    }

$msg="";
require("getcategorie.php");


if(isset($_POST["enregistrer"]))
{echo "salam";
      $image_nom = $_FILES["image"]["name"];
      $image_tmp = $_FILES["image"]["tmp_name"];
      $imageExt = explode(".", $image_nom);
       $imageExtAct = strtolower(end($imageExt));
      $imageNomNouv = uniqid("", true).".".$imageExtAct;

      $sql = "INSERT INTO articles (titre, content, idUser, idcat,image)
    VALUES(:titre, :content, :idUser, :idcat,:image)";
    $req_art = $conn->prepare($sql);
    $req_art->execute(array(
        
        "titre" => $titre,
        "content" => $content,
        "idUser" => $_SESSION['uid'],
        "idcat" => intval($category),
        "image"=>$imageNomNouv

    ));
   $cible = "images/".basename($imageNomNouv);
   move_uploaded_file($image_tmp, $cible);


   if(!$req_art) {
    print($conn->errorInfo());
   }
   header("Location:blog-list.php");
}

?>
<!DOCTYPE html>
<html>
    <header>
        <meta charset="utf-8">
        <title>ADD ARTICLE</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
            <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-filestyle.min.js"></script>
            <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <link type="text/css" rel="stylesheet" href="style.css">
    </header>
    <body>

<div t class="btn btn-sub btn-success"><a href="blog-list.php">take me back to blog </a>   </div>
      <form class="form-inline  my-2 my-lg-0 ml-auto">
         <label> <?php echo "Hello " .$_SESSION['user'];?></label>
       </form>
<div class="fond">
 <form  style="color: #757575;" method="post" class="form"  enctype="multipart/form-data">
             <p class="h4 mb-4">Article</p>

                    <!-- First name -->
                    <div class="md-form col-xl-4 article">
                        <label for="materialRegisterFormFirstName">Titre</label>
                        <input type="text" id="materialRegisterFormFirstName" class="form-control " aria-describedby="materialRegisterFormPasswordHelpBlock" name="titre" required>
                    </div>

                    <!-- Last name -->
                    <div class="md-form col-xl-4 article">
                        <label for="materialRegisterFormLastName">Contenu</label>
                        <textarea class="form-control" rows=20 cols=50 name="content" required></textarea>
                    </div>
         <div class="col-xs-4">
    	<div class="form-group">
	      <label class="control-label">File upload with different text</label>
            <input type="hidden" name="size" value="1000000">
	      <input type="file" name="image" class="filestyle" data-button-Text="Select a File" >
		</div>
     </div>
                <select class="browser-default custom-select" name= "category">

                    <?php
                        while($result=$req->fetch())
                        {
                            ?>
                            <option value=<?php echo $result['idcat']; ?>> <?php echo $result['nom_cat']; ?></option>

                            <?php
                        }

                    ?>
                </select>
            <input type="submit" name="enregistrer" class="btn btn-sub btn-success" value="Enregistrer">
        </form>
            </div>
    </body>

</html>
