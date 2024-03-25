<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: ../login.php');
    exit;
}
include_once('includes/header.php');
$sid = $_REQUEST['id'];
include '../connection.php';
$query = "SELECT * FROM items WHERE id = $sid";
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
                <h5 class="card-title mb-0"><a href="itemList.php" class="btn btn-primary">All Items</a></h5>
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="usr">Name:</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>">
                    </div>
                   
                    <div class="form-group">
                        <label for="pwd">Pricing:</label>
                        <textarea type="text" rows="5" class="form-control" name="desc" value=""><?php echo $row['ingredients'];?> </textarea>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Category:</label>
                        <select  class="form-control" name="category" >
                                <option value="pizza"<?php if($row['category']=="pizza"){echo "selected";} ?>>Pizza</option>
                                <option value="burger"<?php if($row['category']=="burger"){echo "selected";} ?>>Burger</option>
                                <option value="chicken"<?php if($row['category']=="chicken"){echo "selected";} ?>>Chicken</option>
                                <option value="sides"<?php if($row['category']=="sides"){echo "selected";} ?>>Sides</option>
                                <option value="drinks"<?php if($row['category']=="drinks"){echo "selected";} ?>>Drinks</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="usr">Image:</label>
                        <input type="file" class="form-control" id="imgInp" name="image">
                        <img class="mt-3" id="blah" src="../images/<?php echo $row['image']; ?>" height="150px" weight="150px" />
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-success" value="submit">
                        Update
                    </button>
                </form>
                <?php
                    if(isset($_POST['submit'])){
                        $item = $_POST['name'];
                        
                        $desc = $_POST['desc'];
                        $cat = $_POST['category'];
                        $img = $_FILES['image']['name'];

                        if(!empty($img)){
                            //echo  "Here";
                            $image = $_FILES['image']['name'];
                            $splitted_name = explode(".",$image);
                            $name = $splitted_name[0];
                            $ext = $splitted_name[sizeof($splitted_name)-1];
                            $date = date('D:M:Y');
                            $time = date('h:i:s');
                            $new_name = md5($date.$time);
                            $final_name = $new_name.".".$ext;
                          
                            $old_image = $row['image'];
                            $query =  "UPDATE items SET name = '$item',  category = '$cat', ingredients='$desc', image = '$final_name' WHERE id = $sid";
                            echo $query;
                            if(mysqli_query($con, $query)){
                                echo "<br> here";
                                if(file_exists("../images/$old_image")){
                                    unlink("../images/$old_image");
                                    
                                }
                                move_uploaded_file($_FILES["image"]["tmp_name"], "../images/$final_name");
                                echo "<span class='text-success'>Item Updated Successfully</span>";
                                echo "<script> window.location.href = 'itemList.php' </script>";
                            }
                            
                        }
                        else{
                            $query =  "UPDATE items SET name = '$item',  category = '$cat', ingredients='$desc' WHERE id = $sid";
                            if(mysqli_query($con, $query)){
                                echo "<span class='text-success'>Service Updated Successfully</span>";
                                echo "<script> window.location.href = 'itemList.php' </script>";
                            }
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            function readURL(input){
                if(input.files && input.files[0]){
                    var reader = new FileReader();

                    reader.onload = function(e){
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#imgInp").change(function() {
                readURL(this);
            });
        </script>
<?php include_once('includes/footer.php'); ?>