<?php
    require 'travailler.php';
    class robot implements travailler, action
    {
        private $_color;
        private $_id;

        public function __construct($id, $color)
        {
            $this->$_id = $id;
            $this->$_color = $color;
        }

        public function travailler()
        {
            echo "je taffe";
        }
        public function affichage()
        {
            
            echo $_id . ' '.  $_color . ' va travailler';
        }
        public function get_id()
        {
            return $this->_id;
        }
    }
?>