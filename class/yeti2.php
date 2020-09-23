<?php
class Yetirpg{
    private $name,$force,$robustesse,$status,$life,$life_max;

    public static $allYeti=array();
    public static $alive=1;
    const GOOD_HEALTH= 2;
    const MEDIUM_HEALTH= 1;
    const BAD_HEALTH=0;

    const ALIVE=1;
    const DIE=0;

   

    public function __construct($name)
    {   $allYeti=array_push(
        $this->name=$name,
        $this->force= rand(3,10),
        $this->robustesse=rand((10-$this->force - 3),7),
        $this->life_max= rand((50-$this->robustesse*2),(100+$this->force*2)),
        $this->life= $this->life_max);
        echo "un nouveau yéti ".ucfirst($this->name). " viens d'arriver dans l'arène";
        
    }
    public function set_life($life){
        $this->life=$this->life_max - $life;
        echo "le yéti".ucfirst($this->get_name())." vient de passer a ".$this->life."</br>";
        return $this->life;
        if($this->get_alive() == self::DIE){
            echo "Le Yéti" . ucfirst($this->get_name()) . " à malheureusement succomber</br>";
        }
        return $this->life;
    }
    public function get_name(){ return $this->name;}

    public function get_force(){
        if($this->status==self::BAD_HEALTH)
        {
            return $this->force ;
        }
            return $this->force;
    }
    public function get_robustesse(){
        if($this->status == self::GOOD_HEALTH){
            return $this->robustesse*2;
        }else{
        return $this->robustesse;
        }

    }
    public function get_life(){ return $this->life;}
    
    // set de l'état
    public function set_status(){
        if($this->get_life > ($this->life_max *(60/100)))
        {
            return $this->status= self::GOOD_HEALTH;
        }
        elseif($this->get_life <= ($this->life_max * (60 / 100))or $this->get_life >= $this->life_max * (30/ 100))
        {
            return $this->status = self::MEDIUM_HEALTH;
        }
        else
        {
            return $this->status = self::BAD_HEALTH;
        }
    }
    //affichage de l'état
    public function get_status(){
        switch($this->status){
            case self::MEDIUM_HEALTH:
                echo " La santé de votre yéti est passer a ".$this->status."</br>";
            break;

            case self::BAD_HEALTH:
                echo " La santé de votre yéti est passer a " . $this->status."</br>";
                break;
            
            default:
            return $this->status;
        }
    }
    // afficher si vivant ou mort
    public function get_alive(){
        if($this->get_life != 0){
            return $alive= self::ALIVE;
        }
        else{
            return $alive= self::DIE;
        }
    }
   
};

?>