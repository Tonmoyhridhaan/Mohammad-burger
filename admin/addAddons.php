<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: ../login.php');
    exit;
}
include_once('includes/header.php');
include '../connection.php';
$id = $_REQUEST['id'];
$qry = "SELECT * FROM prices WHERE id = $id";
$result = mysqli_query($con, $qry);
$row = mysqli_fetch_assoc($result);

?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Addons for <b><?php echo $row['name']?></b></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-0"><button type="button" class="btn btn-primary mr-2" onclick="addRow()">+</button></h5>
                <form id="dynamicForm" method="post" action="submit_form.php">
                    <div id="formFields" class="form-group">
                        <!-- Initial row of form fields -->
                        <div class="form-row mb-3">
                            <div class="col-md-4 form-group">
                                <input type="text" class="form-control" name="name[]" placeholder="Enter Name">
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="number" class="form-control" name="email[]" placeholder="Enter Price">
                            </div>
                            <div class="col-md-4 form-group">
                                <select class="form-control" name="dropdown[]">
                                    <option value="free">Free</option>
                                    <option value="extra">Extra</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div> 
                </form>
                <?php
                    if(isset($_POST['submit'])){
                        $item = $_POST['name'];
                    
                        $price = $_POST['price'];
                        $cat = $_POST['category'];

                        $image = $_FILES['image']['name'];
                        $splitted_name = explode(".",$image);
                        $name = $splitted_name[0];
                        $ext = $splitted_name[sizeof($splitted_name)-1];
                        $date = date('D:M:Y');
                        $time = date('h:i:s');
                        $new_name = md5($date.$time);
                        $final_name = $new_name.".".$ext;
                        //echo $final_name;
                        echo "<br>";
                        

                        $query = "INSERT INTO prices(name,price,category,image,status) VALUES('$item',$price,'$cat','$final_name',1)";
                        echo $query;
                        if(mysqli_query($con, $query)){
                            move_uploaded_file($_FILES["image"]["tmp_name"], "../images/$final_name");
                            echo "<span class='text-success'>Service Added Successfully</span>";
                            //echo "<script> window.location.href = 'priceList.php' </script>";
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
function addRow() {
    var formFields = document.getElementById('formFields');
    var newRow = document.createElement('div');
    newRow.className = 'form-row mb-3';
    newRow.innerHTML = `
        <div class="col-md-4 form-group">
            <input type="text" class="form-control" name="name[]" placeholder="Enter Name">
        </div>
        <div class="col-md-4 form-group">
            <input type="text" class="form-control" name="email[]" placeholder="Enter Price">
        </div>
        <div class="col-md-4 form-group">
            <select class="form-control" name="dropdown[]">
                <option value="free">Free</option>
                <option value="extra">Extra</option>
            </select>
        </div>
    `;
    formFields.appendChild(newRow);
}
</script>

<?php include_once('includes/footer.php'); ?>