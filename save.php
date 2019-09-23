
<?php
session_start();
$error=false;
// $_SESSION['error']=$error;

if(isset($_POST["login"]))
{

$username=$_POST['username'];
$password=$_POST['password'];  

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=blogdb;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare(" SELECT * FROM bloguser where username=:user");
$req->execute(array('user'=>$username));
$result=$req->fetch();

if ($password == $result['userpw']){
	$_SESSION['user']=$result['username'];
	// $_SESSION['pwd']=$result['userpw'];
	$_SESSION['last']=$result['lastname'];
	$_SESSION['uid']=$result['userId'];
	$_SESSION['statue']=$result['id_statue'];
	header ('location:index.php');
}
else{
	echo "not good";
	$error=true;
	$_SESSION['error']=$error;
	header ('location:logIn.php');

}

}
