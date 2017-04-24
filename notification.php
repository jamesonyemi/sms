<?php 

curl_setopt_array($ch = curl_init(), array(
  CURLOPT_URL => "https://api.pushed.co/1/push",
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => array(
	"app_key" => "UZtiM2NjOnZ6PLJlurJ1",
	"app_secret" => "stclzYkJ1h2JDHvxkU0ay0dYCItfFssoJMQPAXHG72Adq2csyxOwe4ulisojr4Bl",
	"target_type" => "app",
	"content" => "Food is ready."
  ),
  CURLOPT_SAFE_UPLOAD => true,
  CURLOPT_RETURNTRANSFER => true
));
curl_exec($ch);
curl_close($ch);



 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>eee</title>
 	<script src="https://efo.pushify.com/script.js?category=58f747d1995642ac4b3959e0"></script>
 </head>
 <body>
 <a href="https://pushed.co/s/r7vL6Ma"><img src="https://account.pushed.co/assets/pushed/media/share/blue/subscribe_pushed_short.png" alt="Subscribe To Pushed" title="Subscribe To Pushed"></a>
 </body>
 </html>
 