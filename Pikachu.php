<?php 
    class Pikachu {
        public $name;
        public $starthealth;
        public $attack;
        public $health;
        public $type;


            public function __construct($name, $starthealth, $type, $attack, $health)
            {
                $this-> name = $name;
                $this-> starthealth = $starthealth = 60;
                $this-> type = $type = lightning; 
                $this-> attack = $attack;
                $this-> health = $health;
            }
    }
    
?>
