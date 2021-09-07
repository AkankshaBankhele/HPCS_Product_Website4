<?php
 session_start();
include "config/config.php";
if(isset($_POST['username']) ){
    
    $username =filter_input(INPUT_POST, 'username');
    $password =filter_input(INPUT_POST, 'password');

        $sql="SELECT * FROM admin_users WHERE username='$username' AND password='$password'  ";
        $result=mysqli_query($conn,$sql);
        if( mysqli_num_rows($result)==1){
            $row=mysqli_fetch_assoc($result);
            
            if($row["username"]==$_POST["username"] && $row["password"]==$_POST["password"])
            {
             
                $_SESSION['id']=$row['id'];
                $_SESSION['username']=$row['username'];
                
                if($row['username']=="admin"){
                    $_SESSION['name']="admin";
                   
                    print_r("1") ;
                    
                }else{
                    $_SESSION['name']="user";
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
    exit();
}
?>
