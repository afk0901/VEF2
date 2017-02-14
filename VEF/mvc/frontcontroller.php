<?php 

namespace mvc;

class FrontController { 

    private $controller; 
    private $view; 
     
     //Tekur inn tilvik af klasanum router og 
  public function __construct(Router $router, $routeName, $action = null) { 


        //Hér verður að passa að því að við erum að nota namespace að bæta því við strenginn þ.e.s. nafnið á klasanum. Annars finnst hann ekki
         //Hér er náð í properti-in sem að route klasinn er búinn að setja nokkur tilvik í, þ.e.s. model, view og controller.
         //Þau eru síðan notuð til að búa til ný tlivik af model, view og controller.
        $route = $router->getRoute($routeName); 
        $modelName = '\\mvc\\'.$route->model; 
        $controllerName = '\\mvc\\'.$route->controller; 
        $viewName = '\\mvc\\'.$route->view; 
       
        $model = new $modelName;
        $this->controller = new $controllerName($model); 
        $this->view = new $viewName($routeName, $model); 
         
         //Ef að við fáum get request frá takkanum okkar s.s. action þá búum við til fallið að því að action=nafniðáfallinu og náum þ.a.l. í aðferðina sem er í controller. 
        if (!empty($action)) $this->controller->{$action}(); 
    } 
     
     //Lokaniðurstaða eftir breytingu.
    public function output() { 
    
        return $this->view->output(); 
    } 
} 



?>