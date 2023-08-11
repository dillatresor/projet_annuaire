<?php 
function bd()
{
try {
$bdd= new PDO('mysql:host=localhost;dbname=bd_app','root','');

} catch (Exception $e) {
	    $e->getMessage();
}
 return $bdd;
}
?>