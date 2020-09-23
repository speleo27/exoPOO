<?php
class Yetirpg{
    private $name,$force,$robustesse,$status,$life,$life_max;

    public static $allYeti=array();
    public static $alive=1;
 

    const GOOD_HEALTH= 3;
    const MEDIUM_HEALTH= 2;
    const BAD_HEALTH=1;

    const ALIVE=1;
    const DIE=0;

   

    public function __construct($name)
    {
        
        
        $this->name=$name;
        $this->force= rand(3,10);
        $this->robustesse=rand((10-$this->force - 3),7);
        $this->life_max= rand((50-$this->robustesse*2),(100+$this->force*2));
        $this->life= $this->life_max;
        //$this->status= $this->set_status();
        echo "un nouveau yéti ".ucfirst($this->name). " viens d'arriver dans l'arène</br>";
        array_push(self::$allYeti,$this);
        
    }
    public function set_life($newlife){
        $this->life=$newlife;
        echo "le yéti".ucfirst($this->get_name())." vient de passer a ".$this->life."</br>";
      
        if($this->get_alive() == self::DIE){
            echo "Le Yéti" . ucfirst($this->get_name()) . " à malheureusement succomber</br>";
        }
        $this->set_status();
        return $this->life;
    }
    public function get_name(){ return $this->name;}

    public function get_force(){
        if($this->status==self::BAD_HEALTH)
        {
            return $this->force = $this->force * count(self::listAlive());
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
        if($this->get_life() > ($this->life_max *(60/100)))
        {
            return $this->status= self::GOOD_HEALTH;
        }
        elseif($this->get_life() <= ($this->life_max * (60 / 100))or $this->get_life >= $this->life_max * (30/ 100))
        {
            return $this->status = self::MEDIUM_HEALTH;
        }
        else
        {
            return $this->status = self::BAD_HEALTH;
        }
    }
    public function what_status(){return $this->status;}

    //affichage de l'état
    public function get_status(){
        switch($this->what_status()){
            case self::MEDIUM_HEALTH:
                echo " La santé de votre yéti est passer a moyenne</br>";
            break;

            case self::BAD_HEALTH:
                echo " La santé de votre yéti est passer a très basse sa craint</br>";
                break;
            
            default:

            echo "le Yéti est en bon état";
        }
    }
    // afficher si vivant ou mort
    public function get_alive(){
        if($this->get_life() != 0){
            return  self::ALIVE;
        }
        else{

            return  self::DIE;
        }
    }
    // remplir le tableau
  
    public static function get_array(){
        
        return self::$allYeti;
    }
    public static function listAlive()
        {
        $yetialive = array();
         
            echo "<ul>";
            foreach(self::$allYeti as $yeti)
            {
          
                if($yeti->life != self::DIE){
                echo "<li>" .$yeti->name."</li>";
               
                array_push($yetialive,$yeti);
                    
            }
            
            echo'</ul>';
        }

        return $yetialive;

    }

    // on attaque le combat
    public function se_defendre($attaquant){
        echo" un combat épique entre ".$this->get_name()." et ".$attaquant->get_name()."viens de commencer</br>" ;
        return $this->set_life($attaquant->get_force() - $this->get_robustesse()) ;
    }
    public function attaquer(){
        $yeti= self::listAlive();
        do{
        $tirage=rand(0,count(self::listAlive())-1);
        $defenseur= $yeti[$tirage];
        }while($this==$defenseur);

     //$yeti= array_rand(self::listAlive());
       // $yeti[0]->se_defendre($this);  
    echo "Combat va débuter entre ".$this->get_name()." et ".$defenseur->get_name();
    }
  

    
};

?>