<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: ../logout.php');
    exit;
}


include '../connection.php';


include_once('includes/dashboardheader.php');


// Fetch the number of customers
$sqlCustomers = "SELECT COUNT(*) as numCustomers FROM items";
$resultCustomers = mysqli_query($con, $sqlCustomers);
$rowCustomers = mysqli_fetch_assoc($resultCustomers);
$numCustomers = $rowCustomers['numCustomers'];

// // Fetch the number of staff members
$sqlStaff = "SELECT COUNT(*) as numStaff FROM prices";
$resultStaff = mysqli_query($con, $sqlStaff);
$rowStaff = mysqli_fetch_assoc($resultStaff);
$numStaff = $rowStaff['numStaff'];

// // Fetch the total transactions from the transaction table
$sqlBooking = "SELECT COUNT(*) as numBooking FROM orders";
$resultBooking = mysqli_query($con, $sqlBooking);
$rowBooking = mysqli_fetch_assoc($resultBooking);
$numBooking = $rowBooking['numBooking'];

// // Fetch the total transactions from the transaction table
// $sqlTransactions = "SELECT SUM(total) as totalTransactions FROM transaction";
// $resultTransactions = mysqli_query($conn, $sqlTransactions);
// $rowTransactions = mysqli_fetch_assoc($resultTransactions);
// $totalTransactions = $rowTransactions['totalTransactions'];

// Include necessary files
include_once('includes/header.php');
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-reorder fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $numCustomers; ?></div>
                            <div>Display Items</div>
                        </div>
                    </div>
                </div>
                <a href="customers.php">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $numStaff; ?></div>
                            <div>Menu Items</div>
                        </div>
                    </div>
                </div>
                <a href="serviceList.php">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-shopping-cart fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $numBooking; ?></div>
                            <div>Orders</div>
                        </div>
                    </div>
                </div>
                <a href="bookings.php">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    
    </div>
    <div class="row">
        <style>
            #yourTableID {
                width: 100%;
                
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
        <div class="">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Pending Orders</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <table id="yourTableID" class="table table-dark table-striped">
                    <thead>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Customer</th>
                        <th>Contact</th>
                        <th>Location</th>
                        <th>Action</th>
                    
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM orders WHERE status=0";
                        $sql = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_array($sql)) { ?>
                            <tr>
                                <td><?php echo $row['date'] ?></td>
                                <td><?php echo $row['time'] ?></td>
                                <td><?php echo $row['customerName'] ?></td>
                                <td><?php echo $row['customerContact'] ?></td>
                                <td><?php echo $row['customerLocation'] ?></td>

                                <td>
                                    <a href=" viewOrder.php?id=<?php echo $row['id'] ?>" class="btn btn-primary btn-sm" >View </a>
                                    <button type="button" class="btn btn-success btn-sm">Complete</button>
                                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                    
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


    </div>

</div>


<?php include_once('includes/footer.php'); ?>