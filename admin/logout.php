<?php
    session_start();
    unset($_SESSION['usuario']);
    unset($_SESSION['usuario']);
    header(("Location: ../index.php"));
?>