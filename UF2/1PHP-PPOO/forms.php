<?php

class Forms {
    public $name = 'Jordi';

    public function sayHello(){
        return $this->name.'hola';
    }
}

$user1 = new User();
echo $user1->name;
echo $user1->sayHello();
?>