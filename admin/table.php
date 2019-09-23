<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<?php 
// session_start();
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Admin Profile 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Admin Profile 
            </button>
    </h6>
  </div>




  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
<th scope='col' style='border:1px solid black;' class='text-center bg-success' >userId</th> 
<th scope='col' style='border:1px solid black;' class='text-center bg-success' >name</th> 
<th scope='col' style='border:1px solid black;' class='text-center bg-success' >Lastname</th> 
<th scope='col' style='border:1px solid black;' class='text-center bg-success' >userage</th> 
<th scope='col' style='border:1px solid black;' class='text-center bg-success' >userpw</th> 
<th scope='col' style='border:1px solid black;' class='text-center bg-success' >usermail</th> 
<th scope='col' style='border:1px solid black;' class='text-center bg-success' >username</th>
<th scope='col' style='border:1px solid black;' class='text-center bg-success' >addeddate</th> 
<th scope='col' style='border:1px solid black;' class='text-center bg-success' >id_statue</th>
<th scope='col' style='border:1px solid black;' class='text-center bg-success' >action</th>
<th scope='col' style='border:1px solid black;' class='text-center bg-success' >edit</th>


          </tr>
        </thead>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogdb";

$conn = mysqli_connect($servername, $username,$password ,$dbname);

if(! $conn ) {
die('Could not connect: ' . mysqli_error());
}


// echo 'Connected successfully<br>';
$sql = 'SELECT * FROM bloguser ';
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {

?>
        <tbody>
        <tr> 
            <td class="text-secondary" > <?php echo $row["userId"];  ?> </td>
            <td> <?php echo $row["name"]; ?> </td>
            <td><?php echo $row["lastname"];?></td>
            <td><?php echo $row["userage"];?></td>
            <td><?php echo $row["userpw"];?></td>
            <td><?php echo $row["usermail"];?></td>
            <td><?php echo $row["username"];?></td>
            <td><?php echo $row["addeddate"];?></td>
            <td><?php echo $row["id_statue"];?></td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="edit_id" value="">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>

            <td>
                <form action="" method="post">
                  <input type="hidden" name="delete_id" value="">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
        </tr>
        
        </tbody>
        <?php 
    } }

else {
echo "0 results";
}
mysqli_close($conn); 
?>
      </table>
    </div>
  </div>
</div>

</div>






  <?php
// include('includes/scripts.php');
include('includes/footer.php');
?>