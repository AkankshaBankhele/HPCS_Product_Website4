<?php session_start();

if(isset($_SESSION['id']) && isset($_SESSION['username'])){
}
else{
    
    header("Location: ../login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HPCS Product Management Website</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  >
    <link rel="stylesheet" href="admin/style.css">
    <link rel="icon" type="iamge/x-icon" href="image/logo.png" />
   
</head>
<style>
    body{
        background-color: white;
    }

    </style>
<body>

<?php

require_once("./html/header.html");
require_once("./html/sidenavbar.html");
?>

<div class="main">
    
</div>

<script>
    $(".dashboard").addClass("active");
</script>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
</html>
