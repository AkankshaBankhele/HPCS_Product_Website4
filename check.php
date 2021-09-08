<?php
class SessionObject
{
    public $vars;

    public function __construct() {
        $this->vars = &$_SESSION; //this will still trigger a phpmd warning
    }
}

$session = new SessionObject();

 session_start();
include "config/config.php";

if((filter_input(INPUT_POST, 'username')) ){
  
    $username =filter_input(INPUT_POST, 'username');
    $password =filter_input(INPUT_POST, 'password');

        $sql="SELECT * FROM admin_users WHERE username='$username' AND password='$password'  ";
        $result=mysqli_query($conn,$sql);
        if( mysqli_num_rows($result)==1){
            $row=mysqli_fetch_assoc($result);
            
            if($row["username"]==filter_input(INPUT_POST, 'username') && $row["password"]==filter_input(INPUT_POST, 'password'))
            {
             
               $session->vars['id'] =$row['id'];
               $session = new SessionObject();
                $session->vars['username']=$row['username'];
                
                if($row['username']=="admin"){
                    $session = new SessionObject();
                    $session->vars['name']="admin";
                   
                    print_r("1") ;
                    
                }else{
                    $session = new SessionObject();
                 $session->vars['name']="user";
                     print_r( "3");
                }
                
               

                
            }
            else{
                 print_r( "2");
            }
        }
            else{
                 print_r( "2");

            }
    

}
else{
     header("Location: http://localhost/form/admin/login.php");
    // die();
}
?>
