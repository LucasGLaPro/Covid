<?php 
session_start();
require "class.php";
$MaBase = new PDO('mysql:host=mysql-lucaslapro.alwaysdata.net; dbname=lucaslapro_virus; charset=utf8','229070_lucas', 'lucaslapro');
$ObjetResultatDeRequeteBrut = $MaBase->query("SELECT * FROM `user` ORDER BY nom ASC");
while($TableauDunTuple = $ObjetResultatDeRequeteBrut->fetch())
echo $TableauDunTuple['nom'];
?>
<div> <!-- formulaire --> 
    <form action="" method="post">
        Login:<input type="text" name="prenom" required/>
        Mot de passe:<input type="password" name="mdp" required/>
        <input type="submit" name="Valider" />
    </post>
</div>
<?php
//verification des utlisateur.
$_SESSION["co"] = false;
if(isset($_POST["Valider"])){
    $user = new user($_POST['prenom'], $_POST['mdp'],$MaBase);
    $user->Connexion();
    }

?>