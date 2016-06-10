<?php
namespace php\Model\StoreModel;

class StoreModel{

    public function storeArray($post)
    {
        $array = [
            "nome" => $post[0]['nome'],
            "analf" => $post[0]['ck_analfabeto'],
            "pri" => $post[0]['ck_primario'],
            "fund" => $post[0]['ck_fundamental'],
            "medio" => $post[0]['ck_medio'],
            "sup" => $post[0]['ck_superior'],
            "tv" => $post[0]['tv'],
            "ra" => $post[0]['ra'],
            "ba" => $post[0]['ba'],
            "au" => $post[0]['au'],
            "em" => $post[0]['em'],
            "ml" => $post[0]['ml'],
            "dvd" => $post[0]['dvd'],
            "gel" => $post[0]['gel'],
            "free" => $post[0]['free'],
            "acima20" => $post[0]['ck_acima20salarios'],
            "de10a20" => $post[0]['ck_10A20'],
            "de4a10" => $post[0]['ck_4A10'],
            "de2a4" => $post[0]['ck_2A4'],
            "ate2" => $post[0]['ck_ate2sm'],
        ];

        $_SESSION['pesquisa'][] = $array;

        var_dump($_SESSION['pesquisa']);
    }

}