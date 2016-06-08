<?php

namespace php\Controller\GSController;

class GSController{

    public function GSController() {
        session_start();
        $_SESSION['iniciado'] = "sim";
    }

}