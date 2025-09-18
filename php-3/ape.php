<?php
require_once "animal.php";

class Ape extends Animal {
    public function __construct($name) {
        parent::__construct($name);
        $this->legs = 2; // Ape hanya punya 2 kaki
    }

    public function yell() {
        echo "Yell : Auooo <br>";
    }
}
?>
