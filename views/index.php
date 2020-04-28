<?php
// Lancement de la session
session_start();
// Encodage de la page
header("Content-Type: text/html; charset=utf-8");
// Conf générale
require_once("../conf/generalConf.php");
// Test de variable du generalconf
echo "variable EMAIL_SUPPORT_TECH: ". EMAIL_SUPPORT_TECH."<br>";