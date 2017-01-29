<?php

//Hérna gætum við sett allt um starfsmennina, hvað þeir gera o.s.f.v
namespace oop;

//Þessi klasi þarf að hafa tilvik af Person og bætir inn í members 
class staff {

protected $members = [];

//Búið til aðferð sem tekur inn tilvik af Person og setur nafn í property.

public function add(Person $person){

$this->members[] = $person->getname();

}


//Skilar út öllum nöfnum af starfsmönnum
public function staff(){

	foreach ($this->members as $member) {
		
		echo $member.'   ';
	}

}

}
  

?>