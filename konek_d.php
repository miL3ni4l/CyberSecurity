<?php
if(!mysql_connect("girindropringgodigdo.net","girionet_portal","R4H4S14")) {
die(mysql_error());
}
if(!mysql_select_db("girionet_portal")){
die(mysql_error());
}
?>