<?php

namespace scodx\Animal;

use scodx\Animal\AnimalInterface;

class Animal implements AnimalInterface
{

    private $femaleName;
    private $maleName;
    private $isDomesticated;
    private $type;
    private $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getFemaleName()
    {
        return $this->femaleName;
    }

    /**
     * @param mixed $femaleName
     */
    protected function setFemaleName($femaleName)
    {
        $this->femaleName = $femaleName;
    }

    /**
     * @return mixed
     */
    public function getMaleName()
    {
        return $this->maleName;
    }

    /**
     * @param mixed $maleName
     */
    protected function setMaleName($maleName)
    {
        $this->maleName = $maleName;
    }

    /**
     * @return mixed
     */
    public function isDomesticated()
    {
        return $this->isDomesticated;
    }

    /**
     * @param mixed $isDomesticated
     */
    protected function setIsDomesticated($isDomesticated)
    {
        $this->isDomesticated = $isDomesticated;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    protected function setType($type)
    {
        $this->type = $type;
    }



}
