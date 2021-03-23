<?php
session_start();
if($_SESSION["co"] == true){
echo "bienvenue";  
echo $_SESSION["prenom"];}
else{
    echo "connectez vous";
}