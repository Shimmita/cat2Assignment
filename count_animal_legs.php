<?php
class Animal {
    public $number_of_legs;

    function __construct($legs) {
        $this->number_of_legs = $legs;
    }
}

class Farm {
    public $animals = [];

    public function addAnimal(Animal $animal) {
        $this->animals[] = $animal;
    }

    //function returns number of legs
    public function getTotalLegs() {
        $totalLegs = 0;
        foreach ($this->animals as $animal) {
            $totalLegs += $animal->number_of_legs;
        }
        return $totalLegs;
    }
}

//instantiation of animals with their number of legs
$chicken = new Animal(2);
$cow = new Animal(4);
$pig = new Animal(4);

$farm = new Farm();
$farm->addAnimal($chicken);
$farm->addAnimal($cow);
$farm->addAnimal($pig);

$totalLegs = $farm->getTotalLegs();

//output
echo "Total animals legs: " . $totalLegs;