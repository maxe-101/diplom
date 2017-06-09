<?php include_once("razrab.html"); ?>
<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["us-cdbr-iron-east-03.cleardb.net"];
$username = $url["bbe32d767cdbfd"];
$password = $url["e72cfa9e"];
$db = substr($url["mysql://bbe32d767cdbfd:e72cfa9e@us-cdbr-iron-east-03.cleardb.net/heroku_fda0a19831eaf8c?reconnect=true"], 1);

$conn = new mysqli($server, $username, $password, $db);

echo "1";
$mysqli->query('SELECT * FROM new_table');
$mysqli->query('SET foreign_key_checks = 0');
if ($result = $mysqli->query("SHOW TABLES"))
{
    while($row = $result->fetch_array(MYSQLI_NUM))
    {
        $mysqli->query('DROP TABLE IF EXISTS '.$row[0]);
    }
}

$mysqli->query('SET foreign_key_checks = 1');
$mysqli->close();
echo "2"; 
?>