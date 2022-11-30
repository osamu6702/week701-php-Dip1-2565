<?php 
    class person{
        public $name ="Osamu Eguchi" , $age = 50;

        function __construct($name,age)
        {
            $this ->name = $n;
            $this ->age  = $a;
        }
        function show(){
            print($this->name) , ($this->age);

        }

        $obj1 = new Person("vanavee"),20
        // $obj1->name = "vanavee <br />";
// $obj1->age = 20;
$obj1->show();
?>