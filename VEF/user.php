<?php

class User{

private $email;
private $password;

//Hér frumstilli ég smiðinn og propertyin:
function __construct($userinfo){

$email = $userinfo['email'];
$password = $userinfo['password'];

}

//Hér er aðferð sem breytir lykilorðinu
public setPassword($userpass){

$password = $userpass;

}

//Hér aðferð sem nær í lykilorðið
public  getPassword(){
$pass = $password;
}

//Hér er aðferð sem breytir emailinu
public setEmail($useremail){

$email = $useremail;

}

//Hér er aðfeðr sem nær í emailið
public  getEmail(){
$em = $email;
}


}

?>