<?php
session_start();
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
.main1{
    margin-left: 0px;
    padding-top: 50px;
    width: 100%;
    position: absolute;
    left: 301px;
}
table {border-collapse:collapse;  }
       table td {border:solid #514d4d 0.5px; word-wrap:break-word;}

       tr:hover {background-color: #2ab4ec !important;}
       .odd{
           background-color:rgb(0 0 0 / 5%) !important;
       }
       .tname{
          white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  
       }
    </style>
<body>

<?php

require_once("./html/header.html");
require_once("./html/sidenavbar.html");
?>

<div class="main1">
    <div class="table-responsive">  
    <!-- <form action="" method="post" name="form">   -->

        <table id="example" >
        <thead>
            <tr>
                  <th><center>Sl. No.</center></th>
                  <th>Product Name</th>
                  <th>Trading Platform</th>
                  <th>Category</th>
                  <th>Validity</th>
                  <th>Price</th>
                  <th>Currency</th>
                  <th>Discount</th>
                  <th>Link for Product Blog</th>
                  <th>Link for Product Video</th>
                  <th>Link for Product On MQL</th>
                  <th>Description</th>
                  <th>Description of Input</th>
                  <th>Tags</th>
                 <th>Image</th>
                  <th>Installation Guide</th>
                  <th>User Guide</th>
                  <th>Product File</th>
                  <th>Action</th>
                                                                    
            </tr>
        </thead>
        <?php
            include "../config/config.php";
            
        $sqlQuery = "SELECT * FROM product";
              $resultSet = mysqli_query($conn, $sqlQuery) ;
    ?>
        <tbody>
            <?php 
            $i =0;
            while( $row = mysqli_fetch_assoc($resultSet) ) { $i++; ?>
               <tr id="<?php  print_r($row ['sl']); ?>">
                 <td class="sl1"><?php  print_r( $i); ?></td>
                 <td contenteditable style="cursor:text;" class="tag_name"><?php print_r($row ['name']); ?></td>
                 <td contenteditable style="cursor:text;" class="tag_name"><?php print_r( $row ['Platform']); ?></td>
                 <td contenteditable style="cursor:text;" class="tag_name"><?php print_r( $row ['category']); ?></td>
                 <td contenteditable style="cursor:text;" class="tag_name"><?php print_r( $row ['validity']); ?></td>
                 <td contenteditable style="cursor:text;" class="tag_name"><?php print_r( $row ['cost']); ?></td>
                 <td contenteditable style="cursor:text;" class="tag_name"><?php print_r( $row ['currency']); ?></td>
                 <td contenteditable style="cursor:text;" class="tag_name"><?php print_r( $row ['discount']); ?></td>
                 <td contenteditable style="cursor:text;" class="tag_name"><?php print_r( $row ['link_blog']); ?></td>
                 <td contenteditable style="cursor:text;" class="tag_name"><?php print_r( $row ['link_video']); ?></td>
                 <td contenteditable style="cursor:text;" class="tag_name"><?php print_r( $row ['link_mql5']); ?></td>
                 <td contenteditable style="cursor:text;" class="tag_name"><?php print_r( $row ['description']); ?></td>
                 <td contenteditable style="cursor:text;" class="tag_name"><?php print_r( $row ['input_description']); ?></td>
                 <td contenteditable style="cursor:text;" class="tag_name"><?php print_r( $row ['tags']); ?></td>
                 <td contenteditable style="cursor:text;" class="tag_name"><?php print_r( $row ['image']); ?></td>
                 <td contenteditable style="cursor:text;" class="tag_name"><?php print_r( $row ['installation_guide']); ?></td>
                 <td contenteditable style="cursor:text;" class="tag_name"><?php print_r( $row ['userguide']); ?></td>
                 <td contenteditable style="cursor:text;" class="tag_name"><?php print_r( $row ['productfile']); ?></td>
                 <td><span style="display:none;"><?php print_r( $row['sl']); ?></span><button type="button" class="btn btn-light delete" data-toggle="modal" style="color:red;"data-target="#myModal"><i class="fa fa-trash" aria-hidden="true" title="Delete"></i></button></td>
               </tr>
            <?php } ?>
        </tbody>
    </table>
  
   </div>
</div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style="position: absolute;right: 13px;top: 8px;">&times;</button>
        <h4 class="modal-title">HPCS Product Website</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure to delete this product?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>&nbsp;No</button>&nbsp;&nbsp;
        <button type="button" class="btn btn-success yes" data-dismiss="modal"><i class="fa fa-check"></i>&nbsp;Yes</button>
      </div>
    </div>

  </div>
</div>


  </div>
</div>
<script>
    $(document).ready( function () {
    $("body").delegate(".new", "click", function(){
   var text = document.getElementById(this); 
  console.log(text,"text");
  if (text.style.display === "none") {
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
         
 });
 } );
$(document).ready( function () {
    $('#example').DataTable();
  } );
        var thi ="";

        $("body").delegate(".delete", "click", function(){

        
        thi = this;
            
            
    });

    $("body").delegate(".yes", "click", function(){
               
        var sl = $(thi).siblings("span").text();

        console.log("sl here ", sl);


        $.post('actionproduct.php',{
            sl,
            action: "delete"
            },function(data){
              
                $(thi).parent("td").parent("tr").remove();
            });
            
            
            
        });
    </script>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>

</html>
