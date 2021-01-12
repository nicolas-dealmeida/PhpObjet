<!-- Déclaration des Variables PHP -->

<?php
    include "../Config/Function-Web.php" ; // Include des fonctions.  /!\ (Attention à ce que ce soit valide, unique variable à définir et à modifier.) /!\
    include "Function.php" ; // Include des fonctions.  /!\ (Attention à ce que ce soit valide, unique variable à définir et à modifier.) /!\
	$FILE_LOCAL = basename(__FILE__) ; // Définition d'une variable ayant le nom de la page.
	$File_Name = basename(__FILE__, ".php") ; // Définition du Nom de la page.
?>

<!-- Page Web -->
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

        <?php

        ?>

        <div class="Div1">
            <?php
                $User = New User ;
                $User -> AfficheUser() ;
            ?>
        </div>

        <div class="Div1">
            <div class="Div2">
                <p class="TC B">User</p>
            </div>
            <div class="Div3">
                <p>- Nom : String</p>
                <p>- Prenom : String</p>
            </div>
            <div class="Div2">
                <p>+ AfficheUser() : Void</p>
            </div>
        </div>

        <?php
            Highlight($FILE_LOCAL)
        ?>
    </body>
</html>