<?php 
echo"coucou";

$MaBase = new PDO('mysql:host=mysql-lucaslapro.alwaysdata.net; dbname=lucaslapro_virus; charset=utf8','229070_lucas', 'lucaslapro');
$ObjetResultatDeRequeteBrut = $MaBase->query("SELECT * FROM `user` ORDER BY nom ASC");
while($TableauDunTuple = $ObjetResultatDeRequeteBrut->fetch())
echo $TableauDunTuple['nom'];
?>