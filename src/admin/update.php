<?php
error_reporting(E_ERROR | E_PARSE);


include 'config.php';

if (isset($_GET['parentid'])) {
    $id = $_GET['parentid'];
    $getData = "SELECT * FROM parents WHERE  parent_id = '$id' ";



    $res = mysqli_query($conn, $getData);
    // mysqli_query($conn, $update)
    if ($res) {

        $row =  mysqli_fetch_assoc($res);

        $pid= $row['parent_id'];
        $pname = $row['parentname'];
        $pemail = $row['parentemail'];
        $ppassword = $row['parentpassword'];
      
  

    // }



    }?>
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
            <div class="container  mt-3">
                <h2 class="text-center">Update Your Information</h2>
                <form action="update.php" method="post">
                <div class="mb-3 mt-3">
                        <label for="email">Parent Name</label>
                        <input type="text"  class="form-control" id="email" name="pid" value="<?php echo $pid ?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email">Parent Name</label>
                        <input type="text" class="form-control" id="email" name="pname" value="<?php echo $pname ?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email">Parent Email</label>
                        <input type="text" class="form-control" id="email" name="pemail" value="<?php echo $pemail ?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email">Parent Password</label>
                        <input type="text" class="form-control" id="email" value="<?php echo $ppassword ?>" name="ppassword">
                    </div>

                
                    <button type="submit" class="btn btn-primary mt-2" name="updateparent">Update</button>
                </form>
                
        </body>

        </html>

        <?php } ?>

                <?php

                if (isset($_POST['updateparent'])) {
                    $pid = $_POST['pid'];
                    $pname =  $_POST['pname'];
                    $pemail =  $_POST['pemail'];
                    $ppassword =  sha1($_POST['ppassword']);
                    $update = "UPDATE `parents` SET
                     `parentname` = '$pname', `parentemail` = '$pemail', `parentpassword` = '$ppassword' WHERE  `parent_id` = '$pid'";
       

                    $updateRes = mysqli_query($conn, $update);
                    // echo $pid;
                    // echo $updateRes;
                    if ($updateRes) {


                        echo "record updated";
                        header("location: index.php");

                    } else {

                        echo "error in updation";
                    }
                }



                ?>

