<?php

namespace php\Controller\StoreController;

include '../Model/StoreModel.php';
use php\Model\StoreModel;

class StoreController
{
    public function store($post)
    {
        $sMod = new StoreModel\StoreModel;
        return $sMod->storeArray($post);
    }
}