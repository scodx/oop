<?php

namespace scodx;

use scodx\Animal\Animal;

class House
{

    private $pets;

    /**
     * @return mixed
     */
    public function getPets()
    {
        return $this->pets;
    }

    /**
     * @param mixed $pets
     */
    public function addPet(Animal $pet)
    {
        if($pet->isDomesticated()){
            $this->pets[] = $pet;
        }else{
            throw new \Exception("whoa whoa, this animal is not domesticated, it is not welcome in a house.");
        }
    }


}