<?php

require 'vendor/autoload.php';//Næ í allt draslið sem ég vil fá. s.s autoload sér um að loada því inn fyrir mig.

//Bý til ný tilvik
$arnar = new oop\person("Arnar Freyr",17,'m');
$dagny = new oop\person("Dagny",20,'f');
$staff = new oop\staff;
$mycompany = new oop\business($staff);

//Næ í aðferðir

$mycompany->hire($arnar);
$mycompany->hire($dagny);
echo $arnar->getgender();
echo $dagny->getgender();
echo $arnar->getage();
echo $dagny->getage();


//Lúppa í gegnum staff arrayið
foreach ($staff->staff() as $employee) {
	echo $employee.' ';
}

?>