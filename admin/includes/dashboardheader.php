<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="refresh" content="30">
    <link rel="icon" type="image/x-icon" href="../images/favicon-32x32.png">


    <title>Administrator</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link href="assets/js/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="assets/css/booking.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="assets/js/jquery.min.js" type="text/javascript"></script>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php //if (isset($_SESSION['name']) && $_SESSION['role'] == true) : ?>
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">Administrator</a>
                </div>
                <!-- /.navbar-header -->
                <ul class="nav navbar-top-links navbar-right">
                    <!-- /.dropdown -->

                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                
                <ul class="nav navbar-top-links navbar-right">
                    <!-- /.dropdown -->
                    <?php
                        include '../connection.php';
                        $query = "SELECT * FROM messages WHERE hasRead = 0";
                        $result = mysqli_query($con, $query);
                        $data = mysqli_num_rows($result);
                    ?>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a  href="messages.php">
                            <i class="fa fa-send fa-fw"></i> <?php if($data>0) {echo $data;} ?>
                        </a>
                        
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="admin.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-user-circle fa-fw"></i> Customers<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="customers.php"><i class="fa fa-list fa-fw"></i>List all</a>
                                    </li>
                                   
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-yelp fa-fw"></i> Display Items<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="addItem.php"><i class="fa fa-plus fa-fw"></i>Add item</a>
                                    </li>
                                    <li>
                                        <a href="itemList.php"><i class="fa fa-list fa-fw"></i>Item list</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-yelp fa-fw"></i> Menu Items<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="addPrice.php"><i class="fa fa-plus fa-fw"></i>Add Item</a>
                                    </li>
                                    <li>
                                        <a href="priceList.php"><i class="fa fa-list fa-fw"></i>Item list</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.php"><i class="fa fa-users fa-fw"></i> Contacts </a>
                            </li>
                            <li>
                                <a href="messages.php"><i class="fa fa-book fa-fw"></i> Messages</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
        <?php //endif; ?>
        <!-- The End of the Header -->

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

