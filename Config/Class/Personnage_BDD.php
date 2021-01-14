<?php

    // Définition de la BDD de manière général.
    $BDD_Host		=	"192.168.64.106" ;		// Adresse du Serveur.
    $BDD_User		=	"root" ;	    		// Nom User BDD.
    $BDD_Password	=	"root" ;	            // MDP User BDD.
    $BDD_Name		=	"Pie_TD3" ;			    // Nom de la BDD.

    try {
        $BDD = NEW PDO("mysql:host={$BDD_Host};dbname={$BDD_Name}",$BDD_User, $BDD_Password) ;
        $BDD -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;
    }
    catch(PDOEXCEPTION $e) {
        $e -> getMessage() ; // Si Erreur, Affiche Erreur
    }

    // Class User
    Class Personnage_BDD {

        // Variables (Variables)
        Private $_Pseudo ;
        Private $_Vie ;
        Private $_ID ;
        Private $_BDD ;
        Private $_Attaque ;
        Private $_ID ;

        // Public Function (Utilisable par tous)




        // __construct
        Public Function __construct($_ID){

            $this->$_BDD = query("SELECT * FROM `Personnage` WHERE `Personnage_ID`=".$_ID)  ;  // Requêtes BDD
            $this->$_BDD_Personnage = $this->$_BDD -> fetch() ;

            $this->_Vie = $_BDD_Personnage['Vie'] ;
            $this->_Pseudo = $_BDD_Personnage['Pseudo'] ;
            $this->_Attaque = $_BDD_Personnage['Attaque'] ;
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