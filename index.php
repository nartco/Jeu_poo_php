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
        $k = 0;
        $x = 0;
        $animaux = array();
        $personne = array();

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
                    $animaux[$k] = $pet[$i];
                    $k++;
                    break;
                case 2:
                    $pet[$i] = new animal($couleur, $sexe, 'nom'.$i, 4, 'chat' );
                    $animaux[$k] = $pet[$i];
                    $k++;
                    break;
                case 3:
                    $humain[$i] = new humain($couleur, $sexe, 'nom'.$i, 'yo' );
                    $personne[$x] = $humain[$i];
                    $x++;
                    break;
                case 1:
                    $robot[$i] = new robot($i, $couleur);
                    $personne[$x] = $robot[$i];
                    $x++;
                    break;
                
                default:
                   trigger_error('je ne comprends pas');
                    break;
            }
        }
        action($animaux, $personne);
        
    }

    function action(array $animaux, array $personne)
    {
        
       // var_dump($animaux);
       // var_dump($personne);
        for ($x=0; $x < 10 ; $x++) { 

            $i = rand(0, (count($animaux) -1));
            $j = rand(0, (count($personne) -1));

            if(empty($animaux) == false)
            echo $animaux[$i]->cri() . '<br>';
            

            if(empty($personne) == false)
            echo $personne[$j]->travailler() . '<br>';

        }
        
    }
    op();
?>