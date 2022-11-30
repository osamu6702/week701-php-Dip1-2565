<?php
  class Calculation {
     public $a,$b,$c; //property

     function sum(){
        $this->c=$this->a + $this->b;
        return $this ->c;
     }

     function sub (){
        $this->c =$this->a - $this->b;
        return $this->c;
     }
  }
  $c1 =new Calculation(); //instance opject
  $c1->a=10;
  $c1->b=20;

print("Sum:". $c1->sum() . "<br />");
print("Sub:". $c1->sub())
?>