<?php
    // Class User
    Class Personnage {

        // Variables (Variables)
        Private $_Pseudo ;
        Private $_Vie ;
        Private $_ID ;

        // Public Function (Utilisable par tous)

        // Définiti Vie à 100
        Public Function __construct($_Pseudo){
            $this -> _Vie = 100 ;
            $this -> _Pseudo = $_Pseudo ;
        }
 

        // Affiche Pseudo
        Public Function AffichePseudo(){
            echo $this->_Pseudo ;
        }
        // Affiche Vie
        Public Function AffichePdv(){
            echo $this->_Vie ;
        }

        // Attaquer
        Public Function Attaquer($Personnage,$Dégats){
            ?> <p> <?= $this->_Pseudo ?> attaque <?php $Personnage->AffichePseudo() ?> </p> <?php ;
            ?> <p> <?php $Personnage -> SeDefendre($Dégats) ?> </p> <?php ;
        }
        // Se Defendre
        Public Function SeDefendre($Dégats){
            $this->_Vie = ($this->_Vie - $Dégats) ;
            echo "$this->_Pseudo se défend, à subit $Dégats dégats, et a maintenant " ;
            $this->AffichePdv() ;
            echo " points de vie." ;
        }




        // Protected Function (Utilisable uniquement par la Class et ceux qui en héritent et parentent)

        // Private Function (Utilisable Uniquement par la Class)

    }
?>