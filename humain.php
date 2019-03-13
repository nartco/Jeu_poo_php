<?php
    class humain extends vivant implements travailler
    {
        private $_bla;

        public function __construct($couleur, $sexe, $nom, $bla)
        {
            parent::__construct($couleur, $sexe, $nom);
            $this->_bla = $bla;
        }
        public function travailler()
        {
            echo "je taffe";
        }
        public function affichage()
        {
            $type = $this->get_sexe();
            $type = 'H' ? $type = "L'homme" : $type = 'La femme';
            echo $type . ' ' . $this->get_nom() . ' ' . $this->get_color() .' va travailler';
        }
    }
?>