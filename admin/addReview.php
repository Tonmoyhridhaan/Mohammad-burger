<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: ../login.php');
    exit;
}
include_once('includes/header.php');
include '../connection.php';

?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Review</h1>
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
                        <label for="usr">Customer Name:</label>
                        <input type="text" class="form-control" name="name" >
                    </div>
                   
                    <div class="form-group">
                        <label for="pwd">Review:</label>
                        <textarea type="text" rows="5" class="form-control" name="desc" > </textarea>
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-success" value="submit">
                        Add
                    </button>
                </form>
                <?php
                    if($_POST['submit']){
                        $name = $_POST['name'];
                        $desc = $_POST['desc'];
                        
                        $query = "INSERT INTO reviews(name,review) VALUES('$name', '$desc')";
                        
                        if(mysqli_query($con, $query)){
                            echo "<span class='text-success'>Review Added Successfully</span>";
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