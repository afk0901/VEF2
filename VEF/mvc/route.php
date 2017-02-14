<?php

namespace mvc;

class Route { 
	//properties
    public $model; 
    public $view; 
    public $controller; 
     
     //Tekur inn í sig modelið, viewið og controllerinn og setur í properties.
    public function __construct($model, $view, $controller) { 
        $this->model = $model; 
        $this->view = $view; 
        $this->controller = $controller; 

    } 
} 

?>