<?php
switch ($action) {
    case 'accueil':
    {
        $message = "C'est la page d'accueil";
        include 'views/v_accueil.php';
        break;
    }
    case 'recharger':
    {
        $lesNotes = getLesNotes();
        $message = "données chargées";
        include("views/v_accueil.php");
        break;
    }
    case 'afficher':
    {
        $lesNotes = getLesNotes();
        include("views/v_afficher.php");
        break;
    }
    default :
    {
        include 'views/404.php';
    }

}