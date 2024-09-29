<?php 

class User {
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    // "final" es para evitar que sobrescriban el metodo getName
    final public function getName(){
        return "Soy $this->name";
    }
}

class Admin extends User {
    #...
}

$admin = new Admin('Rauling');

echo $admin->getName() . "\n";