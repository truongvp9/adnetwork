@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<div class="container">
           <form action="/postads" method="post">
           {{ csrf_field() }} 
            <div class="row">
                
               
                <div class="col-xs-8 col-sm-8 col-md-8">
                     
                           <h3>&nbsp;&nbsp;QUẢNG CÁO</h3>
                  
                           <div class="form-group">
                                  <label for="Tieu de" class="col-xs-2 col-sm-2 col-md-2 control-label">Tiêu đề:</label>
                                  <div class="col-xs-6 col-sm-6 col-md-6">
                                           <input type="text" name="title" class="form-control" id="TD" required placeholder="Nhập vào tiêu đề quảng cáo">
                                  </div><!--end col-md-6-->
                           </div><!--end from-group-->
						   <div style="clear:both;"></div>
                           <div class="form-group">
                                  <label for="Anh " class="col-xs-2 col-sm-2 col-md-2 control-label">Hình ảnh :</label> 
                                  <div class="col-xs-6 col-sm-6 col-md-6">
                                            <input type="file" name="image1"  class="form-control" id="fileResume" placeholder="Nhập vào ảnh">
                                            <br>
                                            <input type="text" name="image"  class="form-control"  id="fileResume" required placeholder="Nhập vào ảnh">
                                  </div><!--end col-md-6-->
                           </div><!--end from-group-->
							<div style="clear:both;"></div>
                          <div class="form-group">
                          <label for="link" class="col-xs-2 col-sm-2 col-md-2 control-label">URL cần quảng cáo:</label> 
                                  <div class="col-xs-6 col-sm-6 col-md-6">
                                          <p style="color:lightgoldyellow;"><small>Ví dụ: http://vp9.vn</small></p>
                                          <input type="url" name="target_" class="form-control" id="Link" placeholder="Nhập vào đường dẫn">
                                          <br>
                                          <input type="text" name="price"  class="form-control" id="fileResume" required placeholder="Nhập vào giá sản phẩm">
                                  </div><!--end col-md-6-->
                           </div><!--end from-group-->
							<div style="clear:both;"></div>
                           <div class="form-group">
                           <label for="Mo ta" class="col-xs-2 col-sm-2 col-md-2 control-label">Mô tả ngắn:</label>  
                                  <div class="col-xs-6 col-sm-6 col-md-6">
                                        <textarea name="description" class="form-control" id="mo ta " required rows="5"></textarea>
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
         
     </div>


@endsection