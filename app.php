<?php

require_once __DIR__.'/vendor/autoload.php';

use \scodx\Animal\Bird\Chicken;
use \scodx\Animal\Felidae\Lion;
use \scodx\House;

/**
 * Creating a new chicken and give a name
 */
$chicken = new Chicken();
$chicken->setName("Louise");

/**
 * Create a Lion and also give him a name
 */
$lion = new Lion();
$lion->setName("Wilbert");

/**
 * Add the two animals as pets.
 */
$house = new House();
$house->addPet($chicken);
$house->addPet($lion);



