<?php


class log{
    public function __construct() {
        
        include './Model/log.php'; 
        $modellog = new modellog; 



        session_start();

        if(isset($_POST['action']))
        {
            if($_POST['action']=='login'){
                if(isset($_POST['username']) && isset($_POST['password'])){ 
                $modellog->user_login($_POST['username'], $_POST['password']); 
                
                
                
                }
            }
        }
        
        require 'view/log.php';
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
