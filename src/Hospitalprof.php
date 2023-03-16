

<?php
include "config.php";
session_start(); 
?>
<?php if(!isset($_SESSION['hospitalid'])){
    echo "<script>window.location.href = 'hospitalLogin.php'</script>";
}
?>
<html>
    <head>
        <?php       
include "header.php";
?>
<style>
    *{
        box-sizing: border-box;
    }
  .containero{
   margin: 50px;
    align-items: center;
    display: inline-block;
    justify-content: center;
    outline: 1px solid grey;
    width: fit-content;
    border-radius: 25px;
  }
  #submitbutt{
    margin-left: 50%;
}
#logout:hover{
color: red;
}
</style>
    </head>

<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><?php echo $_SESSION['hospitaluser'] ?> Panel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="updatevacc.php">Update Available Vaccines</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Hospitalprof.php">Appointments</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="updatevacc.php">Records</a>
        </li>
      <li class="d-flex nav-item">
          <a class="nav-link active" id="logout" aria-current="page" href="updatevacc.php?logout=true">Logout</a>
        </li>
    </div>
  </div>
</nav>



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
                                        <th>bookingid</th>
                                            <th>ParentName</th>
                                            <th>ParentEmail</th>
                                            <th>ParentPassword</th>
                                            <th>Operations</th>
                                           
                                        </tr>
                                    </thead>
                              
                                    <tbody>
    <h1>Appointments</h1>
                                    
                                        <?php
                                        $hide = $_SESSION['hospitalid'];
                                            include "config.php";
                                          $queryb =  "SELECT * FROM `bookings`  WHERE  `bookings`.`hospital_id` = '$hide';";
                                        $resb = mysqli_query($conn,$queryb);
                                        
                                        ?>
                                        <?php while($rowb = mysqli_fetch_assoc($resb)){ ?>
                                        
                                        <tr>
                                        <td><?php echo $rowb["booking_id"]  ?></td>

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
