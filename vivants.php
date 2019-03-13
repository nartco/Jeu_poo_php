<?php
    require_once 'affichage.php';
    class vivant
    {
        private $_couleur_poils;
        private $_sexe;
        private $_nom;

        const F = 'F';
        const M = 'M';

        public function __construct($couleur, $sexe, $nom)
        {
            $this->_couleur_poils = $couleur;
            $this->_nom = $nom;
            if(in_array($sexe, [self::F, self::M]))
            {
                $this->_sexe = $sexe;
            }
        }
        public function get_color()
        {
            return $this->_couleur_poils;
        }
        public function get_sexe()
        {
            return $this->_sexe;
        }
        public function get_nom()
        {
            return $this->_nom;
        }
    }