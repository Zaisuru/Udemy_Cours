<!DOCTYPE html>
<html>
    <head></head>
    <body>


<?php

    class Etudiant {
        public $student = true ;
        public $nom;
        public $age;
        public $notes;

        public function __construct($nom, $age , $notes)
        {
            $this -> nom = $nom;
            $this -> age = $age;
            $this -> notes = $notes;
        }

        public function sePresente(){
            if ($this->student) {
                echo "Je m'appelle $this->nom et j'ai $this->age ans <br>";
                foreach ($this->notes as $matiere => $note){
                    echo "En $matiere , j'ai obtenu $note/20. <br>";
                }
            }
        }
    }

    $notesJohn= array("Maths" => 17, "Français" => 9, "Anglais"=> 12);

    $John = new Etudiant("John", "31",$notesJohn);

    $John->sePresente();

?>
    </body>
</html>
