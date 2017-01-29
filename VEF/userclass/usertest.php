<?php
require './user.php';
$userandpass = ['email'=>'Your email','password'=>'Your password']; 

$user = new User($userandpass);

echo "Your email: " . $user->getEmail();;
echo "Your password:" . $user->getPassword();

$user->setEmail('a@hulahull.com');
$user->setPassword('12345');

echo "\n\r";
echo "Your new email: ". $user->getEmail();
echo "\n\r";
echo "Your new password: ".$user->getPassword();

?>