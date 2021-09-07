<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['username'])){
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HPCS Product Management Website</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
      
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  >
        <link rel="stylesheet" href="admin/style.css">
        <link rel="icon" type="iamge/x-icon" href="image/logo.png" />
       
    </head>
    <style>
        body{
            background-color: white;
        }
    .main{
      margin-left:72px !important;
    }
        .cbtn {
    
            background-color: #2ab4ec;
            color: white;
            width: 65%;
            padding: 10px;
            position: relative;
            left: 20%;
            cursor: pointer;
        }
    
        .cdiv {
            border: 1px solid  #2ab4ec;
            /* height: 250px; */
            width: 65%;
            position: relative;
            left: 20%;
            cursor: pointer;
            padding: 5px;
            display: none;
            overflow-x: auto;
        }
        .cdiv1 {
            border: 1px solid  #2ab4ec;
            height: 250px;
            width: 65%;
            position: relative;
            left: 20%;
            cursor: pointer;
            padding: 5px;
            display: none;
            overflow-x: auto;
        }
        .plus1{
            position: absolute;
    top: 13px;
    right: 18px;
    font-size: 16px !important;
        }
    .c1{
              color: green !important;
    position: absolute;
    left: 603px;
    /* top: 5px; */
    margin-top: 10px;
    }
    .d1:hover{
      color:red;
    }
    .cbtn:hover{
      background-color:#04517d;
    }
        </style>
    <body>
    
    <?php
    
    require_once("./html/header.html");
   require_once("./html/sidenavbar.html");
    
    ?>
    
    <div class="main">
        <div class="cbtn">Trading Platform<span class="fa fa-plus plus1"></span></div>
        <div class="cdiv">
        <form action="" method="post" name="form" style="margin-top:5px;">  
            <input type="text" name="plat" id="plt_name" style="padding:5px;">&nbsp;&nbsp;
            <button type="button" class="btn btn-primary add">+ Add</button><br><br>
        </form>
    <div class="table-responsive">  
    <!-- <form action="" method="post" name="form">   -->

        <table id="viewtable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th><center>Sl. No.</center></th>
                <th><center>Trading Platform</center></th>
                <th><center>Actions</center></th>
                                                                    
            </tr>
        </thead>
        <?php
            include "../config/config.php";
            
        $sqlQuery = "SELECT * FROM platform ";
    $resultSet = mysqli_query($conn, $sqlQuery) ;
    ?>
        <tbody>
            <?php 
            $i =0;
            while( $row = mysqli_fetch_assoc($resultSet) ) { $i++; ?>
            <tr>
                 <td class="sl"><?php echo $i; ?></td>
                 <td contenteditable style="cursor:text;" class="plt_name up"><span style="display:none;"><?php echo $row['plt_id'];?></span><text><?php echo $row ['plt_name']; ?></text><span class="fa fa-check c1"></span></td>
                 <td><span style="display:none;"><?php echo $row['plt_id']; ?></span><button type="button" class="btn  delete" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash d1" aria-hidden="true" title="Delete"></i></button></td>
               </tr>

            <?php } ?>
        </tbody>
    </table>
    <!-- <input type="submit" value="Insert" name="submit" />
</form> -->
</div></div><br><br>
        <div class="cbtn">Test1<span class="fa fa-plus plus1 "></span></div>
        <div class="cdiv1"></div><br><br>
        <div class="cbtn">Test2<span class="fa fa-plus plus1"></span></div>
        <div class="cdiv1"></div><br><br>
        <div class="cbtn">Test3<span class="fa fa-plus plus1"></span></div>
        <div class="cdiv1"></div><br><br>
        <div class="cbtn">Test4<span class="fa fa-plus plus1"></span></div>
        <div class="cdiv1"></div>
    
    </div>

    <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style="position: absolute;right: 13px;top: 8px;">&times;</button>
        <h4 class="modal-title">HPCS Product Website</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure to delete this platform?</p>
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
      $(".c1").hide(); 
        $(".settings").addClass("active");
         
    var check=0,check1=0;
        $(".cbtn").click(function(){
          if(check==0)
          {
            $(this).children('span').removeClass("fa fa-plus");
            $(this).children('span').addClass("fa fa-minus");
            
            check =1;
          }
          else{
             
            $(this).children('span').removeClass("fa fa-minus");
            $(this).children('span').addClass("fa fa-plus");
            check =0;

          }
          
           $(this).closest('div').next('.cdiv').slideToggle();
        
           var th =$(this).closest('i');
         });
           $(".cbtn").click(function(){
          if(check1==0)
          {
            $(this).children('span').removeClass("fa fa-plus");
            $(this).children('span').addClass("fa fa-minus");
            
            check1 =1;
          }
          else{
             
            $(this).children('span').removeClass("fa fa-minus");
            $(this).children('span').addClass("fa fa-plus");
            check1 =0;

          }
          
           $(this).closest('div').next('.cdiv1').slideToggle();
           var th =$(this).closest('i');
         });
    
    
 function addRow(tableID) { 

var table = document.getElementById(tableID);

var rowCount = table.rows.length;
var row = table.insertRow(rowCount);



var cell1 = row.insertCell(0);


var cell2 = row.insertCell(1);
//  cell2.innerHTML = "<input type='text'  name='plt_name' >";
var x = document.createElement("input");
  x.type="text";
//   x.setAttribute("value", "");
  x.name="plt_name";
 cell2.appendChild(x);

var cell3 = row.insertCell(2);
var element1 = document.createElement('BUTTON');
var text = document.createTextNode("Submit");
     
        element1.appendChild(text);
        cell3.appendChild(element1);


}


$(".add").click(function(){
   
     
      var plt_name = $("#plt_name").val();
        console.log("plt_name", plt_name);

        if(plt_name=="" || plt_name==null){
            $("#plt_name").css("border","1px solid red");

        }else{

            $.post('insertplatform.php',{
                plt_name
            },function(data){
                console.log("data", data);
            $("#plt_name").css("border","1px solid grey");
         $('#viewtable').append('<tr><td class="sl">2</td><td contenteditable style="cursor:text;" class="plt_name up"><span style="display:none;">'+$.trim(data)+'</span><text>'+plt_name+'</text><span class="fa fa-check c1"></span></td><td><span style="display:none;">'+$.trim(data)+'</span><button type="button" class="btn  delete" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash d1" aria-hidden="true" title="Delete"></i></button></td></tr>');
          $(".c1").hide(); 
                   
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

        
        thi = this;
            
            
    });

    $("body").delegate(".yes", "click", function(){

        
        
        var plt_id = $(thi).siblings("span").text();

        console.log("plt_id", plt_id);
        var table= 'viewtable';
        var row = $(this).closest('tr');
        var id = row.attr("sl");
        console.log("id",id);
        $.post('action.php',{
            plt_id,
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

        $("body").on("click",".del",function(event){
   event.preventDefault();
   
   alert("Deleting id #" + id);
   setTimeout(function() { // Simulating ajax
       var siblings = row.siblings();
       row.remove();
       siblings.each(function(index) {
         $(this).children().first().text(index);
       });
   }, 100);
});
        
       $("body").delegate(".up", "focusout", function(){
         console.log("called");
            var plt_id =$(this).closest("tr").find("span").eq(0).text();
            var plt_name = $(this).closest("tr").find("text").eq(0).text();
            // var plt_name = $(this).closest("tr").find("textarea").eq(0).text();
                 console.log("plt_id",plt_id);
           
           if(plt_name =="" || plt_name ==null){
           }else{
            $.post('action.php',{
                plt_id,
                plt_name,
                action: "update"
                },function(data){
                  
                });
                  $(this).closest("tr").find("span").eq(1).fadeIn(1500);
                 $(this).closest("tr").find("span").eq(1).fadeOut(1500);  
           }
             
                
            });



  //             $('.dropdown1').click(function () {
  //   if(pf==0){
  //     $('.dropdown-content1').show();
  //     $(".picon").addClass("fa-chevron-left");
  //     $(".picon").removeClass("fa-chevron-right");
  //     pf =1;  
  //   }else{
  //     $('.dropdown-content1').hide();
  //     $(".picon").addClass("fa-chevron-right");
  //     $(".picon").removeClass("fa-chevron-left");
  //     pf =0;  
  //   }
  // });

    
    
    </script>
   </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    </html>
    <?php
    }
     else{
        header("Location: ../login.php");
     }
    ?>