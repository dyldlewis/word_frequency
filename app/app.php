<?php

    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__."/../views"));

    $app->get("/", function() use ($app) {
        return $app["twig"]->render("counter.html.twig");
    });

    $app->get("/results", function() use ($app) {
        $counter = new RepeatCounter;
        $word_one = $_GET['word'];
        $word_two = $_GET['sentence'];
        $result = $counter->countRepeats($word_one, $word_two);
        return $app["twig"]->render("results.html.twig", array("result" => $result, "word" => $word_one));
    });

    return $app;
 ?>
