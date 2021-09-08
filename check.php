<?php
class superglobals
{
    private $_SERVER;
    private $_POST;
    private $_GET;
    private $_SESSION;

    public function __construct()
    {
        $this->define_superglobals();
    }
    /**
     * Returns a key from the superglobal,
     * as it was at the time of instantiation.
     *
     * @param $key
     * @return mixed
     */
    public function get_SERVER($key = null)
    {
        if (null !== $key) {
            return (isset($this->_SERVER["$key"])) ? $this->_SERVER["$key"] : null;
        } else {
            return $this->_SERVER;
        }
    }
    /**
     * Returns a key from the superglobal,
     * as it was at the time of instantiation.
     *
     * @param $key
     * @return mixed
     */
    public function get_POST($key = null)
    {
        if (null !== $key) {
            return (isset($this->_POST["$key"])) ? $this->_POST["$key"] : null;
        } else {
            return $this->_POST;
        }
    }
    /**
     * Returns a key from the superglobal,
     * as it was at the time of instantiation.
     *
     * @param $key
     * @return mixed
     */
    public function get_GET($key = null)
    {
        if (null !== $key) {
            return (isset($this->_GET["$key"])) ? $this->_GET["$key"] : null;
        } else {
            return $this->_GET;
        }
    }
    /**
     * Returns a key from the superglobal,
     * as it was at the time of instantiation.
     *
     * @param $key
     * @return mixed
     */
    public function get_SESSION($key = null)
    {
        if (null !== $key) {
            return (isset($this->_SESSION["$key"])) ? $this->_SESSION["$key"] : null;
        } else {
            return $this->_SESSION;
        }
    }
    /**
     * Function to define superglobals for use locally.
     * We do not automatically unset the superglobals after
     * defining them, since they might be used by other code.
     *
     * @return mixed
     */
    private function define_superglobals()
    {

        // Store a local copy of the PHP superglobals
        // This should avoid dealing with the global scope directly
        // $this->_SERVER = $_SERVER;
        $this->_SERVER = (isset($_SERVER)) ? $_SERVER : null;
        $this->_POST = (isset($_POST)) ? $_POST : null;
        $this->_GET = (isset($_GET)) ? $_GET : null;
        $this->_SESSION = (isset($_SESSION)) ? $_SESSION : null;

    }
    /**
     * You may call this function from your compositioning root,
     * if you are sure superglobals will not be needed by
     * dependencies or outside of your own code.
     *
     * @return void
     */
    public function unset_superglobals()
    {
        unset($_SERVER);
        unset($_POST);
        unset($_GET);
        unset($_SESSION);
    }

}
 session_start();
include "config/config.php";
if(isset($_POST['username']) ){
    
    $username =filter_input(INPUT_POST, 'username');
    $password =filter_input(INPUT_POST, 'password');

        $sql="SELECT * FROM admin_users WHERE username='$username' AND password='$password'  ";
        $result=mysqli_query($conn,$sql);
        if( mysqli_num_rows($result)==1){
            $row=mysqli_fetch_assoc($result);
            
            if($row["username"]==filter_input(INPUT_POST, 'username') && $row["password"]==filter_input(INPUT_POST, 'password'))
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
    die();
}
?>
