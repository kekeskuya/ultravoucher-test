<?php


$map  = array();
$data = array('cook', 'save', 'taste', 'aves', 'vase', 'state', 'map');

foreach($data as $str){

    $strSplit = str_split($str);
	sort($strSplit);
    $strSplit = implode("",$strSplit);
	$map[$strSplit][] = $str; 
	
}

print_r ($map);


?>