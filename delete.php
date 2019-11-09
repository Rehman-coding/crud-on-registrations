

<?php
  include("connection.php");



     $id = $_GET['dlt'];

     echo $id;

     $sql = "DELETE FROM registration_tb WHERE id=$id";
     $result = mysqli_query($mysqli,$sql);
        if ($result) { ?>

           <h1 class="text-danger text-center">
           <?php echo "Deleted successfully.."; ?>
           </h1>


          <?php
 header("Location: index.php");
        }
      
    

?>