<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: ../login.php');
    exit;
}
include_once('includes/header.php');
$sid = $_REQUEST['id'];
include '../connection.php';
$query = "SELECT * FROM services WHERE id = $sid";
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
                <h5 class="card-title mb-0"><a href="serviceList.php" class="btn btn-primary">All Services</a></h5>
                <form method="post">
                    <div class="form-group">
                        <label for="usr">Name:</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Price:</label>
                        <input type="number" class="form-control" name="price" value="<?php echo $row['price'];?>">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Description:</label>
                        <textarea type="text" rows="5" class="form-control" name="desc" value=""><?php echo $row['description'];?> </textarea>
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-success" value="submit">
                        Update
                    </button>
                </form>
                <?php
                    if($_POST['submit']){
                        $name = $_POST['name'];
                        $price = $_POST['price'];
                        $desc = $_POST['desc'];
                    
                        $query = "UPDATE services SET name = '$name', price = $price, description='$desc' WHERE id = $sid";
                        
                        if(mysqli_query($con, $query)){
                            echo "<script> alert('Service Edited Successfully') </script>";
                            echo "<script> window.location.href = 'serviceList.php' </script>";
                            
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