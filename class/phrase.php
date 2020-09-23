<?php
class Phrase{
 private $chaine, $italic= false, $bold=false, $underline=false;
 


    function  __construct($phrase){
      $this->chaine = $phrase;
  }

     function set_italic($value){
             $this->italic= $value;
             return $this;//ici on retourne la valeur pour faire le chainage après
  }
     function set_bold($value){
        $this->bold =$value;
        return $this;
  }
     function set_underline($value){
        $this->underline= $value;
        return $this;
  }
     function render(){
         $rendu= $this->chaine;
 
            if($this->italic ){
                $rendu="<i>$rendu </i>";
                        }
            if ($this->bold) {
                $rendu = "<b>$rendu </b>";
            }
            
            if ($this->underline) {
                $rendu = "<u>$rendu </u>";
            }
        return "<p>$rendu</p>";
  }

};


?>