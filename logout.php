
<?php
session_start();
header( "Refresh:1; url=index.php", true, 303);
session_destroy();

?>
