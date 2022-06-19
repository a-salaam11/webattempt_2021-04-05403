<?php
    session_start();
    if(!empty($_SESSION['web-attempt'])) {
        session_destroy();
        header('Location: index.html');
    }