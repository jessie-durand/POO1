<?php

require_once 'Bicycle.php';

/** OBJET BIKE  */



//Je donne des propriétés à ma classe depuis l'extérieur 
$bike = new Bicycle('blue', 15, 1, 2);
var_dump($bike); 



 // Exemple du vélo $bike qui avance et ensuite freine 
     echo $bike->forward();
     echo '<br> Vitesse du vélo bike : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
     echo $bike->brake();
     echo '<br> Vitesse du vélo bike: ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
     echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
    $rockrider = new Bicycle('yellow', 10, 2, 3);
    var_dump($rockrider);

// Exemple du vélo $rockrider qui avance et ensuite freine 
    echo $rockrider->forward();
    echo '<br> Vitesse du vélo rockrider: ' . $rockrider->getCurrentSpeed() . ' km/h' . '<br>';
    echo $rockrider->brake();
    echo '<br> Vitesse du vélo rockrider : ' . $rockrider->getCurrentSpeed() . ' km/h' . '<br>';
    echo $rockrider->brake();


// Instanciation d'un nouvel objet $tornado
     $tornado = new Bicycle('black', 8, 1, 1);



// Exemple du vélo $tornado qui avance et ensuite freine 
    echo $tornado->forward();
    echo '<br> Vitesse du vélo rockrider: ' . $tornado->getCurrentSpeed() . ' km/h' . '<br>';
    echo $tornado->brake();
    echo '<br> Vitesse du vélo rockrider : ' . $tornado->getCurrentSpeed() . ' km/h' . '<br>';
    echo $tornado->brake();



// // /* OBJET CARS */ 
 require_once 'Cars.php';

// Instanciation d'un nouvel objet $car1
 $car1 = new Car('Blue', 5, 'Diesel');

// Exemple de car $car1 qui avance et ensuite freine 
    echo $car1->start();
    echo $car1->forward();
    echo '<br> Vitesse du Cars1 : ' . $car1->getCurrentSpeed() . ' km/h' . '<br>';
    echo $car1->brake();
    echo '<br> Vitesse du Cars1 : ' . $car1->getCurrentSpeed() . ' km/h' . '<br>';
    echo $car1->brake();

// Instanciation d'un nouvel objet $car2
    $car2 = new Car('Yellow', 4, 'Essence');


// Exemple de car $car1 qui avance et ensuite freine 
        echo $car2->start();
        echo $car2->forward();
        echo '<br> Vitesse du Cars2 : ' . $car2->getCurrentSpeed() . 'km/h' . '<br>';
        echo $car2->brake();
        echo '<br> Vitesse du Cars2 : ' . $car2->getCurrentSpeed() . 'km/h' . '<br>';
        echo $car2->brake();
