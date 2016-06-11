<?php
namespace php\Model\StoreModel;

class StoreModel{

    public function storeArray($post)
    {
        $array = [
            "nome" => $post[0]['nome'],
            "analf" => $post[0]['rb_analfabeto'],
            "pri" => $post[0]['rb_primario'],
            "fund" => $post[0]['rb_fundamental'],
            "medio" => $post[0]['rb_medio'],
            "sup" => $post[0]['rb_superior'],
            "tv" => $post[0]['tv'],
            "ra" => $post[0]['ra'],
            "ba" => $post[0]['ba'],
            "au" => $post[0]['au'],
            "em" => $post[0]['em'],
            "ml" => $post[0]['ml'],
            "dvd" => $post[0]['dvd'],
            "gel" => $post[0]['gel'],
            "free" => $post[0]['free'],
            "acima20" => $post[0]['rb_acima20salarios'],
            "de10a20" => $post[0]['rb_10A20'],
            "de4a10" => $post[0]['rb_4A10'],
            "de2a4" => $post[0]['rb_2A4'],
            "ate2" => $post[0]['rb_ate2sm'],
        ];

        $_SESSION['pesquisa'][] = $array;
    }

}