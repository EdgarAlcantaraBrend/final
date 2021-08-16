
<?php 
    
    include "header.php"; 
    if (isset($_SESSION['usuario']) && 
    $_SESSION ['usuario']['rol'] ==1 || $_SESSION ['usuario']['rol'] ==2) {

?>

    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
            <h1 class="fw-light">Inicio</h1>
            <p class="lead"><h3 class="text-center"></h3>
            
        
            </div>
        </div>
    </div>
    
<?php 
    include "footer.php";
    
    }else{
        header("location:../index.html");
    }   
    ?>