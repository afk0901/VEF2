<?php

class User{

private $email;
private $password;

//Hér frumstilli ég smiðinn og propertyin:
function __construct($userinfo){

$this->email = $userinfo['email'];
$this->password = $userinfo['password'];

}

//Hér er aðferð sem breytir lykilorðinu
public function setPassword($userpass){

$this->password = $userpass;

}

//Hér aðferð sem nær í lykilorðið
public function getPassword(){

$pass = $this->password;
return $pass;
}

//Hér er aðferð sem breytir emailinu
public function setEmail($useremail){

$this->email = $useremail;

}

//Hér er aðfeðr sem nær í emailið
public function getEmail(){

$em = $this->email;
return $em;
}


}

?>