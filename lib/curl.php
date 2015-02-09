<?php
class curl{

	function curl_terminal($endpoint,$param){
		echo $endpoint;

		$curl=curl_init();
		$param=json_encode($param);
		echo $param;
		$endpoint='https://api.terminal.com/v0.1'. $endpoint;

		curl_setopt($curl,CURLOPT_URL, $endpoint);
		curl_setopt($curl,CURL_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($curl,CURL_POST, 1);
		curl_setopt($curl,CURL_POSTFIELDS, $param);
		curl_setopt($curl,CURL_RETURNTRANSFER, 1);
		curl_setopt($curl,CURL_HTTPAUTH, CURLAUTH_ANY);
		curl_setopt($curl,CURL_FOLLOWLOCATION, 1);
		curl_setopt($curl,CURL_SSL_VERFIYPEER, false);
		$RESULT=curl_exec($curl);

	}



}

?>
