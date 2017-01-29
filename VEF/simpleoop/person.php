<?php
//Hérna gætum við sett allt sem gildir um hverja persónu.

//Set namespace út af autoloading- sjá nánar í business klasanum.
namespace oop;

/*

*/
class person{

//Fullt af property-ium
	protected $name;
	protected $age;
	protected $gender;
	protected $msg;


//Tekur inn nafn og aldur og kyn og setur í property
	public function __construct($name,$age,$gender){

		$this->name = $name;
		$this->age = $age;
		$this->gender = $gender;
	}

     //Gáir hvort aldur sé orðin 18 og setur msg á viðeigandi output.
	public function getage(){
           
           if($this->age < 19){

              $this->msg = $this->name.' you are not old enough, sorry!';


           }

           else{

           	$this->msg = $this->name.' You are old enough! Yayyy!!!';

           }
           echo $this->msg;
	}

	public function getgender(){

		if($this->gender == 'kk' || $this->gender == 'kvk'){

			echo $this->gender;

		}

		else{
			echo 'No gender';
		}
	}

	public function getname(){
		return $this->name;
	}

}


?>