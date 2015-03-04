<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

if ($_GET["l"] == null)
{
	switch ($lang){
	    case "fr":
		//echo "PAGE FR";
		include("index_fr.html");//include check session FR
		break;      
	    default:
		//echo "PAGE EN - Setting Default";
		include("index_en.html");//include EN in all other cases of different lang detection
		break;
	}
} else if ($_GET["l"] == "en") {
	include("index_en.html");
} else if ($_GET["l"] == "fr") {
	include("index_fr.html");
}
?>
