<?php
if (!isset($_SESSION['loggedIn'])) {
	die('Sorry, not logged in.');
}
// Purpose:	This file is run when a file or dir is deleted, has $fileLoc and $fileName strings available to it
// Langs:	PHP (tho can concat JS within $doNext string, see below)
// Example:
// $fh = fopen(dirname(__FILE__)."/../file-dir-access.log", 'a');
// fwrite($fh, "DELETED >>> ".date("D dS M Y h:i:sa").": ".$fileLoc."/".$fileName."\n");
// fclose($fh);

// If JS is needed, add within $doNext string below, eg $doNext .= ";alert('deleted');";
$doNext .= "";
