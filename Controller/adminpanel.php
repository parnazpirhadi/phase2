<?php



class adminpanel{
    public function __construct() {
        require 'model/adminpanel.php';
        $adminpanel= new modeladminpanel;
        session_start();
        
        $id= $_SESSION['user_id'];
        
        $user_loged_in = $adminpanel->get_user_info($id);
        
        
        
        
        
        
        
        
        require 'view/adminpanel.php';
        
    }
}


