<?php

function formatDate($value,$pattern){
	$date = new DateTime($value);
	return $date->format($pattern);
}

?>