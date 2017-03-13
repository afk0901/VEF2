<!DOCTYPE html>
<html>
<head>
<title>animals</title>
</head>

<body>

<?php

$imgname = $_POST['imgname'];
$imgurl = $_POST['imgurl'];

//Tekur myndir.json setur skránna í streng.
$contents = file_get_contents('myndir.json');

//Prófa pizzadata
$pizzadata = file_get_contents('pizza.json');

$pizzadata_decoded = json_decode($pizzadata, true);


//Tek svo strenginn og set það í array eftir því hvernig json skráin er uppbyggð.
$contents_decoded = json_decode($contents, true);

//print_r($contents_decoded);
print_r($pizzadata_decoded);

foreach ($contents_decoded as $key => $value) {
	
	echo '<h1>'.$key.'</h1><img src="'.$value.'">';

}


//Bæti við mynd í json.
if(isset($imgname) && isset($imgurl)){

	//Bæti inn nýrri json mynd, s.s. bæti associative arrayinu $imgname sem er imgurl í arrayið.
$contents_decoded[$imgname] = $imgurl;


}

//Tek arrayið og uppfæri json skránna þannig s.s. núna er json skráin orðin að þessu arrayi.
$contents = json_encode($contents_decoded);

file_put_contents('myndir.json', $contents);


print("\n\r".$contents);

?>

<form action="" method="POST">

<h1>Add Your Image!</h1>

<label>
Name:
<input type="text" name="imgname"/>
</label>

<label>
Link:
<input type="text" name="imgurl"/>

</label>

<button name = "addimg">Add an image!</button>

</form>

</body>

</html>