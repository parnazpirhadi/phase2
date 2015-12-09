<?php

Class modelinsert {
     public function __construct() {    
        mysql_connect("localhost", "root", "");
        mysql_select_db("goshopping_db"); 

    }   
        public function get_catagories() {  
            mysql_query("set names 'utf8'");
           $result = mysql_query("SELECT * FROM goshopping_categories");     

           while($row = mysql_fetch_assoc($result)){
           $rows[] = $row;
           
         }  
         return $rows;
      }    
     
       public function escape($str) {   
      return mysql_real_escape_string($str);  
   }
  }
