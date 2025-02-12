<?php
    require_once "./Animale.php";

    class Cane extends Animale implements JsonSerializable{

        public function jsonSerialize(): array {
            return [
                'verso' => 'del cane'
            ];
        }
        
    }
?>