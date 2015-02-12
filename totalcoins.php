<?php
require_once ("bc_daemon.php");
$network_info = getinfo ();
echo "			".$network_info["moneysupply"]."\n";
?>