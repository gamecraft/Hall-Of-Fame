<?php
// $ curl -d "postToken=youshouldknowit&name=Person Name&gender=male or female&account=some link"
require_once("include_me.php");
if(isset($_POST["postToken"]) && $_POST["postToken"] === $postToken) {
	$account = (isset($_POST["account"]) ? $_POST["account"] : NULL);
	$query = "INSERT INTO individuals(name, gender, account) VALUES(?, ?, ?)";
	$database -> query($query, array($_POST["name"], $_POST["gender"], $account));
	echo "DONE";
} else {
	die("Unicorns");
}