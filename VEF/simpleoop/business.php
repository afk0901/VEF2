<?php 
//Hérna getum við sett allt sem tengist rekstri fyrirtækisins.

//Hér bý ég til namespace að því að ég er að nota psr-4 autoloading sem tekur namespacið og skráarheitið.
//Þá verður að passa að klasinn heiti það sama og skráin.
namespace oop;

/*Klasinn business, Ef við erum með fyrirtæki þá þurfum við starfsmenn. Þannig að hérna 
viljum við fá tilvik af Staff og setja það í property og nota það property svo til þess að ráða starfsmann.
*/
class business{

	protected $staff;

	function __construct(Staff $staff)//Verður að fara í gegnum klasann Staff.
	{
        $this->staff = $staff;
	}
	
	//Tekur staff propertyið sem er tilvikið af staff klasanum og setur tilvik af person inn í aðferð í þeim klasa.

     public function hire(Person $person)//Verður að fara í gegnum klasann Person
     {
  	   $this->staff->add($person);
  }



}

?>