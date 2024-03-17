<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: ../login.php');
    exit;
}
include_once('includes/header.php');
include '../connection.php';
$query = 'SELECT * FROM websiteInfo';
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$email = $row['email'];
$contact = $row['contact'];
$location = $row['location'];

?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Slot Management</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-0">Create Slots</h5>
                <form method="post">
                    <div class="form-group">
                        <label for="usr">Email:</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $email;?>">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Contact:</label>
                        <input type="text" class="form-control" name="contact" value="<?php echo $contact;?>">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Location:</label>
                        <input type="text" class="form-control" name="location" value="<?php echo $location;?>">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary" value="submit">
                        Update
                    </button>
                </form>
                <?php
                    if($_POST['submit']){
                        $email = $_POST['email'];
                        $contact = $_POST['contact'];
                        $location = $_POST['location'];
                        
                        $query = "UPDATE websiteInfo SET email = '$email', contact='$contact', location='$location' WHERE id=1";
                        if(mysqli_query($con, $query)){
                            echo "<span class='text-success'>Updated Successfully</span>";
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