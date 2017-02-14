<?php
namespace mvc;

require 'vendor/autoload.php';//Næ í allt draslið sem ég vil fá. s.s autoload sér um að loada því inn fyrir mig.

//Nýtt tilvik af frontcontroller sem tekur tilvikið inn í sig nær svo í get beiðnina sem fylgir route og ef að það er
//eitthvað í action beiðninni þá mun það fara inn líka annars bara null. Svo gæti maður jafnvel búið til annað tilvik af front contro
//ller en sett annað nafn á rútuna og fengið annað view, annan controller annan model.
$frontController = new frontcontroller(new router, 'booklistroute'); 

//Outputtið, nú er búið að fara í gegnum allt dótið, controller, model og view svo að lokaoutputtið er það sem þesssi aðferð 
//skilar út.
echo $frontController->output();

?>