<?php
    class User {
        private $nom;
        private $mdp;

        public function __construct($nom, $mdp, $BDD) {
            $this->nom = $nom;
            $this->mdp = $mdp;
            $this->BDD = $BDD;
        }

        public function Connexion() {
            $_SESSION["prenom"] = $this->nom;
    
    if(isset($_SESSION["prenom"])) {
$_SESSION["mdp"] = $this->mdp;
        $ObjetResultatDeRequeteBrut = $this->BDD->query("SELECT * FROM `user` WHERE `nom`='".$_SESSION["prenom"]."' AND `mdp` = '".$_SESSION["mdp"]."'"); 
        if($ObjetResultatDeRequeteBrut->rowCount()>=1){
            $_SESSION["co"] = true;
            header('Location: logged.php');

        }
        else{
            echo"Echec de connection "; 
        }

    } 
    else
        echo"";
        
        }

        public function insc() {
            try{
        
                $ObjetResultatDeRequeteBrut = $this->BDD->query("INSERT INTO `user`(`nom`, `mdp`) VALUE('".$this->nom."','".$this->mdp."')");        
            
            }catch(Exception $e){
            
                echo "J'ai eu un problème erreur :".$e->getMessage();
            }
        }
}
    

class perso{
    private $_idperso;
    private $_nom;
    private $_bdd;

    public function __construct($bdd){
        $this->bdd = $bdd;

    }

    public function setperso($id, $nom){
        $this->id = $id;
        $this->nom = $nom
    }

    public function setpersoid($id){
        $result = $this->BDD->query("SELECT * FROM `perso`"); 
        if($tab = $result->fetch()){
            $this->setuser($tab["id"],$tab["nom"])
        }
    }
    public function afficheperso(){
        
    }
}


?>