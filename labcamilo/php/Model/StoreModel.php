<?php
namespace php\Model\StoreModel;

    class StoreModel{
    
        public function storeArray($_POST)
        {
            $array = [
                "tv" => $_POST['tv'],
                "ra" => $_POST['ra'],
                "ba" => $_POST['ba'],
                "au" => $_POST['au'],
                "em" => $_POST['em'],
                "ml" => $_POST['ml'],
                "dvd" => $_POST['dvd'],
                "gel" => $_POST['gel'],
                "free" => $_POST['free'],
            ];

            return 'OK';
        }
    
    }
