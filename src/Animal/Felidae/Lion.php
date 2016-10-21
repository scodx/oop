<?php

namespace scodx\Animal\Felidae;

use scodx\Animal\Animal;

class Lion extends Animal
{


    function __construct($name = "")
    {

        $this->setFemaleName("Lioness");
        $this->setMaleName("Lion");
        $this->setIsDomesticated(false);
        $this->setType("Felidae"); // Which is the same as Feline

        if(strlen(trim($name)) != ""){
            $this->setName($name);
        }

    }

}