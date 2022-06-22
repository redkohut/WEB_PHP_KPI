<?php
class Couple{
    public $number;
    private $nameWom;
    private $nameMen;
    private $ageWom;
    private $ageMen;

    public function __construct($name1, $name2){
        if (!$name1 instanceof Women && !$name1 instanceof Men){
            throw new InvalidArgumentExeption();
        }
        $this->nameWom = $name1->name;
        $this->nameMen = $name2->name;
        $this->ageWom = $name1->age;
        $this->ageMen = $name2->age;

    }
    public function getInfo(){
        return "Name: {$this->nameWom} and {$this->nameMen}. Their age: {$this->ageWom} and {$this->ageMen}";
    }
}

class Women extends Couple{
    public $name;
    public $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    public function by(){
        echo $this->name;
    }
}

class Men extends Couple{
    public $name;
    public $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    public function by(){
        echo $this->name;
    }
}
?>