<?php
/*
    
*/
include "../conf_serv.php";
include "../lib/func.php";

$db = new Database(DB_NAME);

$from_ts = time() - 7*24*60*60;
$from_date = date("Y-m-d H:i:s", $from_ts); 

$sql = "delete from master_log where added<'$from_date'";

$rs=$db->executeQuery($sql);

$sql = "optimize table master_log";
$db->executeQuery($sql);

if ($rs){
    echo 1;
}else{
    echo 0;
}

?>