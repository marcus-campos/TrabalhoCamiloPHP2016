<?php
namespace php\Model\StoreModel;

class StoreModel{

    public function storeArray($post)
    {
        $array = [
            "grau" => $post[0]['rb_grau'],
            "tv" => $post[0]['tv'],
            "ra" => $post[0]['ra'],
            "ba" => $post[0]['ba'],
            "au" => $post[0]['au'],
            "em" => $post[0]['em'],
            "ml" => $post[0]['ml'],
            "dvd" => $post[0]['dvd'],
            "gel" => $post[0]['gel'],
            "free" => $post[0]['free'],
            "salario" => $post[0]['rb_salario'],
            "nome" => $post[0]['nome'],
        ];

        $_SESSION['pesquisa'][] = $array;
    }

    public function score()
    {
        $cont = 0;
        $score = 0;

        foreach ($_SESSION['pesquisa'][0] as $k => $v) {
            if($cont <= 14)
                $score += floatval($v);
            $cont++;
        }

        return $score;
    }

    public  function scoreClassification($score)
    {
        switch ($score) {
            case ($score >= 42 || $score <= 46):
                return "A1";
                break;
            case ($score >= 35 || $score <= 41):
                return "A2";
                break;
            case ($score >= 29 || $score <= 34):
                return "B1";
                break;
            case ($score >= 23 || $score <= 28):
                return "B2";
                break;
            case ($score >= 18 || $score <= 22):
                return "C1";
                break;
            case ($score >= 14 || $score <= 17):
                return "C2";
                break;
            case ($score >= 8 || $score <= 13):
                return "D";
                break;
            case ($score >= 0 || $score <= 7):
                return "E";
                break;
        }
    }

    public function socialClassification()
    {
        $salario = $this->elementSession('salario');

        switch ($salario) {
            case 0:
                return "A";
                break;
            case 1:
                return "B";
                break;
            case 2:
                return "C";
                break;
            case 3:
                return "D";
                break;
            case 4:
                return "E";
                break;
        }
    }

    public function elementSession($element)
    {
        return $_SESSION['pesquisa'][0][$element];
    }

}