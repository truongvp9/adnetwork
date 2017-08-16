<!DOCTYPE html>
<html lang="en">
     <head>
           <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
            <meta name="description" content="">
            <meta name="author" content="">
            <title>Bootstrap</title>
            <link rel="stylesheet" media="screen" href="css/bootstrap.min.css">
            <link rel="stylesheet" media="screen"  href="css/bootstrap-theme.min.css">
            <link rel="stylrsheet" media="screen" href="css/myweb.css">
            <link rel="icon" href="">
            <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
            <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
     </head>
     <body>
           <form action="/dangquangcao.php" method="post">
           {{ csrf_field() }} 
            <div class="row">
                
                <div class="col-xs-2 col-sm-2 col-md-2 ">
                </div>
               
               
                <div class="col-xs-8 col-sm-8 col-md-8">
                     
                           <h3>THÔNG TIN QUẢNG CÁO</h3>
                  
                           <div class="form-group">
                                  <label for="Tieu de" class="col-xs-2 col-sm-2 col-md-2 control-label">Tiêu đề:</label>
                                  <div class="col-xs-6 col-sm-6 col-md-6">
                                           <input type="text" name="title" class="form-control" id="TD" placeholder="Enter tiêu đề">
                                  </div><!--end col-md-6-->
                           </div><!--end from-group-->
                  
                           <div class="form-group">
                                  <label for="Anh " class="col-xs-2 col-sm-2 col-md-2 control-label">Hình ảnh :</label> 
                                  <div class="col-xs-6 col-sm-6 col-md-6">
                                            <input type="file" name="image1"  class="form-control" id="fileResume" placeholder="Enter hình ảnh">
                                            <br>
                                            <input type="text" name="image"  class="form-control" id="fileResume" placeholder="Anh quang cao">
                                  </div><!--end col-md-6-->
                           </div><!--end from-group-->
      
                          <div class="form-group">
                          <label for="link" class="col-xs-2 col-sm-2 col-md-2 control-label">Đường dẫn:</label> 
                                  <div class="col-xs-6 col-sm-6 col-md-6">
                                          <p style="color:lightgoldyellow;"><small>Ví dụ: http://saghdjskdaskd</small></p>
                                          <input type="url" name="target_" class="form-control" id="Link" placeholder="Enter đường dẫn">
                                          <br>
                                          <input type="text" name="price"  class="form-control" id="fileResume" placeholder="Giá sản phẩm">
                                  </div><!--end col-md-6-->
                           </div><!--end from-group-->
                         
                           <div class="form-group">
                           <label for="Mo ta" class="col-xs-2 col-sm-2 col-md-2 control-label">Mô tả ngắn:</label>  
                                  <div class="col-xs-6 col-sm-6 col-md-6">
                                            <textarea name="description" class="form-control" id="mo ta " rows="5" >
                                            </textarea>
                                   </div>
                           </div><!--end from-group-->
                    
                          <div class="form-group">
                          <div class="col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-xs-6 col-sm-6 col-md-6">
                                 <br>
                                 <button name="cmd"  id="postads123" type="submit" class="btn btn-default" onclick="myFunction212()">Đăng tin</button>
    
                          </div><!--end col-md-offset-2-->
                          </div><!--end from-group-->
                   
                  <!--end form-horizontal-->
                </div>
               
               
                <div class="col-xs-2 col-sm-2 col-md-2 ">
                </div>
           </div><!--end class row-->
           </form>
           <script type="text/javascript"> 
             // http.ResponseWriter.Header().Set("Access-Control-Allow-Origin", "*")
             $( document ).ready(function() {
                 //alert("abc");
                 //console.log( "ready!" );
                 $("#postads1").click(function(){
                     //alert("abc");
                     $( "form:first" ).submit();
                     /*
                     $.ajax({
                        method: "POST",
                        url: "http://10.12.11.161:5000/newAds",
                        dataType: "json",
                        contentType: "application/json",
                        data:  {"title":"test1","price":"test1","image":"test1","description":"test1"}
                      })

                        .done(function( msg ) {
                          alert( "Data Savd: " + msg );
                        });*/
                 });
             });
             
             function myFunction2(){
                    var x,text;
                    x = document.getElementById("TD").value;
                    if(!isNaN(x)){
                        text="Vui lòng nhập lại tiêu đề";
                    }
                    
                    document.getElementById("demo2").innerHTML = text;
               }
         </script>
         
     </body>
</html>