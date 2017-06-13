<?php
require_once 'db.php';
$db = DB::getInstance();
echo json_encode($db->getCasePage($_GET['page']));
