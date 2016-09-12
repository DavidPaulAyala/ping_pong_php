<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/PingPongGenerator.php';

    //Add symfony debug component and turn it on.
    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    // Set Silex debug mode in $app object
    $app['debug'] = true;

    $app->get('/', function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get('/view_ping_pong', function() use ($app) {
        $my_PingPongGenerator = new PingPongGenerator;
        $ping_pong_numbers = $my_PingPongGenerator->makePingPong($_GET['number']);
        return $app['twig']->render('ping-pong.html.twig', array('numbers' => $ping_pong_numbers));
    });

    return $app;
?>
