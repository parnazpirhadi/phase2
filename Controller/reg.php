<?php

class reg{
   
    public function __construct(){
        
        
        include './Model/reg.php'; 
        $modelreg = new modelreg; 
    if(isset($_POST['action']))
    {

        if($_POST['action']=='register'){
       
    mysql_query("INSERT INTO goshopping_users(id,firstname,lastname,username,password,email,address,mobile,gender) VALUES('','admin','admin','admin',md5('$admin_password'),'admin','admin','admin','admin')") or die (mysql_error());

    if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['username'])&& isset($_POST['password'])&& isset($_POST['email'])&& isset($_POST['mobile'])&& isset($_POST['gender'])){ 

            $firstname = mysql_real_escape_string($_POST['firstname']); 
            $lastname = mysql_real_escape_string($_POST['lastname']);
            $username = mysql_real_escape_string($_POST['username']); 
            $password = md5($_POST['password']); 
            $email = mysql_real_escape_string($_POST['email']);
            $address = mysql_real_escape_string($_POST['address']);
            $mobile = mysql_real_escape_string($_POST['mobile']);
            $gender = mysql_real_escape_string($_POST['gender']);
            $modelreg->insert("INSERT INTO goshopping_users
                (id,firstname,lastname,username,password,email,address,mobile,gender) 
                VALUES('','$firstname','$lastname','$username','$password','$email','$address','$mobile','$gender')") ;
            
    }
        }

    }
    require 'view/reg.php';
    }

    
    }
   
