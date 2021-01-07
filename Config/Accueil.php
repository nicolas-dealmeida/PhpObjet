<!-- Déclaration des Variables PHP -->

<?php
	include "Function-Web.php" ; // Include des fonctions. 
	$FILE_LOCAL = basename(__FILE__) ; // Définition d'une variable ayant le nom de la page.
	$File_Name = basename(__FILE__, ".php") ; // Définition du Nom de la page.
?>

<!DOCTYPE html>
<html lang="fr"> <!-- Langue FR -->
    <?php
    Head($FILE_LOCAL) ;
    ?>
    <body>
        <?php
            Menu() ;
        ?>

        <div>
            <h1 class="TITRE">
                <?php
                    echo "$File_Name" ;
                ?>
            </h1>
        </div>

        <div class="Div1"> 
            <h2 class="PAD1"><a href='#'>PhpObjet</a></h2>
            <p><a href='..\PHP\PHP_Partie3_Exo1.php'>Exercice 1</a></p>
            <p><a href='..\PHP\PHP_Partie3_Exo2.php'>Exercice 2</a></p>
            <p><a href='..\PHP\PHP_Partie3_Exo3.php'>Exercice 3</a></p>
            <p><a href='..\PHP\PHP_Partie3_Exo4.php'>Exercice 4</a></p>
            <p><a href='..\PHP\PHP_Partie3_Exo5.php'>Exercice 5</a></p>
            <p><a href='..\PHP\PHP_Partie3_Exo6.php'>Exercice 6</a></p>
            <p><a href='..\PHP\PHP_Partie3_Exo7.php'>Exercice 7</a></p>
            <p><a href='..\PHP\PHP_Partie3_Exo8.php'>Exercice 8</a></p>
        </div>

        <?php
            Highlight($FILE_LOCAL)
        ?>
    </body>
</html>