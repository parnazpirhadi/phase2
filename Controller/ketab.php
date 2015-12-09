<?php

class ketab{
     public function __construct()
     {
          require 'model/ketab.php';
          $modelketab = new modelketab;
          
          $books = $modelketab->get_books();
         
        
        
        
        
       // $book_list=//....  
        require 'view/ketab.php';
     }
    
}
