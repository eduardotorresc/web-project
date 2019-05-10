<?php

require_once './vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('./views');
$twig = new Twig_Environment($loader, []);

$who = 'Juan';
$hello = 'Bienvenidos a todos';

echo $twig->render('index.twig', compact('who', 'hello'));
