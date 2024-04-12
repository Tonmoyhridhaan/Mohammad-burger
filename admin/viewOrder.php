<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit;
}
include '../connection.php';
include_once('includes/header.php');
$id = $_REQUEST['id'];
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
            <h1 class="page-header">Order #<?php echo $id ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <table id="yourTableID" class="table table-dark table-striped">
            <thead>
                <th>Serial</th>
                <th>Item</th>
                <th>Description</th>
               
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM orderLine WHERE orderID = $id";
                $sql = mysqli_query($con, $query);
                $i=1;
                while ($row = mysqli_fetch_array($sql)) { ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row['item'] ?></td>
                        <td><?php echo nl2br($row['description']) ?></td>
                       
                    </tr>
                <?php
                $i++;
                }
                ?>
            </tbody>
            <button class="btn btn-success">Confirm</button>
            <button class="btn btn-danger">Reject</button>
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
                 'print'
            ]
        });
    });
</script>

<?php include_once('includes/footer.php'); ?>