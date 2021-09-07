
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>HPCS Product Management Website</title>
     <link rel="stylesheet" href="./css/bootstrap.min.css"  >  
     <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
  
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <link rel="icon" type="iamge/x-icon" href="images/logo.png" />
</head>

<style>
  .loginform
{
    margin-top: 100px;
    background: white;
    /* padding: 31px 42px 1px; */
    padding-left: 53px;
    padding-top: 8px;
    padding-bottom: 8px;
    padding-right: 53px;
    border-radius: 10px;
    width: 50%;
    /* height: 302px; */
    position: relative;
    left: 25%;
    box-shadow: 5px 10px 18px #888888;
    color: #2ab4ec;
}
.button{
  background-color:#2ab4ec;
  color: white;
  padding:8px;
  border-radius: 4px;
  box-shadow: none;
  border: none;
}
.button:hover {
  background-color: #198dbc;
  color: white;
}

@media (max-width: 500px) and (min-width: 0px){
    .loginform{
      left: 0px ! important;
      width: 100% ! important;
    }
    .button{
      padding:10px;
    }
  }

</style>

<body>
 <?php

  require_once("./html/header.html");

 ?>


<div class="container">
  <div class="loginform">
    <center><h2><b>Login</b></h2></center><br>
    <form class="form-horizontal" id="myform" >
    <div class="form-group">
      <label  for="email">Username</label><br>
      <div >
        <input type="name" class="form-control" id="name" placeholder="Enter username"  required>
      </div>
    </div>
   
    <div class="form-group">
      <label for="pwd">Password</label><br>
      <div >          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="">
        <center><button type="submit" class="button"><i class="fa fa-check"></i>&nbsp;Submit&nbsp;</button></center>
      </div>
      
    </div>
  </form>
</div>

 <!-- Modal -->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">HPCS Product Website</h4>
        </div>
        <div class="modal-body">
          <p style="color:red;">Invalid username and/or password!</p>
        </div>
      </div>
      
    </div>
  </div>

</div>
<script>

   $("form").submit(function(e){
      e.preventDefault();
      var username = $("#name").val();
      var password = $("#pwd").val();
         

      $.post( "check.php", { username, password})
      .done(function( data ) {
        console.log($.trim(data));
        if($.trim(data)=="2"){
          console.log("0");
          $("#myModal").modal();
        }else if($.trim(data)=="1"){
          console.log("77");
           window.location.href = 'admin/home.php';
           
       
          
        }
        else if($.trim(data)=="3"){
          console.log("1");
          window.location.href = 'user/home.php';
          
         
        }
        
      });

    });
module.exports = {
  "extends": "standard"
};
</script>
</body>
</html>