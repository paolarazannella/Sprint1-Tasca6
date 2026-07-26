<?php

class Person
{
    public $name = "Paola";
    public $lastName = "Lara";

    public function __toString()
    {
        return "My name is " . $this->name . "<br>"
        . "My last name is " . $this->lastName ."<br>";

    }
}

$person = new Person();

echo $person;

?>