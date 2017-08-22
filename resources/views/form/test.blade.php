@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
     <head>
           <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
            <meta name="description" content="">
            <meta name="author" content="">
            <title>ĐĂNG KÝ THÔNG TIN KHÁCH HÀNG</title>
            <link rel="stylesheet" media="screen" href="css/bootstrap.min.css">
            <link rel="stylesheet" media="screen"  href="css/bootstrap-theme.min.css">
            <link rel="stylrsheet" media="screen" href="css/myweb.css">
			<a href="/home">Trang chủ</a>
			<a href="/postads">Đăng quảng cáo</a>
			<br>
            <form method="post" action="#">
            {{ csrf_field() }} 
            <link rel="icon" href="">ĐĂNG KÝ THÔNG TIN KHÁCH HÀNG</h3>                               
                           <div class="form-group">
                                  <label for="Ten khach hang" class="col-xs-2 col-sm-2 col-md-2 control-label">Tên khách hàng:</label>
                                  <div class="col-xs-6 col-sm-6 col-md-6">
                                           <input type="text" class="form-control" name="name" id="TKH" >
                                  </div><!--end col-md-6-->
                           </div><!--end from-group-->
                  
                           <div class="form-group">
                                  <label for="Dia chi " class="col-xs-2 col-sm-2 col-md-2 control-label">Địa chỉ:</label> 
                                  <div class="col-xs-6 col-sm-6 col-md-6">
                                            <input type="text" class="form-control" id="DC">
                                  </div><!--end col-md-6-->
                           </div><!--end from-group-->
                                   
                           <div class="form-group">
                           <label for="Email" class="col-xs-2 col-sm-2 col-md-2 control-label">Email:</label>  
                                  <div class="col-xs-6 col-sm-6 col-md-6">
                                            <p style="color:lightgoldyellow;"><small>Ví dụ: abc@gmail.com</small></p>
                                            <input type="email" name="email" class="form-control" id="email">
                                  </div><!--end col-md-6-->
                           </div><!--end from-group-->
                  
                          <div class="form-group">
                          <label for="So dien thoai" class="col-xs-2 col-sm-2 col-md-2 control-label">Số điện thoại:</label> 
                                  <div class="col-xs-6 col-sm-6 col-md-6">
                                          <input type="tel" class="form-control" id="SDT">
                                  </div><!--end col-md-6-->
                           </div><!--end from-group-->
                  
                           <div class="form-group">
                           <label for="Nguoi lien he" class="col-xs-2 col-sm-2 col-md-2 control-label">Người liên hệ:</label> 
                                  <div class="col-xs-6 col-sm-6 col-md-6">
                                         <input type="text" name="contact" class="form-control" id="NLH">
                                  </div><!--end col-md-6-->
                           </div><!--end from-group-->
                  
                           <div class="form-group">
                           <label for="So dien thoai NLH " class="col-xs-2 col-sm-2 col-md-2 control-label">Số điện thoại(Người liên hệ):</label>  
                                  <div class="col-xs-6 col-sm-6 col-md-6">
                                         <input type="tel" class="form-control" id="SDTNLH">
                                  </div><!--end col-md-6-->
                           </div><!--end from-group-->
                    
                          <div class="form-group">
                          <div class="col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-xs-6 col-sm-6 col-md-6"><br>
                                 <button name="cmd" type="submit" class="btn btn-default" onclick="myFunction121()">Đăng ký</button>
                                 <br>
                                 <p id="demo1" style="color:red;font-size:20px;"></p>
                          </div><!--end col-md-offset-2-->
                          </div><!--end from-group-->
                   
                </form><!--end form-horizontal-->
                          
                </div>
               
               
                <div class="col-xs-2 col-sm-2 col-md-2 ">
                </div>
           </div><!--end class row-->
         
         <script>
             
                function myFunction1emem(){
                    
                    //alert('aa');
                    
                    window.location = "/home";
                }
             
                function myFunction1(){
                   var x,y,z,k,text;
                   x = document.getElementById("TKH").value;
                   y = document.getElementById("SDT").value;
                   z = document.getElementById("NLH").value;
                   k = document.getElementById("SDTNLH").value;
                   if(!isNaN(x)){
                        text="Vui lòng nhập lại tên khách hàng";
                    }
                   if(isNaN(y)){
                        text="Vui lòng nhập lại số điện thoại";
                   }
                    
                    document.getElementById("demo1").innerHTML = text;
                  
                   if(!isNaN(z)){
                        text="Vui lòng nhập lại tên người liên hệ";
                    }
                   if(isNaN(k)){
                        text="Vui lòng nhập lại số điện thoại người liên hệ";
                   }
                    
                    document.getElementById("demo1").innerHTML = text;
               }
         </script>
         
     </body>
</html>

@endsection