<?php
require_once ("include_me.php");

$sql = "SELECT name, gender, account FROM individuals";
$res = $database -> query ($sql);

while($row = $res->fetch(PDO::FETCH_OBJ)) {
	var_dump($row->account);
}