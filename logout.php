<?php
session_start();
session_destroy();
header('location: http://localhost/prakrikum3/index.php?error=Anda Telah Logout');
?>