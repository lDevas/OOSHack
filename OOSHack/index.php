<?php

error_reporting(E_ALL);

echo "b";

require_once('autoload.php');

echo "aa";

$smarty->display("index-admin.tpl.html");


?>