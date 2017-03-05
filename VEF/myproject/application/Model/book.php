<?php

/**
 * Class Songs
 * This is a demo Model class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace Mini\Model;

use Mini\Core\Model;

class book extends Model
{
    /**
     * Get all songs from database
     */
    public function getbooks()
    {
        $sql = "SELECT * FROM books";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }


    public function moreinfo($name){
        $sql = "SELECT * FROM books where name = '$name'";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

   

    public function update($oldname,$name, $publisher, $year, $description){

       
        
       $sql = "UPDATE books SET name = '$name' ,publisher = '$publisher', 
       year = '$year', description =  '$description' WHERE name = '$oldname'";

       $query = $this->db->prepare($sql);
       $query->execute();

    }
}

