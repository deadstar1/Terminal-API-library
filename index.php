<?PHP
include_once('/lib/endpoints.php');
$terminal = new endpoint;
$terminal -> user_token='';
$terminal -> access_token='';
 $test = ($terminal -> get_snapshot(''));
 var_dump($test);

?>
