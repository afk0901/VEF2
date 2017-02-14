<?php
namespace mvc;

class model { 
    protected $books = array(["Harry Potter","B&G","2007"],["Henny Penny","Friesandheck","1950"]);
    protected $booknames = [];
    protected $aboutbook = [];

    
     //Hérna er Model smiðurinn

    public function __construct()

    {
    }

    //Býr til bókarlistann okkar og skilar honum út í annað array sem view sér síðan um að birta.
    public function getmybooklist(){


    foreach ($this->books as $book) {
        
        $this->booknames[] = $book[0];

    }

    return $this->booknames;

        
    }

    //Skilar út öllu um bókina
    public function getmybookdescr($selectedtitle){
        
        foreach ($this->books as $book) {
            
            
            if($selectedtitle == $book[0]){

                foreach ($book as $partdescr) {
                    
                    $this->aboutbook[] = $partdescr;

                }

            }


        }
       
        if($aboutbook == null || $aboutbook == ''){
            $aboutbook[] = "Book description not found!";

        }

        return $this->aboutbook;

    }
       
} 

?>