<?php
function fromJSON($str) {
    return json_decode($str, true);
}
try {
	$db = fromJSON(file_get_contents('db.json'));
	$conn = mysqli_connect(@$db['srvr'], @$db['user'], @$db['pass'], @$db['name']);
	$method = $_SERVER['REQUEST_METHOD'];
	switch ($method) {
		case 'GET': require('get.php'); break;
		case 'PUT': require('put.php'); break;
		case 'DELETE': require('delete.php'); break;
	}
} catch(Exception $ex) {
	echo '{"$ex":"'.$ex->getMessage().'",';
	echo '"$exTrace":"'.$ex->getTraceAsString().'"}';
}
?>
