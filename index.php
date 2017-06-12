<?php include_once("razrab.html"); ?>
<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

$url = parse_url(getenv("mysql://bbe32d767cdbfd:e72cfa9e@us-cdbr-iron-east-03.cleardb.net/heroku_fda0a19831eaf8c?reconnect=true"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($conn->query("select * from new_table") === TRUE) {
    echo "GOOOD MATHERFUCKA";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
echo "1";
/*$conn->query('SELECT * FROM new_table');
if ($result = $conn->query("SHOW TABLES"))
{
    while($row = $result->fetch_array(MYSQLI_NUM))
    {
        echo $row[0];
    }
}

$conn->close();*/
echo "2";
?>
