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
            <h1 class="page-header"> Bookings <a href="addService.php" class="btn btn-primary">Add Service</a></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <table id="yourTableID" class="table table-dark table-striped">
            <thead>
                <th>ID</th>
                <th>Client</th>
                <th>Contact</th>
                <th>Order Date</th>
                <th>Booking Date</th>
                <th>Location</th>
                <th>Services</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM orders ORDER BY id DESC";
                $sql = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($sql)) { 

                        $query1 = "SELECT * FROM clients WHERE id = $row[clientId] " ;
                        $sql1 = mysqli_query($con, $query1);
                        $row1 = mysqli_fetch_assoc($sql1);
                        $client = $row1['name'];
                        $contact = $row1['contact'];

                        $query1 = "SELECT * FROM orderLine WHERE orderId = $row[id] ";
                        $sql1 = mysqli_query($con, $query1);
                        $services = "";
                        while($row1 = mysqli_fetch_array($sql1)){
                            $query2 = "SELECT * FROM services WHERE id = $row1[serviceId] ";
                            $sql2 = mysqli_query($con, $query2);
                            $row2 = mysqli_fetch_assoc($sql2);
                            $service = $row2['name'];
                            $services .= $service.", ";
                        }

                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $client; ?></td>
                        <td><?php echo $contact; ?></td>
                        <td><?php echo $row['orderDate']; ?></td>
                        <td><?php echo $row['BookingDate']; ?></td>
                        <td><?php echo $row['location']; ?></td>
                        <td><?php echo $services; ?></td>
                        <td>
                            <?php
                                if($row['status']==0){
                                    echo '<a class="btn btn-success" href="editBookingStatus.php?id='.$row['id'].'&data=3">Confirm</a>';   
                                    echo '<a class="btn btn-danger" href="editBookingStatus.php?id='.$row['id'].'&data=2">Cancel</a>';   
                                }
                                else if($row['status']==1){
                                    echo '<button class="btn btn-primary" href="editBookingStatus.php?id='.$row['id'].'" disabled>Completed</button>';   
                                }
                                else if($row['status']==2){
                                    echo '<button class="btn btn-danger" href="editBookingStatus.php?id='.$row['id'].'" disabled>Canceled</button>';   
                                }
                                else if($row['status']==3){
                                    echo '<a class="btn btn-primary" href="editBookingStatus.php?id='.$row['id'].'&data=1" >Mark as complete</a>';
                                    echo '<a class="btn btn-danger" href="editBookingStatus.php?id='.$row['id'].'&data=2">Cancel</a>';      
                                }


                            ?>
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
            "order": [[0, 'desc']],
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>

<?php include_once('includes/footer.php'); ?>