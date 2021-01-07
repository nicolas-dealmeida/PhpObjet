<?php
    header("Status: 301 Moved Permanently", false, 301); // Redirection Permanente (301)
    header("Location: ..\Config\Accueil.php"); // Page vers la quelle il redirige
    exit(); // Fin
?>