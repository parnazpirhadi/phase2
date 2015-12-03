<?php

Class modellog {
     public function __construct() {    
   mysql_connect("localhost", "root", "");
   mysql_select_db("goshopping_db"); 
   
    }   
      public function getRow($sql) {   
      $query = mysql_query($sql);  
       return mysql_fetch_assoc($query);
      }    
       public function escape($str) {   
      return mysql_real_escape_string($str); 
   }
  }

?>