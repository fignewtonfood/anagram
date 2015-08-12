<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";

    $app = new Silex\Application();
    $app['debug']=true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' =>  __DIR__.'/../views'));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('anagram_form.html.twig');
    });

    $app->get("/results", function() use ($app) {
        $new = new Anagram;
        // $letters = array();
        // $test_Anagram->compareWords($letters);
        $output = $new->compareWords($_GET['master'], $_GET['words']);
        return $app['twig']->render('anagram_results.html.twig', array('array' => $output));
    });


    return $app;
?>
