
<?php

if (!empty($_SERVER['HTTP_ORIGIN']) && preg_match('#https?://#', $_SERVER['HTTP_ORIGIN'])) {
	header("Access-Control-Allow-Origin: ".$_SERVER['HTTP_ORIGIN']);
	header("Access-Control-Allow-Credentials: true");
}
header("Content-Type: application/json");
//$data = array("paper" => "Nút Home của iPhone 8 có thể sẽ hoạt động giống thanh điều khiển trên Android");
/*//
echo json_encode($data);
*/
//$data = array("name" => "Hagrid", "age" => "36");  
$data = array("paper" => "Nút Home của iPhone 8 có thể sẽ hoạt động giống thanh điều khiển trên Android, tức là sẽ liên tục xuất hiện trên màn hình để bạn thoát về màn hình chính. Tuy nhiên, với các ứng dụng cần chế độ full screen, nút home này sẽ biến mất, khi nào cần dùng chúng ta sẽ vuốt từ dưới lên để nó xuất hiện trở lại. Với việc sử dụng nút home ảo này thì diện tích hiển thị thực tế của iPhone 8 sẽ là 5.15. Hiện tại người ta chưa tìm được bất cứ lệnh nào liên quan đến việc chỉnh sửa màu sắc của nút home cũng như can thiệp vào khu vực này, cho thấy rất có thể Apple sẽ dùng khu vực bên cạnh nút home cho một số tính năng khác");                                                                  
$data_string = json_encode($data);                                                                                   
                                                                                                                     
$ch = curl_init('http://10.12.11.161:5000/getAds');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                   
                                                                                                                     
$result = curl_exec($ch);

print_r($result);
?>