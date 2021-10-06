<?php 

class Product extends User
{
    protected $name;
    protected $size;
    protected $color;
    protected $price;
    
    public function __construct($name,$size,$color,$price){
        $this->name = $name;
        $this->size = $size;
        $this->color = $color;
        $this->price = $price;

        
    }
    public function getProductData(){
        return $this->name.'<br>'.$this->size.'<br>'.$this->color.'<br>'.$this->price.'<br>';
    }
    public function getPrice(){
        return $this->price;
    }
    
}

?>