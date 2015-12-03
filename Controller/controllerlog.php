<?php

include './Model/modellog.php'; 
$modellog = new modellog; 



session_start();
function user_login ($username, $password) { 
$username = mysql_real_escape_string($username); 
$password = md5($password);
$modellog->get("SELECT * FROM goshopping_users WHERE username = '".$username."' AND password = '".$password."' LIMIT 1"); 

$row = mysql_fetch_object($result);
if (count($row)<=0 ){ 
      echo "Incorrect username/password"; 
    }
  else { 
 
    $_SESSION['username'] = $row->id;
	var_dump($_SESSION['username']);
	if($password==md5('1111'))
            echo 'admin';
	//header("Location:http://localhost:8080/hhh/goshopping/new_type.php");
  }
	



if(isset($_POST['action']))
{
    if($_POST['action']=='login'){
        if(isset($_POST['username']) && isset($_POST['password'])){ 
        user_login($_POST['username'], $_POST['password']); 
    }
    }
}
}





// if(isset($_POST['action'])) { 
//      
//     if($_POST['action'] == 'login') { 
//        $username = $modellog->escape($_POST['username']);  
//        $password = $modellog->escape($_POST['password']);  
//         $password = MD5($password); 
//          
//        $response = $modellog->getRow(" 
//             SELECT * FROM goshopping_users  
//            WHERE 
//                `username`='$username'
//                AND `password`='$password'
//        "); 
//           
//         if($response == false) { 
//            $message = 'Invalid Username or Password'; 
//            $view = './View/viewlog.php'; 
//            return include $view; 
//        } else { 
//            // do something 
//        } 
//    } 
//      
//     
//    if($_POST['action'] == 'something') { 
//       // do something 
//    } 
//



?>
