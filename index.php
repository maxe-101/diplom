<?php include_once("razrab.html"); ?>
<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["us-cdbr-iron-east-03.cleardb.net"];
$username = $url["heroku_fda0a19831eaf8c"];
$password = $url["e72cfa9e"];
$db = substr($url["mysql://bbe32d767cdbfd:e72cfa9e@us-cdbr-iron-east-03.cleardb.net/heroku_fda0a19831eaf8c?reconnect=true"], 1);

$conn = new mysqli($server, $username, $password, $db);
echo "1"; 
?>
