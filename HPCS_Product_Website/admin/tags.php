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
.main{
    margin-left: 220px;
    padding-top: 50px;
    width: 50%;
    position: absolute;
    left: 170px;
}
  .d1:hover{
      color:red;
    }
      .c2{
    color: green !important;
    position: absolute;
    left: 488px;
    /* top: 5px; */
    /* margin-left: 52px; */
    margin-top: 10px;
    }
    .k{
       color: green !important;
      margin-left: 45px;
      display:none;
    }
    </style>
<body>

<?php

require_once("./html/header.html");
require_once("./html/sidenavbar.html");
?>

<div class="main">
  <form action="" method="post" name="form" style="margin-top:5px;">  
            <input type="text" name="plat" id="tag_name" style="padding:5px;">&nbsp;&nbsp;
            <button type="button" class="btn btn-primary add">+ Add</button><br><br>
        </form>
    <div class="table-responsive">  
    <!-- <form action="" method="post" name="form">   -->

        <table id="viewtable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th><center>Sl. No.<center></th>
                <th><center>Tag Name<center></th>
                <th><center>Actions<center></th>
                                                                    
            </tr>
        </thead>
        <?php
            include "../config/config.php";
            
        $sqlQuery = "SELECT * FROM tag";
              $resultSet = mysqli_query($conn, $sqlQuery) ;
    ?>
        <tbody>
            <?php 
            $i =0;
            while( $row = mysqli_fetch_assoc($resultSet) ) { $i++; ?>
               <tr>
                 <td class="sl"><?php print_r( $i );?></td>
                 <td contenteditable style="cursor:text;" class="tag_name up"><span style="display:none;"><?php print_r( $row['tag_id']);?></span><text><?php print_r( $row ['tag_name']); ?></text><span class="fa fa-check c2"></span></td>
                 <td><span style="display:none;"><?php print_r( $row['tag_id']); ?></span><button type="button" class="btn  delete" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash d1" aria-hidden="true" title="Delete"></i></button></td>
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
        <p>Are you sure to delete this tag?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>&nbsp;No</button>&nbsp;&nbsp;
        <button type="button" class="btn btn-success yes" data-dismiss="modal"><i class="fa fa-check"></i>&nbsp;Yes</button>
      </div>
    </div>

  </div>
</div>

<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style="position: absolute;right: 13px;top: 8px;">&times;</button>
        <h4 class="modal-title">HPCS Product Website</h4>
      </div>
      <div class="modal-body">
        <p>Updated successfully</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>&nbsp;Close</button>&nbsp;&nbsp;
      </div>
    </div>

  </div>
</div>
<script>

    $(".c2").hide(); 
    $(".tags").addClass("active");


    $(".add").click(function(){
   
     
   var tag_name = $("#tag_name").val();
     console.log("tag_name", tag_name);
     var flag=1;
      var table = document.getElementById("viewtable");
     for(var i = 1; i < table.rows.length; i++)
            {
              var x = document.getElementById("viewtable").rows[i].cells[1].innerText;
              console.log("x",x);
              if(tag_name==x)
              {
                flag=0;
                break;
              }
              else{
                flag=1;
              }
            }
     if(tag_name=="" || tag_name==null || flag==0){
         $("#tag_name").css("border","1px solid red");
        

     }else{

         $.post('inserttag.php',{
            tag_name
         },function(data){
             console.log("data", data);
         
         $("#tag_name").css("border","1px solid grey");
         $('#viewtable').append('<tr><td class="sl">2</td><td contenteditable style="cursor:text;" class="tag_name up"><span style="display:none;">'+$.trim(data)+'</span><text>'+tag_name+'</text><span class="fa fa-check c2"></span></td><td><span style="display:none;">'+$.trim(data)+'</span><button type="button" class="btn  delete" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash d1" aria-hidden="true" title="Delete"></i></button></td></tr>');
          $(".c2").hide(); 
                 var i = 0;
                 $("tr").each(function(){
                 
                     $(this).children(".sl").text(i);
                     i++;
                 });

             });
         
     }

 });


    var thi ="";

        $("body").delegate(".delete", "click", function(){
          console.log("calle44d");
        
        thi = this;
            
            
    });

    $("body").delegate(".yes", "click", function(){
               
        var tag_id = $(thi).siblings("span").text();

        console.log("tag_id", tag_id);


        $.post('actiontag.php',{
            tag_id,
            action: "delete"
            },function(data){
                $(thi).parent("td").parent("tr").remove();
                                var i = 0;
                    $("tr").each(function(){
                    
                        $(this).children(".sl").text(i);
                        i++;
                    });
            });
            
            
            
        });
     
    
                 $("body").delegate(".up", "focusout", function(){
                   var flag=1;
                   console.log("called");
            var tag_id =$(this).closest("tr").find("span").eq(0).text();
            var tag_name = $(this).closest("tr").find("text").eq(0).text();
          
                 console.log("tag_id",tag_id);
                 console.log("tag_name",tag_name);
           if(tag_name =="" || tag_name ==null){
           
           }else{
            $.post('actiontag.php',{
                tag_id,
                tag_name,
                action: "update"
                },function(data){
                  
                });
                // $(".c2").show(); 
                // $(this).siblings("span").fadeIn(1500);
                // $(this).siblings("span").fadeOut(1500);
                // $(this).closest("td").css("border","initial ");
                 $(this).closest("tr").find("span").eq(1).fadeIn(1500);
                 $(this).closest("tr").find("span").eq(1).fadeOut(1500);   
         }
             
                
            });
      
 
</script>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
</html>
