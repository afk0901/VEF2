<!--View fyrir update, þegar ýtt er á more takann þá er boðið upp á möguleika á að uppfæra gögnin-->

     <form action="<?php echo URL; ?>songs/update" method="POST">;

    <?php
    
    if(isset($_POST['more'])){

   foreach ($info as $i) {

    echo "<input type = 'text' name = 'oldname' value = '$i->name'>";

    echo "<input type='text' name = 'name' value = '$i->name'>";

    echo "<input type='text' name = 'publisher' value='$i->publisher'>";

    echo "<input type='text' name = 'year' value='$i->year'>Year: "; 
  
    echo '<textarea name = "description" rows="10" cols="50">'.$i->description.'</textarea>';


   echo '<input type="submit" name = "update" value = "Update info"/></form>';
}


}



?>