<?php
    include_once 'animal.php';
    include_once 'robot.php';
    include_once 'vivants.php';
    include_once 'travailler.php';
    include_once 'humain.php';
    
    //$seb = new humain('rouge', 'H', 'seb','yo');
   // $seb->affichage();

    function op()
    {
        for ($i=0; $i < 8 ; $i++) { 
        
            $j = rand(1,3);
            $couleur = rand(1,3);
            $sexe = rand(1,2);
            switch($couleur)
            {
                case 1:
                    $couleur = "rouge";
                    break;
                case 2:
                    $couleur = "noir";
                    break;
                case 3:
                    $couleur = "bleu";
                    break;
                default:
                    trigger_error('je ne comprends pas');
                    break;
            }

            if($sexe == 1)
            {
                $sexe = 'F';
            }
            
            else
            {
                $sexe = 'M';
            }
            

            switch ($j) {
                case 1:
                    $pet[$i] = new animal($couleur, $sexe, 'nom'.$i, 4, 'chien' );
                    echo $pet[$i]->get_nom();
                    break;
                case 2:
                    $pet[$i] = new animal($couleur, $sexe, 'nom'.$i, 4, 'chat' );
                    echo $pet[$i]->get_nom();
                    break;
                case 3:
                    $humain[$i] = new humain($couleur, $sexe, 'nom'.$i, 'yo' );
                    echo $humain[$i]->get_nom();
                    break;
                case 1:
                    $robot[$i] = new robot($i, $couleur);
                    echo $robot[$i]->get_id();
                    break;
                
                default:
                   trigger_error('je ne comprends pas');
                    break;
            }
        }
        
    }
    op();
?>