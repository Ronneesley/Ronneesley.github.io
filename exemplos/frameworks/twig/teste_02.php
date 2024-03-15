<?php

require_once './vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader, [
    'cache' => './compilation_cache',
]);

echo $twig->render('index.html', ['name' => 'Fabien']);

?>
