<?php 
include 'inc/header.php'; 
include "config.php.php";
include "Database.php";
?>

<?php
$db = new Database();
$query = "SELECT * FROM tbl_user";
$read = $db->select($query);
?>

<?php
if(isset($_GET['msg'])){
   echo "<span style='color:green'>".$_GET['msg']."</span>";
}
?>


<table class="tblone">
   <tr>
      <th width="25%">Name</th>
      <th width="15%">Email</th>
      <th width="20%">Skill</th>
      <th width="20%">Action</th>
   </tr>
   <?php if($read) {?>
   <?php while($row = $read->fetch_assoc()) {?>
   <tr>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['skill']; ?></td>
      
      <td> <a href="update.php.php?id=<?php  echo ($row['id']);  ?>"> Edit</a></td>
   </tr>

   <?php } ?>
   <?php } else {  ?>
<P>Data is not available</P>
      <?php } ?>
</table>
<a href="Create.php.php">Create</a>






<?php include 'inc/footer.php'; ?>