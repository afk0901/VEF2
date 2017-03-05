<?php

//Þetta er klasinn bookcontroller - Hann sér um hlutina sem á að gerast þegar ýtt er á update takann og í byrjun. 
//Hann er tengiliður á milli view og controller ef það þarf.
namespace Mini\Controller;

use Mini\Model\book;

class bookcontroller
{
 
    public function index()
    {
        
        $book = new book();
        
        $books = $book->getbooks();

        require APP . 'view/_templates/header.php';
        require APP . 'view/songs/index.php';
        require APP . 'view/_templates/footer.php';
    }

  
    public function selectbook(){



        if (isset($_POST["more"])) {
            $book = new book();

            $info = $book->moreinfo($_POST['selected']);
            
        require APP . 'view/_templates/header.php';
        require APP . 'view/songs/update.php';
        require APP . 'view/_templates/footer.php';

        

    }
}
    

    public function update(){

    if(isset($_POST['update'])) {
    

        $book = new book();
        
       
        $book->update($_POST['oldname'],$_POST['name'], $_POST['publisher'], $_POST['year'], $_POST['description']);
        
         header('location: ' . URL . 'songs/index');
         
        require APP . 'view/_templates/header.php';
        require APP . 'view/songs/update.php';
        require APP . 'view/_templates/footer.php';

       



    }

}



}
