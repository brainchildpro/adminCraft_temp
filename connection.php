<?php
function protect($string){
    $string = mysql_real_escape_string($string);
    $string = strip_tags($string);
    $string = addslashes($string);
    
    return $string;
}

function connect()
{
$con = mysql_connect("localhost","brainchi_mc","minecraft1") or die(mysql_error());
$db = mysql_select_db("mtg",$con);
}
?>