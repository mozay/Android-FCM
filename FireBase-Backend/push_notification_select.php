<?php 

	if($_POST)
	{

		$tokens_post=array($_POST['regtoken']);
		$message_post=array("message"=>$_POST["message"]);
	
	
		$url = 'https://fcm.googleapis.com/fcm/send';
		$fields = array
 		(
 			'registration_ids' => $tokens_post,
 			'data' => $message_post
 		);

		$headers = array(
			'Authorization:key = YOUR KEY ',
			'Content-Type: application/json'
			);

	   $ch = curl_init();
       curl_setopt($ch, CURLOPT_URL, $url);
       curl_setopt($ch, CURLOPT_POST, true);
       curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
       curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);  
       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
       curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
       $result = curl_exec($ch);           
       if ($result === FALSE) {
           die('Curl failed: ' . curl_error($ch));
       }
       curl_close($ch);
       echo $result;
	
	}

 ?>
