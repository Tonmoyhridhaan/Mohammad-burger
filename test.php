<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/orderProcess.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</head>
<body>
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

                <!-- <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                    <div class="col">TOTAL PRICE</div>
                    <div class="col text-right">&dollar;  <?php echo $tprice?></div>
                </div> -->
                <button class="btn" type="submit" value="submit" name="submit" >CHECKOUT</button>
            </form>
            <?php
                if(isset($_POST['submit'])) {
                    echo "hello";
                }
            ?>
</body>
</html>