<?php
namespace mvc;

class view { 
    private $model;
//Tekk inn nafn route þegar sem kallar á þennan klasa og síðan modelið, set það í properties.
function __construct($route, Model $model){
    $this->route = $route;
    $this->model = $model;
}

//Hérna lúppum við í gegnum arrayið sem að model gaf okkur s.s. gögnin. Sem í þessu tilviku eru bækurnar okkar.
function output(){
//Hér er route sem er sett inn í front-controllerinn með $_GET.
echo '<form name="selectlist" action='.$_SERVER['PHP_SELF'].'?selected=seeinfo" method="GET">';
    echo '<select name="selected">';
    print_r($_GET);
    foreach ($this->model->getmybooklist() as $t) {
        
        echo '<option>'.$t.'</option>';
    }

    echo '</select>';
    echo '<input type="submit" name="submit" value="See more>">';
    echo '</form>';

    $books = $this->model->getmybookdescr($_GET['selected']);

    if (!empty($books)) {

        echo "<p>Titill:".$books[0]."\n\r</p>";
        echo "<p>Útgefandi:".$books[1]."\n\r</p>";
        echo "<p>Ár: ".$books[2]."\n\r</p>";
    }

    else{
    	echo 'Select a book :)';
    }
        
}
} 

?>