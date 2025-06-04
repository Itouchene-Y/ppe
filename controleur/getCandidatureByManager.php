<?php

require_once ("modele/candidatureModel.php");
require_once("bdd/bdd.php");


$candidatures = new Candidature($bdd);
$getCandidatureByManager = $candidature->getCandidatureByManager($_SESSION['id']);



?>