<?PHP
include_once('/lib/endpoints.php');
$terminal = new endpoint;
$terminal -> user_token='';
$terminal -> access_token='';
 $test = ($terminal -> get_snapshot('166bff1e4873c3d75cfd3d3dabbeeedecf8926f84174b6d0fda5b081b948ac33'));
 var_dump($test);

?>
