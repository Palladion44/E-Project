<?php

session_start();


if(!isset($_SESSION['hospitaluser'])){
    echo "<script>window.location.href = 'hospitalLogin.php';</script>";

}
?>


<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Hospital Profile</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>

    <body>
        
                       
                        
                   
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                        <th>Parent_Id</th>
                                            <th>ParentName</th>
                                            <th>ParentEmail</th>
                                            <th>ParentPassword</th>
                                            <th>Operations</th>
                                           
                                        </tr>
                                    </thead>
                              
                                    <tbody>
    <h1>Parents</h1>
                                    
                                        <?php
                                        
                                            include "config.php";
                                        $res = mysqli_query($conn, "SELECT * FROM parents");
                                        ?>
                                        <?php while($row = mysqli_fetch_assoc($res)){ ?>
                                        
                                        <tr>
                                        <td><?php echo $row["parent_id"]  ?></td>

                                            <td><?php echo $row["parentname"]  ?></td>
                                            <td> <?php echo $row["parentemail"]  ?></td>
                                            <td><?php echo $row["parentpassword"] ?></td>
                                            <td><button class="btn btn-primary">
                                    <a href="update.php?parentid=<?php echo $row["parent_id"] ?>" class="text-white "> Update
                                    </a></button>
                                <button class="btn btn-danger">
                                    <a href="delete.php?parentid=<?php echo $row["parent_id"] ?>" class="text-white "> Delete</a>
                                </button></td>
                            
                                           
                                        </tr>
                                       
                                   <?php } ?>
                                    </tbody>


                                    
                                </table>

                                  
                
                        
                    
                
 
            
  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>

<?php
 if (isset($_GET["logout"])) {
    session_unset();
    session_destroy();

    header("location:login.php");
    echo '<script>window.location.href = "login.php"</script>'; 

    
}

?>
