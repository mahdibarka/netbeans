<?php
// Désactiver le cache WSDL
ini_set('soap.wsdl_cache_enabled', 0);

// URL du fichier WSDL
$wsdl = "http://localhost:8080/WSExemple/SommeWS?WSDL";

// Créer un client SOAP
$service = new SoapClient($wsdl);

// Appeler la méthode du service avec les paramètres
$params = array("a" => 5, "b" => 7);
$res = $service->calculerSomme($params);

// Afficher le résultat
echo "La somme de 5 et 7 est : " . $res->return;
?>
