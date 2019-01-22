<?php 
$a[]="Anna";
$a[]="Brittany";
$a[]="Cinderella";
$a[]="Diana";
$a[]="Eva";
$a[]="Fiona";
$a[]="Gunda";
$a[]="Hege";
$a[]="Inga";
$a[]="Johanna";
$a[]="Kitty";
$a[]="Linda";
$a[]="Nina";
$a[]="Ophelia";
$a[]="Petunia";
$a[]="Amanda";
$a[]="Raquel";
$a[]="Cindy";
$a[]="Doris";
$a[]="Eve";
$a[]="Evita";
$a[]="Sunniva";
$a[]="Tove";
$a[]="Unni";
$a[]="Violet";
$a[]="Liza";
$a[]="Elizabeth";
$a[]="Ellen";
$a[]="Wenche";
$a[]="Vicky";

/*
echo substr("Hello world",1); //ello world
echo "<br>";
echo substr("Hello world",-1); //d
echo "<br>";
echo substr("Hello world",0,1); //H
echo "<br>";
echo substr("Hello world",0,-1); //Hello worl
echo "<br>";
*/

$q=$_GET["q"];

if (strlen($q)>0) {
	$hint="";
	for ($i=0; $i < count($a) ; $i++) { 
		//echo strlen($q)."<br/>";
		//echo $a[$i];
		if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q)))) {
			//echo $a[$i];
			if ($hint=="") {
				$hint=$a[$i];
			}else{
				$hint=$hint.",".$a[$i];
			}
		}
	}
}

if ($hint=="") {
	$response="no suggestion";
}else{
	$response=$hint;
}


echo $response;
?>