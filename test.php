<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="style.css">
     <!--bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    
</head>
<body>
<div>
                  <form method="post">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="col-md-3 col-sm-3 col-xs-12"></div>
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-3 col-sm-3 col-xs-12"></div>
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-3 col-sm-3 col-xs-12"></div>
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                        <textarea name="message" class="form-control" placeholder="Message" required></textarea>
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-3 col-sm-3 col-xs-12"></div>
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                        <input type="submit" name="send" class="btn btn-default" value="Send">
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </form>
                  <?php
                    include 'connection.php';
                    if(isset($_POST['send'])) {
                      //echo "<script>alert('here')</script>";
                      $name = $_POST['name'];
                      //echo "<script>alert('".$name."')</script>";
                      $email = $_POST['email'];
                      //echo "<script>alert('".$email."')</script>";
                      $message = $_POST['message'];
                      //echo "<script>alert('".$message."')</script>";
                      $datetime = date("Y-m-d H:i:s");
                      //echo "<script>alert('".$datetime."')</script>";

                      $query = "INSERT INTO messages(name, email, message, hasRead,dateTime) VALUES('$name', '$email', '$message',0,'$datetime')";


                      echo $query;
                      $run = mysqli_query($con, $query);

                      if ($run) {
                        echo "<script>alert('".$query."')</script>";
                      } else {
                        echo "<script>alert('".$query."')</script>";
                      }
                    
                    }

                   ?>
                </div>
</body>
</html>