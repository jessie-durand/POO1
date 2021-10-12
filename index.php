<?php

require_once 'Bicycle.php';

/** OBJET BIKE  */



// Je donne des propriétés à ma classe depuis l'extérieur 
$bike = new Bicycle('blue', 15, 1, 2);
$bike->color = 'blue';
$bike->currentSpeed = 0;
//var_dump($bike); 



 // Exemple du vélo $bike qui avance et ensuite freine 
 echo $bike->forward();
echo '<br> Vitesse du vélo bike : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo bike: ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle();
$rockrider->color = 'yellow';
$rockrider->currentSpeed = 10;
//var_dump($rockrider);

 // Exemple du vélo $rockrider qui avance et ensuite freine 
 echo $rockrider->forward();
echo '<br> Vitesse du vélo rockrider: ' . $rockrider->currentSpeed . ' km/h' . '<br>';
echo $rockrider->brake();
echo '<br> Vitesse du vélo rockrider : ' . $rockrider->currentSpeed . ' km/h' . '<br>';
echo $rockrider->brake();


// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle();
$tornado->color = 'black';
$tornado->currentSpeed = 2;

// Exemple du vélo $tornado qui avance et ensuite freine 
echo $tornado->forward();
echo '<br> Vitesse du vélo rockrider: ' . $tornado->currentSpeed . ' km/h' . '<br>';
echo $tornado->brake();
echo '<br> Vitesse du vélo rockrider : ' . $tornado->currentSpeed . ' km/h' . '<br>';
echo $tornado->brake();



/* OBJET CARS */ 

// Instanciation d'un nouvel objet $car1
$car1 = new Car();
$car1->color = 'purple';
$car1->currentSpeed = 0;
$car1->energyLevel = 4;

// Exemple de car $car1 qui avance et ensuite freine 
echo $car1->start();
echo $car1->forward();
echo '<br> Vitesse du vélo rockrider: ' . $car1->currentSpeed . ' km/h' . '<br>';
echo $car1->brake();
echo '<br> Vitesse du vélo rockrider : ' . $car1->currentSpeed . ' km/h' . '<br>';
echo $car1->brake();

// Instanciation d'un nouvel objet $car2
$car2 = new Car();
$car2->color = 'GREY';
$car2->currentSpeed = 7;
$car2->energyLevel = 3;

// Exemple de car $car1 qui avance et ensuite freine 
echo $car2->start();
echo $car2->forward();
echo '<br> Vitesse du vélo rockrider: ' . $car2->currentSpeed . ' km/h' . '<br>';
echo $car2->brake();
echo '<br> Vitesse du vélo rockrider : ' . $car2->currentSpeed . ' km/h' . '<br>';
echo $car2->brake();
