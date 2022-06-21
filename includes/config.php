
<?php
session_start();
$SITE_TITLE="SADMS ";

$DB_SERVER="localhost";
$DB_NAME="sdms";
$DB_USER="root";
$DB_PASSWORD="";
function sanitizeInput($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>