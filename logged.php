<?php
session_start();
if($_SESSION["co"] == true){
    echo "bienvenue";  
    echo $_SESSION["prenom"];

    ?>
    <!-- formulaire de deconnexion -->
<form action="" method="post">
<p>
 <button type="submit" name="deco">Deconnexion</button> 
</p>
<?php 
if(isset($_POST["deco"])) {
    session_destroy();
    $_SESSION["co"] = false;
    header('Location: index.php');
}
else{
    echo"";
}   
}
else{
    echo "connectez vous";
}
?>