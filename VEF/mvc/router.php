<?php
namespace mvc;

class router { 
	//Properties
	private $booklistrouting = 'booklistroute';
	private $anotherrouting = 'another';
    private $table = array(); 
     
     //Hérna skilgreinum við hvaða model, view og controller við viljum fá.
    public function __construct() { 

        $this->table[$this->booklistrouting] = new route('model', 'view', 'controller'); 
        //Gærum bætt við fleiri route en þá þyrfti að búa til fleiri model view og controller eða allavega eitt af því.
    } 
     
    public function getRoute($route) { 
        $route = strtolower($route); 

        //Ef að þessi tiltekna routinglausn er ekki til þá notum við bara booklistrouting. Annars það sem beðið var um. 
        if (!isset($this->table[$route])) { 
            return $this->table[$this->booklistrouting];     
        }
           
        return $this->table[$route];         
    } 
} 



?>