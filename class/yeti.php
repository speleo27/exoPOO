<?php
class Yeti{
    private $name,$tribu;

    public function __construct($name,$tribu=null){
        $this->name=$name;
        $this->tribu=$tribu;
        echo"bravo ".ucfirst($this->name)." est créer</br>";   
    }
    public function set_tribe($tribeName){
        $this->tribu=$tribeName;
        echo ucfirst($this->name) ." à rejoint la tribu : $this->tribu </br>";
        return $this;
    }
    public function get_name(){
        return $this->name;
    }
    public function get_tribe(){
        return $this->tribu;
    }

    public function whatYourName($yeti){
        if($this->tribu == $yeti->get_tribe() ){
            echo "tu es mon ami ".ucfirst($yeti->get_name())."</br>";
        }else{
            echo'GRRRRRRRRRRR</br>';
        }
    }
}


?>