<!-- Déclaration des Variables PHP -->

<?php
$EXO = 'Test PDO';
?>

<!DOCTYPE html>
<html lang="fr"> <!-- Langue FR -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' type='text/css' media='screen' href='global.css'> <!-- Assignement du CSS -->
        <meta name="description" content="Site concernant <?php echo $EXO?> "> <!-- Description pour SEO -->
        <link rel="shortcut icon" href="img/Avatar.png"> <!-- Icone de page -->
        <title>Nicolas - PHP - <?php echo $EXO?></title> <!-- Titre Page -->
    </head>
    <!-- Début Header / Menu -->
    <header>
        <div class="Menu-Nav">
            <nav>
                <ul class="Menu">
                    <li class="Logo"><img src="img/Avatar.png" alt="Logo"></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Fin Header / Menu -->

    <!-- body -->
    <body>
        <div>
            <h1 class="TC"><?php echo "$EXO" ?></h1>
        </div>
        <div class="Div1">
                <?php
                $TableConnect1 = 'Medecin' ; // Nom de la Table à la quelle je veut me connecter

                echo "<p>Je vais afficher les Medecins.</p>";
                    try{
                        // Connect à ma BDD et définition de l'objet BDD.
                        $ConnectBDD = new PDO('mysql:host=192.168.64.106; dbname=Pie_TD1_Exo2; charset=utf8','PieTest', 'PieTest');
                        echo "<p>Je suis Connecté.</p>" ;

                        // Définition donné Brut
                        $BrutBDD = $ConnectBDD->query("SELECT * FROM $TableConnect1");

                        echo"<table>
                                <thead>
                                    <tr>
                                        <th>Matricule</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                    </tr>
                                </thead>
                                <tbody>";
                                while($Result = $BrutBDD->fetch()){ // Tant que c'est possible
                                    echo "<tr><td>".$Result["Matricule"]."</td><td>".$Result["Nom"]."</td><td>".$Result["Prénom"]."</td></tr>";
                                };
                                echo"
                                </tbody>
                            </table>";
                            echo "<p>C'est bon, j'ai récupérer les medecins.</p>";
                    }
                    catch (Exception $e){ // Bon ba ça c'est si j'ai une erreur.
                        Echo "<p>Erreur : ".$e ->getMessage()."</p>";
                        echo "<p>Je n'ai pas réussi à afficher les Medecins.</p>";
                    }
                ?>
        </div>
        <div class="Div1">
                <?php

                $TableConnect2 = 'Medecin' ; // Nom de la Table à la quelle je veut me connecter
                $Matricule = 20; // Numéro de la matricule que je cible
                echo "<p>Je vais afficher les info du Medecin de Matricule ".$Matricule.".</p>";
                    try{
                        // Connect à ma BDD et définition de l'objet BDD.
                        $ConnectBDD = new PDO("mysql:host=192.168.64.106; dbname=Pie_TD1_Exo2; charset=utf8","PieTest", "PieTest");
                        echo "<p>Je suis Connecté.</p>";

                        // Définition donné Brut
                        $BrutBDD = $ConnectBDD->query("SELECT * FROM $TableConnect2 WHERE Matricule=$Matricule"); // Je selectionne ce qui a dans la table et qui a le matricule demandé

                        while($Result = $BrutBDD->fetch()){ // Tant que c'est possible
                            echo "<p>".$Result['Nom']." ".$Result['Prénom']."</p>";
                        };
                        echo "<p>C'est bon, j'ai récupérer le medecin matricule ".$Matricule.".</p>";
                    }
                    catch (Exception $e){ // Bon ba ça c'est si j'ai une erreur.
                        Echo "<p>Erreur : ".$e ->getMessage()."</p>";
                        echo "<p>Je n'ai pas réussi à afficher le medecin matricule ".$Matricule.".</p>";
                    }
                    
                ?>
        </div>
    </body>

        <?php
            Highlight($FILE_LOCAL)
        ?>
</html>