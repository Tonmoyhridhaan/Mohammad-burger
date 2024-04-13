<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Process</title>
    <link rel="icon" type="image/x-icon" href="images/favicon-32x32.png">
    <link rel="stylesheet" href="css/orderProcess.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</head>
<body>
<?php
// PHP code to retrieve data sent from file1.php
include 'connection.php';
session_start();
if(!isset($_POST['order'])) {
    echo "<p>No data received.</p>";
    
} else {
    $receivedData = $_POST['order'];
    $tprice = number_format($_POST['price'], 2);
    $_SESSION['tprice'] = $tprice;
    //echo "<p>".nl2br($receivedData)."</p><br>";
    $items = explode("\n", $receivedData);
    array_pop($items);
    ?>
<div class="card">
            <div class="row">
                <div class="col-md-8 cart">
                    <div class="title">
                        <div class="row">
                            <div class="col"><h4><b>Selected Items</b></h4></div>
                            <div class="col align-self-center text-right text-muted"><?php echo count($items)?> items</div>
                        </div>
                    </div>    
    <?php
    // Output each line
    
    $_SESSION['items'] = $items;
    foreach ($items as $item) {
        //echo $item . "<br>";
        $line = explode("$", $item);
        //echo(count($line));
        $full_name = $line[0];
        $price = $line[1];
        $full_name_lines = explode("-", $full_name);
        $title = $full_name_lines[0];
        $desc = $full_name_lines[1];
        
        $query = "SELECT * FROM prices WHERE name LIKE '$title%'";
       
        
        $sql = mysqli_query($con, $query);
        $row = mysqli_fetch_array($sql);
       
        $image = $row['image'];
        
    ?>
    <div class="row border-top border-bottom">
        <div class="row main align-items-center">
            <div class="col-2"><img class="img-fluid" src="images/<?php echo $image; ?>" alt="<?php echo $image; ?>"></div>
            <div class="col">
                <div class="row text-muted"><dt><h3><?php echo $title; ?></h3></dt></div>
                <div class="row"><?php echo $desc; ?></div>
            </div>
            
            <div class="col">&dollar; <?php echo $price; ?> </div>
        </div>
    </div>
    <?php
    }
    ?>         
        </div>
        <div class="col-md-4 summary">
            <div><h5><b>Summary</b></h5></div>
            <hr>
            <div class="row">
                <div class="col" >ITEMS <?php echo count($items)?></div>
                <div class="col text-right">&dollar; <?php echo $tprice?></div>
            </div>
            <form method="post">
                
                <input type="text" id="name" placeholder="Enter your name" name="name" required>
                <input type="text" id="contact" placeholder="Enter your contact" name="contact" required>
                <input type="text" id="location" placeholder="Enter your location" name="location" required>
                <br/><br/>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="type" required value="walk in"> Walk In
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="type" required value="cod"> Cash On delivery
                    </label>
                </div>

                <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                    <div class="col">TOTAL PRICE</div>
                    <div class="col text-right">&dollar;  <?php echo $tprice?></div>
                </div>
                <button class="btn" type="submit" value="submit" name="submit" >CHECKOUT</button>
            </form>
            
        </div>
    </div>
            
</div>
<?php
}
?>
<?php
    $items = $_SESSION['items'];
    $tprice = $_SESSION['tprice'];
    //print_r($_SESSION['items']);
    if(isset($_POST['submit'])) {
        
        $name = $_POST['name'];
        echo $name;
        $contact = $_POST['contact'];
        echo $contact;
        $location = $_POST['location'];
        echo $location;
        $date = date('Y-m-d');
        $time = date('H:i:s');
        $type = $_POST['type'];
        $sql2 = "INSERT INTO orders (customerName, customerContact, customerLocation, date, time, price,type, status) VALUES ('$name', '$contact', '$location', '$date', '$time', '$tprice','$type', 0)";
        if (mysqli_query($con, $sql2)) {
            $last_insert_id = mysqli_insert_id($con);
            
            foreach ($items as $item) {
                $line = explode("$", $item);
                $full_name = $line[0];
                $price = $line[1];
                $full_name_lines = explode("-", $full_name);
                $title = $full_name_lines[0];
                $desc = $full_name_lines[1];
                // $query = "SELECT * FROM prices WHERE name LIKE '$title%'";
                
                // $sql = mysqli_query($con, $query);
                // $row = mysqli_fetch_assoc($sql);
                // $image = $row['image'];
                $sql3 = "INSERT INTO orderLine (orderID,item, description) VALUES ($last_insert_id,'$title', '$desc')";
                if (mysqli_query($con, $sql3)) {
                    unset($_SESSION['items']);
                    unset($_SESSION['tprice']);
                    echo "<script>alert('Your order has been confirmed. We will contact you soon.')</script>";
                    echo "<script>window.location.href='index.php';</script>";
                }
            }
        }
    }

?>
</body>
</html>