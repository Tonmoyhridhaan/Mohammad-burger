<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: ../login.php');
    exit;
}
include_once('includes/header.php');
$sid = $_REQUEST['id'];
include '../connection.php';
$query = "SELECT * FROM reviews WHERE id = $sid";
$sql = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($sql)

?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Service</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-0"><a href="reviews.php" class="btn btn-primary">All Reviews</a></h5>
                <form method="post">
                    <div class="form-group">
                        <label for="usr">Name:</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>">
                    </div>
                   
                    <div class="form-group">
                        <label for="pwd">Description:</label>
                        <textarea type="text" rows="5" class="form-control" name="desc" value=""><?php echo $row['review'];?> </textarea>
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-success" value="submit">
                        Update
                    </button>
                </form>
                <?php
                    if($_POST['submit']){
                        $name = $_POST['name'];
                        $desc = $_POST['desc'];
                    
                        $query = "UPDATE reviews SET name = '$name', review='$desc' WHERE id = $sid";
                        
                        if(mysqli_query($con, $query)){
                            echo "<script> alert('Review Edited Successfully') </script>";
                            echo "<script> window.location.href = 'reviews.php' </script>";  
                        }
                    }

                ?>
               
            </div>
        </div>

    </div>
    
</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->

<?php include_once('includes/footer.php'); ?>