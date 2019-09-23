<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " .mysql_error());
} 

$sql = "SELECT userId, name, lastname FROM bloguser";
// $result =mysqli_query($conn, $sql);
// print_r($result);

// if(mysqli_num_rows($result) > 0) {
//   while($rows  = mysqli_fetch_array($result)) {
?>
<!-- 
<b style="color:red"> <?php echo $rows['name'] ?> <br/> </b> -->

<?php

//   }
// }
if(isset($_POST['save']))
{  
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$age=$_POST['age'];
$emailadd=$_POST['emailadd'];
$username=$_POST['username'];
$password=$_POST['password'];
$requette = "INSERT INTO bloguser (name,lastname,userage,usermail,username ,userpw) 
VALUES ( '$name','$lastname','$age','$emailadd','$username','$password')"; 

 if (mysqli_query($conn, $requette)) {
    echo "New record created successfully !";
    header ('location:logIn.php');
 } else {
    echo "Error: " . $requette . "" . mysqli_error($conn);
   }
   mysqli_close($conn);
}

?>








<DOCTYPE html>
  <!DOCTYPE html>
  <html>
  <head>
    <title> </title>
  </head>
  <body>
<div class="login-page">
  <div class="form">
    <form class="register-form" method="post"  action="signUp.php">
      <input type="text" placeholder="name" name="name" />
      <input type="text" placeholder="lastname" name="lastname" />
      <input type="number" placeholder="age" name="age" />
      <input type="text" placeholder="emailadd" name="emailadd" />
      <input type="text" placeholder="username" name="username" />
      <input type="password" placeholder="password" name="password" />

      <button><input type="submit" name="save" value="create"/></button>
      <p class="message">Already registered? <a href="logIn.php">SignIn</a></p>
    </form>
    
</div>
<!-- ùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùùù -->
<style type="text/css">
   @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #ffffff;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4caf50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #ffffff;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,
.form button:active,
.form button:focus {
  background: #43a047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4caf50;
  text-decoration: none;
}
.form .register-form {
  /*display: none;*/
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before,
.container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #ef3b3a;
}
body {
  background: #76b852; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #76b852, #8dc26f);
  background: -moz-linear-gradient(right, #76b852, #8dc26f);
  background: -o-linear-gradient(right, #76b852, #8dc26f);
  background: linear-gradient(to left, #76b852, #8dc26f);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}


</style>