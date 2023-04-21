<!-- incluimos el archivo header que contiene el navar -->
<?php include "header.php";
    
    //con el if se hace la validacion de usuarios si se cumple con 
    //la validacion y si no se cumple te manda al index(login)
    if (isset($_SESSION['usuario']) && $_SESSION['usuario']['rol'] == 1 ) {

?>

    <!-- Page Content -->
    <div class="container">
    <h1 class="mt-4">prueva de vista unica del cliente</h1>
    <p>The logo in the navbar is now a default Bootstrap feature in Bootstrap! Make sure to set the height
        of the logo within the HTML or using CSS. For best results, use an SVG image as your logo.</p>
    </div>

<!-- incluimos el archivo los scripst y el cirre de el html -->
<?php include "footer.php"; 
    }else{
        header("location:../index.html");
    }
?>