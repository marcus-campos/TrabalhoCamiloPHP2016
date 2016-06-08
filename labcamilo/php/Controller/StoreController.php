<?php
    namespace php\Controller\StoreController;

    include '../Model/StoreModel.php';

    use php\Model\StoreModel;

    class StoreControler{

    public function storeArray($_POST)
    {
        $sMod = new StoreModel\StoreModel;
        return $sMod->storeArray($_POST);
    }

}

