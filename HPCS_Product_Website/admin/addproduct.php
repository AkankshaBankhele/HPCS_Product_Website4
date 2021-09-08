<?php include "../config/config.php"?>
<?php

session_start();

if(!filter_var('id', FILTER_SANITIZE_STRING)===false && !filter_var('username', FILTER_SANITIZE_STRING)===false){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HPCS Product Management Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  >
       <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
        <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />
     <!-- <script type="text/javascript" src="jquery.autocomplete.js"></script> -->
     <link rel="stylesheet" type="text/css" href="style1.css" />
    <link rel="stylesheet" href="admin/style.css">
    <link rel="icon" type="iamge/x-icon" href="image/logo.png" />
   
</head>
<style>
    body{
        background-color: white;
    }
  
   .space{
     position:absolute;
     top:40px;
   } 
   .space1{
     position:absolute;
     top:60px;
   } 
.main{
    position: absolute;
    width: 50%;
    font-size:17px;
    text-decoration:none;
    left:190px;
}
.btn.disabled, .btn[disabled], fieldset[disabled] .btn {
    cursor: not-allowed;
    filter: alpha(opacity=65);
    opacity: .65;
    -webkit-box-shadow: none;
    box-shadow: slateblue;
    background-color: #e9ecef;
}

.selectt {

    border: 1px solid lightgrey !important;
    width: 100%;
    border-radius: 5px !important;
    padding: 8px !important;
}
.selectt2 {

border: 1px solid lightgrey !important;
width: 31.8%;
border-radius: 5px !important;
padding: 8px !important;
line-height: 1.42857143;
height: 34px;
padding: 6px 12px;
font-size: 14px;
z-index: 1;
}
.selectt3 {

border: 1px solid lightgrey !important;
width: 45.6%;
border-radius: 5px !important;
padding: 8px !important;
line-height: 1.42857143;
height: 34px;
padding: 6px 12px;
font-size: 14px;
z-index: 1;
}
.selectt1{
border: 1px solid lightgrey !important;
height:100%;
width: 100%;
border-radius: 5px !important;
padding: -3px !important;
z-index: 1;
}

.form-check-input[type=checkbox] {
    border-radius: .25em;
   margin-top:5px;
   margin-left:9px;
  
    top: 4px;
}
img{
  width: 10%;
    /* position: absolute; */
    /* top: 38px;
    left: 31px; */
    margin: 10px;
    z-index: 1;
}
.textarea1{
     position: absolute;
   width: 42.2%;
    left: 405px;
     background-color: #e9ecef;
     z-index: 1;
}
.textarea12{
    border: 1px solid lightgrey !important;
    border-radius: 5px !important;
    padding: 8px !important;
    line-height: 1.42857143;
    /* height: 100%; */
    padding: 6px 12px;
    font-size: 14px;
    /* position: relative; */
    width: 41%;
    /* left: 325px; */
    margin-left: 70px;
    z-index: 1;
}
.tag1{
    background: #2ab4ec;
    border-radius: 5px;
    padding: 0px 2px 0px 1px;
    /* margin-right: auto; */
    margin-right: 10px;
    margin-bottom: 10px;
    /* margin: auto; */
    display: inline-block;
    
}
.cross1{
  border: none;
    display: contents;
}
.form-check-input[type=checkbox]{
margin-right: 142px;
z-index: 1;
}
.text12{
  background: #2ab4ec;
    pointer-events: none;
    /* width: fit-content; */
    /* resize: none;
    overflow: hidden;
    word-break: break-word; */
 
    border: #2ab4ec;
    
    /* box-sizing: border-box;
  max-width: 50%; */
    height: 34px;
    /* white-space: pre-wrap; */
    background: center;
        padding-left: 8px;
        z-index: 1;

}
.tagborder{
border: 1px solid lightgrey !important;
    width: 72.1% !important;
    border-radius: 6px !important;
    padding: 9px !important;
    margin-left: 13px;
}

}
 .icon:hover {color: #e64b4b ;}
.frmSearch {border: 1px solid #a8d4b1;background-color: #c6f7d0;margin: 2px 0px;padding:40px;border-radius:4px;}
#tag-list{float:left;list-style:none;margin-top:-3px;padding:0;width:190px;position: absolute; z-index: 2; }
#tag-list li{    padding: 10px;
    width: 122%;
    background: #2ab4ec;
    border-bottom: white 1px solid;
    transform: translateY(1px);
    color: white;
}
#tag-list li:hover{background:#04517d;cursor: pointer;}
@media only screen and (max-width: 1500px){
 .textarea12{
   margin-left: 12%;
   width: 41%;
 }
  .tagborder{
   width: 70.6% !important;
 }
}
@media only screen and (max-width: 1000px){
 .textarea12{
   margin-left: 11.7%;
   width: 41%;
 }
}

@media only screen and (max-width: 650px){
 .textarea12{
   margin-left: 10.2%;
   width: 41%;
 }
}
@media only screen and (min-width: 1700px){
 .textarea12{
   margin-left: 12.5%;
   width: 41%;
 }
 /* .main{
   background-color:yellow;
 } */
}
@media only screen and (min-width:1500px){
 .tagborder{
   width:72% !important;
 }
}
@media only screen and (min-width:2500px){
 .textarea12{
   margin-left: 12.9%;
   width: 41%;
 }
 .tagborder{
   width:74% !important;
 }
}


   </style>
<body>

<?php

include_once("./html/header.html");
include_once("./html/sidenavbar.html");
?>
  <!-- <form action="" method="post" name="form" style="position: element(#texttag1); transform: translateY(-100%);">  
  <div class="input-wrapper">
            <input type="text" name="tag_name" id="tag_name" style="padding:3px; width:42%; margin-top:2px">&nbsp;&nbsp;
            <button type="button" class="btn btn-primary add">+ Add</button><br><br>  </div>
        </form> -->
      
<div class ="main">
    <form action="" method="post">
   
   <div class="form-group row">
   
<label for="inputPassword3" class="col-sm-3 col-form-label">Product Name </label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="name" name="name" autocomplete="off" placeholder="Enter product name" />
  </div>
</div> 


   <div class="form-group row">
<label for="inputPassword3" class="col-sm-3 col-form-label">Trading platform</label>
    <div class="col-sm-9">

    <select class="btn selectt" id="platform" required>
      <?php
      $a=mysqli_query($conn,"SELECT * FROM platform");
      while($row=mysqli_fetch_array($a))     {
        ?>
          <option ><?php print_r( $row["plt_name"]);?></option>
        <?php
      }
       ?>
             </select>
  </div>
</div>



   <div class="form-group row">
<label for="inputPassword3" class="col-sm-3 col-form-label">Category</label>
    <div class="col-sm-9">
    <select class="btn selectt" id="category" required>
                  <!-- <option selected>Choose...</option> -->
                  <option value="Expert Advisor">Expert Advisor</option>
                  <option value="Indicator">Indicator</option>
                  <option value="Script">Script</option>
             </select>
  </div>
</div>

   <div class="form-group row">
<label for="inputPassword3" class="col-sm-3 col-form-label">Validity</label>
    <div class="col-sm-9">
    <select class="btn selectt" id="validity" required>
      <?php
      $a=mysqli_query($conn,"SELECT `validity` FROM validity_price");
      while($row=mysqli_fetch_array($a))     {
        ?>
          <option ><?php print_r( $row["validity"]);?></option>
        <?php
      }
       ?>
             </select>
  </div>
</div>

<div class="form-group row">
    <label for="inputPassword3" class="col-sm-3 col-form-label">Price</label>
    <div class="col-sm-9">
      <!-- <input type="text" class=" selectt3" name="price" id="price" placeholder="Enter the price" > -->
          <select class="btn selectt3" id="price" name="price" required>
      <?php
      $a=mysqli_query($conn,"SELECT `price` FROM validity_price");
      while($row=mysqli_fetch_array($a))     {
        ?>
          <option ><?php print_r( $row["price"]);?></option>
        <?php
      }
       ?>
       </select>
                 <select class="textarea12" id="currency" name="currency" required>
      <?php
      $a=mysqli_query($conn,"SELECT `cur` FROM validity_price");
      while($row=mysqli_fetch_array($a))     {
        ?>
          <option ><?php print_r( $row["cur"]);?></option>
        <?php
      }
       ?>
         </select>
    </div>
</div>

<div class="form-group row ">
<label for="inputPassword3" class="col-sm-3 col-form-label ">Link for Product Blog</label>
    <div class="col-sm-9">
    <input type="url" class="form-control-file selectt " id="productblog" >
  </div>
</div>

<div class="form-group row ">
<label for="inputPassword3" class="col-sm-3 col-form-label ">Link for Product Video</label>
    <div class="col-sm-9">
    <input type="url" class="form-control-file selectt " id="productvideo" >
  </div>
</div>

<div class="form-group row ">
<label for="inputPassword3" class="col-sm-3 col-form-label ">Link for Product on MQL</label>
    <div class="col-sm-9">
    <input type="url" class="form-control-file selectt " id="productmql" >
  </div>
</div>

   <div class="form-group row">
<label for="inputPassword3" class="col-sm-3 col-form-label">Product Description </label>
    <div class="col-sm-9">
    <textarea class="form-control" id="description" rows="3"></textarea>
  </div>
</div>

  <div class="form-group row">
<label for="inputPassword3" class="col-sm-3 col-form-label">Description of Input Fields</label>
    <div class="col-sm-9">
    <textarea class="form-control" id="descriptioninput" rows="3"></textarea>
  </div>
</div>

<div class="form-group row">
<label for="inputPassword3" class="col-sm-3 col-form-label">Tags</label>
    <div class="tagborder">
    <text id="texttag1">
         <?php
      $a=mysqli_query($conn,"SELECT * FROM tag");
      
      while($row=mysqli_fetch_array($a))  {
        ?>
         <!-- <text id="texttag"class="tag1"><input type="text" class="text12" wrap="off" name="b_destinations[]" id="b_destinations[]" value="<?php print_r( $row["tag_name"]);?>" style="word-break: break-word; color:rgb(16 41 165);"  >&nbsp;&nbsp;&nbsp;<button class= "cross1 ab" style="color:white;"onclick=fun()><i class="fa fa-times icon"></i></button></text> -->
        <?php
      }
    
       ?></text>
  
  <text id="sub"></text>
  </div>
  
</div>


    <!-- <div class="form-group row">
    <label for="inputPassword3" class="col-sm-3 col-form-label">Discount</label>
    <div class="col-sm-9">
      <input type="text" class="selectt3"  id="discount" placeholder="Enter the discount" onkeypress='validate(event)' onkeyup="discount1()"required>&nbsp;%<textarea disabled id="result1" style="overflow:hidden" class="selectt2 textarea1" ></textarea>
    </div>
</div> -->


<div class="form-group row" >
<label for="inputPassword3" class="col-sm-3 col-form-label">Image</label>
    <div class="col-sm-9">
    <!-- <input type="file" class="form-control-file btn selectt" id="image"  onchange="preview()"required>
    <img id="frame" src="" width="100px" height="100px"/> -->
    <div class="selectt1">
    <input type="file" class="form-control-file btn " multiple id="gallery-photo-add">
       <div class="gallery" ></div>
       </div>
    </div>
</div>



<div class="form-group row ">
<label for="inputPassword3" class="col-sm-3 col-form-label ">Installation Guide</label>
    <div class="col-sm-9">
    <input type="file" class="form-control-file selectt " id="iguide" >
  </div>
</div>

<div class="form-group row ">
<label for="inputPassword3" class="col-sm-3 col-form-label ">User Guide</label>
    <div class="col-sm-9">
    <input type="file" class="form-control-file selectt " id="userguide" >
  </div>
</div>

<div class="form-group row ">
<label for="inputPassword3" class="col-sm-3 col-form-label ">Product File</label>
    <div class="col-sm-9">
    <input type="file" class="form-control-file selectt " id="productfile" >
  </div>
</div>






    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <center><button type="submit" class="btn btn-success ps" id="submit"  ><i class="fa fa-check"></i>&nbsp;Submit</button></center>
      </div>
    </div>
 
</form>

</div>




<script>
$('#sub').append(' <text class="sub>"<form action=""  name="form" style="position: element(#texttag1); transform: translateY(-100%);"><div class="input-wrapper"><input type="text" class="test" name="tag_name" id="tag_name" style="padding:3px; width:42%; margin-top:2px ;color:black;">&nbsp;&nbsp;<button type="button" style="background-color:#2ab4ec;border:none;height:36px; color:rgb(16 41 165);"class="btn btn-primary add"><i class="fa fa-plus style="color:white;"></i> &nbsp;Add</button><div id="suggesstion-box"></div></div></form></text>');
// $("b_destinations").keydown( function(){
//     var ME = $(this);
//     //Manual Way
//     //var px = 6.5;
//     //var txtlength = ME.val().length;
//     //$(this).css({width: txtlength * px });    
//    testdiv.html( ME.val() + "--"); //-- for padding
//    var txtlength = testdiv.width();
//    $(this).css({width: txtlength  }); 
// });

$('#validity').change(function(){
    var selected_id = $(this).val();
    var data1 = selected_id;
    console.log("data",data1);
    $.post('getprice.php',{data1},function(data){
         $('#price').val(data);
         console.log("data",data);
    });
});

$('#validity').change(function(){
    var selected_id = $(this).val();
    var data1 = selected_id;
    console.log("data",data1);
    $.post('getcur.php',{data1},function(data){
         $('#currency').val(data);
         console.log("data",data);
    });
});




$(document).ready(function(){
	$("#tag_name").keyup(function(){
		$.ajax({
		type: "POST",
		url: "search.php",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
			$("#tag_name").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box").show();
			$("#suggesstion-box").html(data);
			$("#tag_name").css("background","#FFF");
		}
		});
	});
});

