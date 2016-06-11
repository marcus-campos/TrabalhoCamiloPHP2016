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

    public function score()
    {
        $sMod = new StoreModel\StoreModel;

        return $sMod->score();
    }

    public function scoreClassification($score)
    {
        $sMod = new StoreModel\StoreModel;

        return $sMod->scoreClassification($score);
    }

    public function socialClassification()
    {
        $sMod = new StoreModel\StoreModel;

        return $sMod->socialClassification();
    }

    public function elementSession($element)
    {
        $sMod = new StoreModel\StoreModel;

        return $sMod->elementSession($element);
    }
}