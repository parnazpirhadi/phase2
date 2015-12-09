<?php
 class modelketab{
     
 public function __construct()
 {
      mysql_connect("localhost", "root", "");
      mysql_select_db("goshopping_db"); 
 }
 public function get_books()
 {
     //$result = mysql_query("SELECT * FROM goshopping_items,goshopping_categories WHERE goshopping_items.catagory_id=goshopping_categories.id AND goshopping_categories.title=books");     
     mysql_query("set names 'utf8'");
     $result = mysql_query("SELECT * FROM goshopping_items where catagory_id='4'");     
     
     while($row = mysql_fetch_assoc($result)){
     $rows[] = $row;
}
     
     
     
     return $rows;
     
     
      }
         

}
 
