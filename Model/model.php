<?php

Class myModel {
     public function __construct() {    
   mysql_connect("localhost", "root", "");
   mysql_select_db("goshopping_db"); 
    }   
        public function insert($sql) {  
      $query = mysql_query($sql);  
      }    
       public function escape($str) {   
      return mysql_real_escape_string($str);  
   }
  }

?>
