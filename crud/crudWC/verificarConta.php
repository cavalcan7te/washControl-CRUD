<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (!isset($_SESSION["lava_jato_id"])) {
        header("Location: index.php");
        exit();
    }
?>
