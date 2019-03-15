<?php
    class maillons{
        private $_value;
        private $_next = null;

        public function __construct($valeur, $liste){
             $this->_value = $valeur;
             $this->_liste = $liste;
        }
        public function set_value($value){
            $this->_value = $value;
        }
        public function set_next($next){
            $this->_next = $next;
        }
        public function get_next(){
            return $this->_next->get_value();
        }
        public function get_value(){
            return $this->_value;
        }
    }

    $m1 = new maillons(1,'x');
    $m2 = new maillons(4,'x');
    $m3 = new maillons(2,'x');
    $m1->set_next($m2);
     $m1->get_next();
?>