function selectTags(val) {
$("#tag_name").val(val);
$("#suggesstion-box").hide();
}

$( document ).ready(function() {

var t = document.querySelectorAll("[id='b_destinations[]']");
for(var i=0;i<t.length;i++)
{
//  var defaultVal= t.defaultValue;
//  var txtlength = t[i].width();
//    $(t[i]).css({width: txtlength  }); 
  t[i].style.width = ((t[i].value.length + 5) * 9) + 'px';
  console.log(i );
  console.log("length",((t[i].value.length)));
}
//  var txtlength = defaultVal.width();
//    $(t).css({width: txtlength  }); 
 console.log("tag name",t);
//  console.log("tag name",defaultVal);
});


//  document.addEventListener('DOMContentLoaded', function(event) { 
//         document.getElementById('discount').value = '0';
//     });


  
$(".add").click(function(){
   
     
      var tag_name = $("#tag_name").val();
        console.log("tag_name", tag_name);

        if(tag_name=="" || tag_name==null){
            $("#tag_name").css("border","1px solid red");
           
        
        }else{

            $.post('checktag.php',{
                tag_name
            },function(data){
                console.log("data", data);
            if($.trim(data)!="2"){
             $("#tag_name").css("border","1px solid grey");
            // <text id="texttag"class="tag1">
             $('#texttag1').append('<text id="texttag" class="tag1"><input type="text" class="text12" wrap="off" name="b_destinations[]" id="b_destinations[]" value="'+tag_name+'" style="word-break: break-word; color:rgb(16 41 165);">&nbsp;&nbsp;&nbsp;<button class= "cross1 ab " style="color:white" onclick=fun()><i class="fa fa-times icon"></i></button></text>');
              
                var t = document.querySelectorAll("[id='b_destinations[]']");
                     for(var i=0;i<t.length;i++)
                           {
                               t[i].style.width = ((t[i].value.length + 5) * 9) + 'px';
                            }
//                               
                    // $("text").each(function(){
                    
                    //     $(this).children(".tag_name").text(i);
                    //     i++;
                    // });
            }
            if($.trim(data)=="2"){
              $("#tag_name").css("border","1px solid red");
            }
                });
            
        }

    });


    var platf = "";
    var image = "";
    var userguide = "";
    var productfile="";
    var iguide="";
   
      var thi ="";
       $("body").delegate(".cross1", "click", function(){
        thi = this;
        console.log("this",thi);
          $(thi).parent("text").remove();
 
        //$(thi).remove();
         
    });
 function fun() {
// var myobj = document.getElementById("texttag");
      

 };
 function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}


    // function discount1(){
    //             var p=document.getElementById("price").value;
    //             var dis=document.getElementById("discount").value;
    //             var cur=document.getElementById("currency").value;
    //             var d;
    //             d=(p-(p*(dis/100)));
    //          console.log(d);
    //             document.getElementById("result1").innerHTML=" "+cur+" "+d;
     
    //         }
    
    $(".mt").click(function(){
        if($(this).prop("checked")==true){
            platf = $(this).val();
           
        }

    });


   
    $("#userguide").change(function(){

        var file_data = $(this).prop("files")[0];   
        var form_data = new FormData();
        form_data.append("file", file_data);
        userguide = file_data.name;


        $.ajax({
                url: "upload.php",
                dataType: 'script',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                success: function(path){

            }, error: function(path){

            }

        });

    });
        $("#iguide").change(function(){

        var file_data = $(this).prop("files")[0];   
        var form_data = new FormData();
        form_data.append("file", file_data);
        iguide = file_data.name;


        $.ajax({
                url: "upload.php",
                dataType: 'script',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                success: function(path){

            }, error: function(path){

            }

        });

    });
        $("#productfile").change(function(){

        var file_data = $(this).prop("files")[0];   
        var form_data = new FormData();
        form_data.append("file", file_data);
        productfile = file_data.name;


        $.ajax({
                url: "upload.php",
                dataType: 'script',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                success: function(path){

            }, error: function(path){

            }

        });

    });
    

    $("form").submit(function(e){
    var b_destinations = document.getElementsByName('b_destinations[]');
var b_destinationsArr= [];
for(var i=0;i<b_destinations.length;i++)
    b_destinationsArr[i] = b_destinations[i].value;
  var tags= JSON.stringify( b_destinationsArr )
console.log("array",b_destinationsArr);

      e.preventDefault();
      var name = $("#name").val();
      var platf = $("#platform").val();
      var category = $("#category").val();
      var validity=$("#validity").val();
      var price = $("#price").val();
      var currency = $("#currency").val();
      var productblog=$("#productblog").val();
      var productvideo=$("#productvideo").val();
      var productmql=$("#productmql").val();
      var description = $("#description").val();
      var descriptioninput = $("#descriptioninput").val();
      console.log(validity,price,currency);
      // var discount = $("#discount").val();
         if(name=="" || name==null) {
        console.log("no");
         $("#name.form-control").css("border","1px solid red ");
         window.scrollTo(0, 0);
          console.log("no1");
     }else{
      $.post('insert.php',{
        name,
        platf,
        category,
        validity,
        price,
        currency,
        productblog,
        productvideo,
        productmql,
        description,
        descriptioninput,
        tags,
// discount,
        image,
        iguide,
        userguide,
        productfile

      },function(data){

      });
     
     }
    });


    var arr = [];


    $(function() {
    // Multiple images preview in browser
   
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < 5; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                  var div = document.createElement("div");
                   div.innerhtml= $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }
                reader.readAsDataURL(input.files[i]);
               
            }
        }

    };
  
    $('#gallery-photo-add').on('change', function() {
       
        

var file_data = $(this).prop("files")[0];   
var form_data = new FormData();
form_data.append("file", file_data);
// var image = file_data.name;

arr.push(file_data.name);
console.log('arr', arr);
image = "";

for(var i=0;i<arr.length;i++){
 
  image += " "+arr[i];
  }
  console.log('image', image);

$.ajax({
        url: "upload.php",
        dataType: 'script',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        
        success: function(path){

      }, error: function(path){

      }



});

imagesPreview(this, 'div.gallery');

    });
      
});



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
