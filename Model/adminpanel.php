<?php

Class modeladminpanel {
     public function __construct() {    
        mysql_connect("localhost", "root", "");
        mysql_select_db("goshopping_db"); 
   
    }   
    public function get_user_info($id) {  
        $query = mysql_query("SELECT * FROM goshopping_users WHERE id = '".$id."'");  
        $row = mysql_fetch_object($query);
        return $row;
    }    
     
    public function escape($str) {   
      return mysql_real_escape_string($str);  
    }    
}


