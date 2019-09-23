<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include 'DBcon.php';
?>

<section class="htc__blog__area bg__gray ">
<div class="container">
<div class="row">
	<div class="col" >
		<a href="../addarticle.php"> <button type="button" class="btn btn-success center mb-5">CREATE POST</button></a>
	</div>



<?php 

$sql = 'SELECT titre,DA,image,idart FROM articles where deleted=0';
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
?>
<div class="htc__blog__wrap clearfix blog--list">
<div class="col-md-4 col-lg-6 col-sm-6 col-xs-12">
<div class="blog foo">
<div class="blog__thumb">
<a href="blog-details.php">
    <img style="width:370px height:270px" src="<?php echo ("../images/". $row['image']); ?>"
    alt="blog image">
</a>
</div>
<div class="blog__details">
<h2>
	<a href="blog-details.php"> <?php echo $row["titre"];?> </a></h2>
<ul class="blog__meta">
    <li><a href="blog-details.php?P_ID=<?php echo $row['idart'];?> ">Read More</a></li>
    <li><?php echo $row["DA"];?> </li>
</ul>
<ul class="blog__meta">
	<a href="EditArt.php?P_ID=<?php echo $row['idart'];?>.&statue=delete"><button type="button" class="btn btn-danger text-white ">delete</button></a>
	<a href="EditArt.php?P_ID=<?php echo $row['idart'];?>&statue=edit "><button type="button" class="btn btn-success text-white ">EDIT</button></a>
    
  
</ul>
</div>
</div>
</div>

<?php } }
else {
echo "0 results";
}
mysqli_close($conn); 

?>
</div>
</div>
</div>
</section>




<?php
include('includes/scripts.php');
include('includes/footer.php');
?>