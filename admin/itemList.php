<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: ../login.php');
    exit;
}
include '../connection.php';
include_once('includes/header.php');
?>
<style>
    #yourTableID {
        width: 100%;
        margin-top: 20px;
    }

    #yourTableID th,
    #yourTableID td {
        text-align: center;
    }

    #yourTableID th {
        background-color: #f8f9fa;
        color: #343a40;
    }

    #yourTableID tbody tr:hover {
        background-color: #f8f9fa;
        color: #343a40;
    }

    /* Style for the modal */
    .modal-content {
        background-color: #f8f9fa;
    }

    .modal-footer {
        background-color: #343a40;
        color: #ffffff;
    }
</style>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Services <a href="addItem.php" class="btn btn-primary">Add Item</a></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <table id="yourTableID" class="table table-dark table-striped">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>description</th>
                <th>Price</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM items";
                $sql = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($sql)) { ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['ingredients'] ?></td>
                        <td><?php echo $row['price'] ?></td>
                        <td>
                            <a class="btn btn-primary" href="editService.php?id=<?php echo $row['id'] ?>">Edit</a>
                            <!-- Trigger the modal with a button -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal<?php echo $row['id'] ?>">Delete</button>

                            <!-- Modal -->
                            <div id="myModal<?php echo $row['id'] ?>" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Delete Confirmation</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Do you really want to delete <b><?php echo $row['name'] ?></b>?</p>
                                </div>
                                <div class="modal-footer">
                                    <a href="deleteService.php?id=<?php echo $row['id'] ?>" class="btn btn-success"> Yes</a>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                                </div>

                            </div>
                            </div>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>


<!-- Add DataTables initialization script -->
<script>
    $(document).ready(function() {
        $('#yourTableID').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>

<?php include_once('includes/footer.php'); ?>