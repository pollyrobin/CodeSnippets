<?php
include_once("../../script/db/DbConnectClass.php");
#
# Example PHP server-side script for generating
# responses suitable for use with jquery-tokeninput
#

# Connect to the database
$db = new DbConnect('codesnippets');	

# Perform the query
$query = sprintf("SELECT username from users WHERE username LIKE '%%%s%%' LIMIT 10", mysql_real_escape_string($_GET["q"]));
$arr = array();

$rs = ($db->Query($query));

# Collect the results
while($obj = mysql_fetch_object($rs)) {
    $arr[] = $obj;
}

# JSON-encode the response
if (empty($arr)) {
	$arr[] = array('username' => mysql_real_escape_string($_GET["q"]));
	$json_response = json_encode($arr);
} else {
	$json_response = json_encode($arr);
}
# Optionally: Wrap the response in a callback function for JSONP cross-domain support
if($_GET["callback"]) {
    $json_response = $_GET["callback"] . "(" . $json_response . ")";
}

# Return the response
	echo $json_response;

?>
