<?php include_once("razrab.html"); ?>
<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

$server = "us-cdbr-iron-east-03.cleardb.net";
$username = "bbe32d767cdbfd";
$password = "e72cfa9e";
$db = "heroku_fda0a19831eaf8c";
$conn = new mysqli($server, $username, $password, $db);
if ($result = $conn->query("SELECT * FROM cars")){
    while($row = $result->fetch_array(MYSQLI_NUM))
    {
        echo $row[0];
		echo $row[1];
    }
}
$conn->close();
function mymodule_form_alter(&$form, $form_state) {
  drupal_add_js(drupal_get_path('module', 'mymodule').'/jquery.maskedinput.min.js');
  drupal_add_js(drupal_get_path('module', 'mymodule') . '/userreg.js');
}
?>
