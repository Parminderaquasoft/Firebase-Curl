<?php

  $path_to_firebase_cm = 'https://fcm.googleapis.com/fcm/send';
  
  
  
  $fields=array(
  
   "to" =>"Device ID",
   "notification" => array(
   "click_action" => "Action For Command",
    "body"  => "Google Key",
    "title" => "Face2friend",
    "icon" => "ic_launcher"
   ),
   "data" => array(  "body"  => array('status' => 'ok','like_count' =>4,'flag' => 1))
 );
  
   
   
 
        $headers = array(
            'Authorization:key=Google Key',
            'Content-Type:application/json'
        );  
  $ch = curl_init();
 
        curl_setopt($ch, CURLOPT_URL, $path_to_firebase_cm); 
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 ); 
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
    
        $result = curl_exec($ch);
       
    
    print_r($result);
        curl_close($ch);

        return $result;

?>