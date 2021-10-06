<?php 
require_once __DIR__ . '/Product.php';

class UserOrder extends Product
{
    protected $number;
    protected $pay_method;
    protected $discount;
    protected $finalPrice;

    
    public function __construct($number,$name,$size,$color,$price,$pay_method='Mastercard ****6345'){
        $this->number = $number;
        $this->pay_method = $pay_method;
        parent::__construct($name,$size,$color,$price);
    }
    public function getOrderData(){
        return $this->number.'<br>'.$this->name.'<br>'.$this->size.'<br>'.$this->color.'<br>'.$this->price.'<br>'.$this->pay_method.'<br>';
    }
 
    private  function setDiscount(){
        $this->discount = $this->pay_method == 'Contrassegno' ? 0.2 : 0.1;
    }
    public function getDiscount(){
        $this->setDiscount();
        return 'lo sconto è di: '.$this->discount.'€';
    }
    private function setFinalPrice(){
        $price = $this->getPrice();
        $this->finalPrice = $price - $this->discount;
    }
    public function getFinalPrice(){
       $this-> setFinalPrice();
       return 'il prezzo finale è: '.$this->finalPrice.'€';
    }
}


?>