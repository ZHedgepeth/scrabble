<?php

    require_once(__DIR__. "/../vendor/autoload.php");
    require_once(__DIR__. "/../src/Scrabble.php");

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__ . "/../views"));

    $app->get("/", function() use($app) {
        return $app["twig"]->render("scrabble_word_enter.html.twig");
    });

    $app->get("/scrabble_score", function() use($app) {
        $player_one_Score = new Scrabble($_GET["input_one"]);
        $word_one = $player_one_Score->getWord();
        $score1 = $player_one_Score->checkScore();

        $player_two_Score = new Scrabble($_GET["input_two"]);
        $word_two = $player_two_Score->getWord();
        $score2 = $player_two_Score->checkScore();

        return $app["twig"]->render("scrabble_word_score.html.twig", array("p1score" => $score1, "p2score" => $score2));

    });

    return $app;
 ?>
