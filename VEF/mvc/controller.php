<?php
namespace mvc;

//Þessi klasi tekur model klasann inn í sig og notar hann til að uppfæra gögnin í model og Leitar af bókinni sem notandi valdi.
//Þetta gerist bara þegar hann ýtir á takkann.
class controller { 
 private $model; 
     
    public function __construct(Model $model) { 
        $this->model = $model; 
    } 
    

    public function seeinfo() { 
        $this->model->getmybookdescr($_GET['selected']);
    } 
} 


?>