<?php
 session_start();
include "config/config.php";
if(isset($_POST['username']) ){
    
    $username =$_POST['username'];
    $password =$_POST['password'];

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
                   
                    echo "1";
                    
                }else{
                    $_SESSION['name']="user";
                    echo "3";
                }
                
               

                
            }
            else{
                echo "2";
            }
        }
            else{
                echo "2";

            }
    

}
else{
     header("Location: http://localhost/form/admin/login.php");
    exit();
}
?>