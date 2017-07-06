
<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Score.php";
    session_start();
    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__."/../views"
));
    $app->get("/", function() use ($app) {
    return $app["twig"]->render("landing.html.twig");
    });
    $app->post("/update", function() use ($app) {
      $current_score = new Score();
      $result = $current_score->scrabbleDabble($_POST["word"]);
      return $app["twig"]->render("update.html.twig", array("Scrabblescore" => $result));
    });

return $app;
?>
