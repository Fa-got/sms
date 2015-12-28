<?php 
 $src = '<?xml version="1.0" encoding="UTF-8"?> 
 <SMS> 
 <operations> 
 <operation>SEND</operation> 
 </operations> 
 <authentification> 
 <username>software@kvinto.com.ua</username> 
 <password>kvinto24</password> 
 </authentification> 
 <message> 
 <sender>KVINTO</sender> 
 <text>vse rabotaet</text> 
 </message> 
 <numbers> 
 <number>380995234590</number> 
 <number>380932379346</number>
 </numbers> 
 </SMS>'; 

 $Curl = curl_init(); 
 $CurlOptions = array( 
 CURLOPT_URL=>'http://api.atompark.com/members/sms/xml.php', 
 CURLOPT_FOLLOWLOCATION=>false, 
 CURLOPT_POST=>true, 
 CURLOPT_HEADER=>false, 
 CURLOPT_RETURNTRANSFER=>true, 
 CURLOPT_CONNECTTIMEOUT=>15, 
 CURLOPT_TIMEOUT=>100, 
 CURLOPT_POSTFIELDS=>array('XML'=>$src), 
 ); 
 curl_setopt_array($Curl, $CurlOptions); 
 if(false === ($Result = curl_exec($Curl))) { 
 throw new Exception('Http request failed'); 
 } 

 curl_close($Curl); 

 echo $Result; 
 


$.ajax({
  url: url,
  type: "POST",
  data: data,
  success: success,
  dataType: dataType
});

//в урл расопложение файла php
//в дата записываешь передаваемые данные
//например

$.ajax({
  url: url,
  type: "POST",
  data: {'phone' = '380998887766', 'text' = 'Текст сообщения'}
});

//в а пхп все еще проще
echo $_POST['phone'] // вернет 380998887766
echo $_POST['text']  // вернет Текст сообщения



?>