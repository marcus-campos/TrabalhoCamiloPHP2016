<?php
namespace php\Model\StoreModel;

class StoreModel{

    public function storeArray($post)
    {
        $array = [
            "tv" => $post[0]['tv'],
            "ra" => $post[0]['ra'],
            "ba" => $post[0]['ba'],
            "au" => $post[0]['au'],
            "em" => $post[0]['em'],
            "ml" => $post[0]['ml'],
            "dvd" => $post[0]['dvd'],
            "gel" => $post[0]['gel'],
            "free" => $post[0]['free'],
        ];
        $_SESSION['pesquisa'][] = $array;
    }

}