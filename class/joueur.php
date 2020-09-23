<?php
class Joueur{
    private $name, $poids;

    const POID_MAX_EQUIPE = 1000;
    private static $poids_equipe=0;
    
function __construct($name,$poids){
    
    $this->name=$name;
    $this->poids=$poids;
    
    self::$poids_equipe+= $this->poids;
    if(self::$poids_equipe>self::POID_MAX_EQUIPE){
        echo"Bienvenu ". ucfirst($this->name)." malheureusement vous ne pouvez pas vous inscrire dans l'équipe car nous dépassons la limite autoriser par la fédération";
    }else{
        echo"Bienvenue ".ucfirst($this->name)." le poids total de l'équipe est de ". self::$poids_equipe." il reste ".(self::POID_MAX_EQUIPE- self::$poids_equipe)." kg </br>";
    }

}
public static function get_teamWeight(){
    return"Le poid total de l'équipe actuelle est de ". self::$poids_equipe." kg</br>";
}
};


?>