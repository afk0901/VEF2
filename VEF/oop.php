<h3>Are you old enough?</h3>

<form method="POST">
<label>What is the name?</label>
<input type="text" name="name"></input>
<label>How old?</label>
<input type='number' name="age"></input>
<label>What is the gender? (m/f)</label>
<input type="text" max="3" name="gender"></input>
<input type="submit" name="morestaff">Add this employee and add more staff</input>
<input type="submit" name="finish">Finish</input>
</form>

<?php
require 'vendor/autoload.php';//Næ í allt draslið sem ég vil fá. s.s autoload sér um að loada því inn fyrir mig.


//Bý til ný tilvik
$arnar = new oop\person("Arnar Freyr",17,'m');
$dagny = new oop\person("Dagny",20,'f');
$staff = new oop\staff;
$mycompany = new oop\business($staff);

//Næ í aðferðir.

$mycompany->hire($arnar);
$mycompany->hire($dagny);
$staff->staff();
$arnar->getage();
$dagny->getage();

?>