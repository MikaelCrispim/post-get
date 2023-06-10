<?php
include 'sessionStart.php';

session_destroy();

header("Location: ../../index.php");
?>