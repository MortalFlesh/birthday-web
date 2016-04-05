<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/data/why-we.php';

$loader = new Twig_Loader_Filesystem('Resources/views');
$twig = new Twig_Environment($loader);


echo $twig->render('index.html.twig', [
    'why_we' => $whyWeDummy,
]);
