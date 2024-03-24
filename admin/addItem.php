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
            <h1 class="page-header">Add Item</h1>
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
                        <input type="text" class="form-control" name="name" >
                    </div>
                    <div class="form-group">
                        <label for="pwd">Price:</label>
                        <input type="number" class="form-control" name="price" >
                    </div>
                    <div class="form-group">
                        <label for="pwd">Ingredients:</label>
                        <textarea type="text" rows="5" class="form-control" name="ingredients" > </textarea>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Category:</label>
                        <select  class="form-control" name="category" >
                                <option value="pizza">Pizza</option>
                                <option value="burger">Burger</option>
                                <option value="chicken">Chicken</option>
                                <option value="sides">Sides</option>
                                <option value="drinks">Drinks</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="usr">Image:</label>
                        <input type="file" class="form-control" id="imgInp" name="image">
                        <img class="mt-3" id="blah" src="#" height="150px" weight="150px" />
                        
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-success" value="submit">
                        Add
                    </button>
                </form>
                <?php
                    if(isset($_POST['submit'])){
                        $item = $_POST['name'];
                        $price = $_POST['price'];
                        $ing = $_POST['ingredients'];
                        $cat = $_POST['category'];

                        $image = $_FILES['image']['name'];
                        $splitted_name = explode(".",$image);
                        $name = $splitted_name[0];
                        $ext = $splitted_name[sizeof($splitted_name)-1];
                        $date = date('D:M:Y');
                        $time = date('h:i:s');
                        $new_name = md5($date.$time);
                        $final_name = $new_name.".".$ext;
                        echo $final_name;
                        echo "<br>";
                        

                        $query = "INSERT INTO items(name,price,ingredients,category,image,status) VALUES('$item', $price,'$ing','$cat','$final_name',0)";
                        echo $query;
                        if(mysqli_query($con, $query)){
                            move_uploaded_file($_FILES["image"]["tmp_name"], "../images/$final_name");
                            echo "<span class='text-success'>Service Added Successfully</span>";
                            echo "<script> window.location.href = 'itemList.php' </script>";
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