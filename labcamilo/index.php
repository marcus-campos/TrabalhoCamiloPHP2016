<?php
    namespace Index;
    session_start();
    include 'php/Controller/SessionController';

    header('Location: php/View/Home.php');