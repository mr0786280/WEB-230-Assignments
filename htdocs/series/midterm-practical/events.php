<?php

$pageTitle = "Events";

include_once('include/header.inc.php');
include_once('include/events.data.php');

foreach ($events as $value)
	echo '<div align="center"><h1>'.$value[0].'</h1><div lign="center">'.$value[1].'</div><div align="center">'.$value[2].'</div></div>';

include_once('include/footer.inc.php');

?>