<?php

#############################################
#											#
#		Condition de fontionnement :		#
#											#
#############################################
#
#		Intégrer dans une balise PHP :
#
#	include "../Function-Web.php" ; // Include des fonctions
#	$FILE_LOCAL = basename(__FILE__) ; // Définition d'une variable ayant le nom de la page.
#	$File_Name = basename(__FILE__, ".php") ; // Définition du Nom de la page, avec retrait du ".php".
#	
############################################################################################


Function Head($FILE_LOCAL) // Fonction pour le Head et les metas de page.
{
	session_start ();
	$File_Format = "UTF-8" ; // Définition du Format d'encodage.
	$File_CSS = "../Config/global.css" ; // Définition du Fichier CSS correspondant.
	$File_Name = basename($FILE_LOCAL, ".php") ; // Définition du Nom de la page.
	$File_Description = "Exercices PHP Objets de Nicolas - $File_Name" ; // Définition de la Description de la page.
	$File_Icon = "../Icon.png" ; // Définition de l'Icon de page.
	$File_Author = "Nicolas" ; // Définition de l'Auteur de la page.

	?>
	
	<head>
				<!-- SEO et Affichagse Classiques -->
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<meta charset='<?php echo $File_Format ?>'>
		<link rel='stylesheet' type='text/css' media='screen' href='<?php echo $File_CSS ?>'>
		<title>Nicolas - <?php echo $File_Name ?></title>
		<meta name='description' content='<?php echo $File_Description ?>'>
		<link rel='shortcut icon' href='<?php echo $File_Icon ?>'>
		<meta name='author' content='<?php echo $File_Author ?>'>

				<!-- Intégration Facebook -->
		<meta property='og:title' content='Nicolas - <?php echo $File_Name ?>'>
		<meta property='og:description' content='<?php echo $File_Description ?>'>
		<meta property='og:image' content='<?php echo $File_Icon ?>'>

				<!-- Intégration Twitter -->
		<meta name='twitter:title' content='Nicolas - <?php echo $File_Name ?>'>
		<meta name='twitter:description' content='<?php echo $File_Description ?>'>
		<meta name='twitter:image' content='<?php echo $File_Icon ?>'>
	</head>
	<?php
}


Function Menu() // Fonction affichant le menu.
{
	?>
	<header>
        <div class='Menu-Nav'>
            <nav>
				<ul class='Menu'>
				    <li class='Sous-Menu-1'><a href='..\Config\Accueil.php'>Accueil</a></li>
                </ul>
            </nav>
        </div>
	</header>
	<?php
}

Function Highlight($FILE_LOCAL) // Fonction affichant le highlight_file.
{
	?>
	<footer>
		<div class='Div1'>
			<p>Code Source du site :</p>
			<?php highlight_file($FILE_LOCAL) ?>
		</div>
	</footer>
	<?php
}




















?>