
<table>

<tr>
    <th>Gjaldmiðill</th>
    <th>Kaup</th> 
    <th>Sala</th>
    <th>Breyting</th>
  </tr>

<?php

$currency_frm_arion = file_get_contents('http://apis.is/currency/arion');
$json_array = json_decode($currency_frm_arion,true);

$currencies = $json_array['results'];


foreach ($currencies as $key => $value) {

	    echo "<tr>";
         
         echo "<td>".$value['shortName']."</td>";

         echo "<td>".$value['bidValue']."</td>";

         echo "<td>".$value['askValue']."</td>";

         echo "<td>".round($value['changeCur'],2)."</td>";

         echo "</tr>";


	}


?>
</table>