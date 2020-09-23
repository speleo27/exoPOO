<?php
class Feu{
    private $etat;


    const ORANGECLI = 4;
    const ORANGE = 1;
    const ROUGE = 2;
    const VERT = 3;
    const ETEINT = 0;

    function __construct(){
        $this->etat= self::ORANGECLI;
    }

    function set_etat($value){
        $this->etat = $value;    
    }

    function get_show(){
        echo "<p> le feux est ";
        switch($this->etat){
            case self::ETEINT:
                echo 'éteint, attention a la priorité !!';
                break;
            case self::ORANGE:
                echo 'orange, veuillez vous arretez!!';
                break;
            case self::ROUGE:
                echo ' rouge, arretez vous!!!';
                break;
            case self::VERT:
                echo 'vert, vous pouvez avancer';
                break;
            case self::ORANGECLI:
                echo 'clignotant, attention aux priorité !!!';
                break;
            default : 
                echo" en disfonctionnement, may attention !!";
        }
        echo'</p>';
    }
}
?>