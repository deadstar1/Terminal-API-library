<?PHP
include_once('/lib/endpoints.php');
$terminal = new endpoint;
$terminal -> user_token='a0b8071b72c082f68ef54cf35d0cb1e8d78ac823996a99710ec0dd594ec89502';
$terminal -> access_token='lwTSQaC3tUtQoMnwEwuEfcnzWzisp3cE';
 $test = ($terminal -> get_snapshot('166bff1e4873c3d75cfd3d3dabbeeedecf8926f84174b6d0fda5b081b948ac33'));
 var_dump($test);

?>
