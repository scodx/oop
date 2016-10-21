<?php

namespace scodx\Animal\Bird;

use scodx\Animal\Animal;

/**
 *
 */
class Chicken extends Animal
{

    function __construct($name = "")
    {

        $this->setFemaleName("hen");
        $this->setMaleName("rooster");
        $this->setIsDomesticated(true);
        $this->setType("bird");

        if(strlen(trim($name)) != ""){
            $this->setName($name);
        }

    }

}
