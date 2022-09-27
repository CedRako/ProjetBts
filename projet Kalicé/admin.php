<?php
$_SESSION['pseudo'] = $pseudo;    //connexion
switch ($pseudo) {
    case 'admin': include('bibliotheque.php');
    break;
    default: header ("Location: _____.php");
    break;
}
?>