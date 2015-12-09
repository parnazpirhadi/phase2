<?php

class insert{
   
    public function __construct(){
        
          require 'model/insert.php';
          $modelinsert = new modelinsert;
          
          $cats = $modelinsert->get_catagories();
//          foreach($cats as $cat) {
//              echo $cat['category_name'] . '<br/>';
//          }
            
          
          
          //var_dump();
          
          
           if (!empty($_POST)) {
               die(asas);
           }
          
          
        
        
        
        
            require 'view/insert.php';
    }
}