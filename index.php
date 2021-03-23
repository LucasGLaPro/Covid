<?php 
session_start();

$MaBase = new PDO('mysql:host=mysql-lucaslapro.alwaysdata.net; dbname=lucaslapro_virus; charset=utf8','229070_lucas', 'lucaslapro');
$ObjetResultatDeRequeteBrut = $MaBase->query("SELECT * FROM `user` ORDER BY nom ASC");
while($TableauDunTuple = $ObjetResultatDeRequeteBrut->fetch())
echo $TableauDunTuple['nom'];
?>
<div>
    <form action="" method="post">
        Login:<input type="text" name="prenom" required/>
        Mot de passe:<input type="password" name="mdp" required/>
        <input type="submit" name="Valider" />
    </post>
</div>
<?php
$_SESSION["co"] = false;
if(isset($_POST["Valider"])){
    }
    if(isset($_POST["mdp"])) {
        $ObjetResultatDeRequeteBrut = $MaBase->query("SELECT * FROM `user` WHERE `nom`='".$_POST["prenom"]."' AND `Mdp` = '".$_POST["mdp"]."'"); 
        if($ObjetResultatDeRequeteBrut->rowCount()>=1){
            $_SESSION["co"] = true;
            header('Location: logged.php');  
            $_SESSION["prenom"] = $_POST["prenom"];
        }
        else{
            echo"Echec de connection "; 
        }

    } 
    else{
        echo"";}
?>