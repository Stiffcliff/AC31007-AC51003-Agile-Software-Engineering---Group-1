<?php
include("dbconnect.php");

$goal = $params['goal'];

$sql = "SELECT * FROM goal WHERE goal='". $goal ."'";

$rows = array();
$result = $db->query($sql);
while ($row = $result->fetch_array()) {
    $rows[] = $row;
}

  header('Content-type: application/json');
  echo json_encode($rows);


php?>
