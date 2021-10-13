<?php 

/** CLASS BICYCLE ET SES PROPRIETES */

    class Bicycle {
        private string $color;
        private int $currentSpeed;
        private int $nbSeats;
        private int $nbWheels;

 // J'ajoute le constructeur 
        public function __construct(string $color, int $currentSpeed, int $nbSeats, int $nbWheels)
        {
            $this->color=$color;
            $this->currentSpeed=$currentSpeed;
            $this->nbSeats=$nbSeats;
            $this->nbWheels=$nbWheels;
        }
   
// J'ajoute un Getter à color 
    public function getColor(): string
    {
        return $this->color;
    }
    
// J'ajoute un Setter à color 
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

// J'ajoute un Getter à currentSpeed
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

// J'ajoute un Setter à currentSpeed et j'imbrique une fonction
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed>= 0) {
        $this->currentSpeed = $currentSpeed;
    }
}

 // Exemple du vélo qui avance et ensuite freine 
    public function forward(): string
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
    $sentence = "";
    while ($this->currentSpeed > 0) 
    {
        $this->currentSpeed--;
        $sentence .= "Brake !!!";
    }
    $sentence .= "I'm stopped !";
    return $sentence;
    }
}


