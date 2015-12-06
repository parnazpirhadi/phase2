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
      public function user_login ($username, $password) { 
        $username = mysql_real_escape_string($username); 
        $password = md5($password);
        $result = mysql_query("SELECT * FROM goshopping_users WHERE username = '".$username."' AND password = '".$password."' LIMIT 1"); 

        $row = mysql_fetch_object($result);
        
        ?> <pre>
                <?php                    
                var_dump($row); 
                var_dump(count($row));?>


        </pre>
        <?php
        
        if (!($row->id>0) ){ 
              echo "Incorrect username/password"; 
            }
          else { 
            $_SESSION['user_id'] = $row->id;
                var_dump($_SESSION['user_id']);
                
          }
  }
       public function escape($str) {   
      return mysql_real_escape_string($str); 
   }
  }

?>