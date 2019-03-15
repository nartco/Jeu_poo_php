<?php
    require_once 'vivants.php';
    require_once 'affichage.php';
    class animal extends vivant implements action
    {
        private $_race;
        private $_pates;
        private $_cri;
        
        const chien = 'chien';
        const chat = 'chat';
        
        public function __construct($couleur, $sexe, $nom, $pates, $race)
        {
            parent::__construct($couleur, $sexe, $nom);
            if($pates >= 0 && $pates <= 20)
            {
                $this->_pates = $pates;
            }
            if(in_array($race, [self::chien, self::chat]))
            {
                $this->_race = $race;
            }
        }
        public function affichage()
        {
            $type_cri;
            $this->_race = 'chien' ? $type_cri = 'aboyer' : $type_cri = 'miauler';
            echo 'je vais ' . $type_cri;
        }
        public function cri()
        {
            $type_cri;
            $this->_race = 'chien' ? $type_cri = 'aboyer' : $type_cri = 'miauler';
            echo $type_cri;
        }
    }
?>