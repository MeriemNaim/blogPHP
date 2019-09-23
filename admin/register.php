<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


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
            <th scope='col' style='border:1px solid black;' class='text-center bg-success' > ID </th>
            <th scope='col' style='border:1px solid black;' class='text-center bg-success'> Username </th>
            <th scope='col' style='border:1px solid black;' class='text-center bg-success'>Email </th>
            <th scope='col' style='border:1px solid black;' class='text-center bg-success' >Password</th>
            <th scope='col' style='border:1px solid black;' class='text-center bg-success' >EDIT </th>
            <th scope='col' style='border:1px solid black;' class='text-center bg-success' >DELETE </th>
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
$sql = 'SELECT * FROM bloguser  where id_statue=1 ';
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {

?>


        <tbody>
        <tr> 
            <td > <?php echo $row["userId"];?> </td>
            <td> <?php echo $row["username"];?> </td>
            <td> <?php echo $row["usermail"];?></td>
            <td> ******* </td>
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
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>