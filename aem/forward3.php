<?php
header("HTTP/1.1 301 Moved Permanently");

header("Location: index.php?action=message&".$_SERVER['QUERY_STRING']);
?>