<?php 

class User{
    protected $name;
    protected $surname;
    protected $address;
    protected $level;
   
    
    public function __construct($name,$surname,$address,$level){

        $this->name = $name;
        $this->surname = $surname;
        $this->address = $address;
        $this->level = $level;
        

        
    }

    public function getUserData(){
        return $this->name.'<br>'.$this->surname.'<br>'.$this->address.'<br>'.$this->level.'<br>';
    }
}



?>