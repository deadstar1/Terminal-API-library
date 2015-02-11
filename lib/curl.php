<?php
class curl{

	function curl_terminal($endpoint,$param){
		//echo $endpoint;

		$curl=curl_init();
		$param=json_encode($param);
		//echo $param;
		$endpoint='https://api.terminal.com/v0.1'. $endpoint;
		$content_type='Content-Type: application/json'; // if other content type is supported.
		curl_setopt($curl, CURLOPT_URL, $endpoint);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array($content_type));
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $param);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		$RESULT=curl_exec($curl);
		var_dump($RESULT);

	}



}

?>
