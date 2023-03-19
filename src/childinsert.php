<?php
include("config.php");
session_start();
if (isset($_GET['username'])) {
    $pname = $_GET['username'];
    $resp = mysqli_query($conn, "SELECT * FROM parents WHERE parentname ='$pname'");
    $rowp = mysqli_fetch_assoc($resp);
    $pid=$rowp['parent_id'];
    $res = mysqli_query($conn, "SELECT * FROM children where parent_id = '$pid'");
    $row = mysqli_fetch_assoc($res);



?>
     <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
            <title>Update</title>
        </head>

        <body>
            <div class="container  mt-5">
                <h2 class="text-center">Add Child Information</h2>
                <form action="update.php" method="post">
                <div class="mb-3 mt-3">
                        <input type="text"  class="form-control" id="email" name="pid"  hidden value="<?php echo $pid ?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email">child Name</label>
                        <input type="text" class="form-control" id="email" name="cname" value="">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email">Date of Birth</label>
                        <input type="date" name="cage" 
       min="<?php echo date('Y-m-d', strtotime('-5 years')); ?>" 
       max="<?php echo date('Y-m-d'); ?>">


                    </div>
              

                
                    <button type="submit" class="btn btn-primary mt-2" name="addchild">Add Child</button>
                </form>
                
        </body>

        </html>

        <?php } ?>
        <?php
        if(isset($_POST['addchild'])){
            $pid=$_POST['pid'];
           $cname= $_POST['cname'];
           $cage= $_POST['cage'];
           $childinsert="INSERT INTO children(`parent_id`,`childname`,`date_of_birth`)";
            
        }
        
        ?>