<?php
$link = mysql_connect("localhost", "username", "password", true, 196608);
if (!$link) {
    die('Not connected : ' . mysql_error());
}
$db_selected = mysql_select_db("dbschema", $link);
if (!$db_selected) {
    die ('Can\'t use unem_state : ' . mysql_error());
}
?>