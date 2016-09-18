<?php
function affichageTableau($arg)
{
	global $content;
	foreach($arg as $indice => $valeur)
	{
		$content .= "$indice : $valeur <br />";
	}
	return $content;
}
function debug($arg)
{
	print '<pre>'; print_r($arg); print '</pre>';
}
function MembreEstConnecte()
{
	if(isset($_SESSION['membre'])) return true;
	else return false;
}
function AdminEstConnecte()
{
	if(MembreEstConnecte() && $_SESSION['membre']['statut'] == 1 ) return true; //.value == "1"
	else return false;
}









