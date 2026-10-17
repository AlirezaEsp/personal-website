<?php 

// strict variable type declaration 
declare(strict_types=1);

// load autoloader
require dirname(__DIR__) . '/vendor/autoload.php';

// use Twig dependencies
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

// twig template filesystem lader
$loader = new FilesystemLoader(
    dirname(__DIR__) . '/templates'
);

// twig instance to render templates
$twig = new Environment($loader);

// load data
$profile = require dirname(__DIR__) . '/database/seed/profile.php';
$about = require dirname(__DIR__) . '/database/seed/about.php';
$resume = require dirname(__DIR__) . '/database/seed/resume.php';

// render main page
echo $twig->render('pages/index.twig', [
    'profile' => $profile,
    'about' => $about,
    'resume' => $resume,
]);

?>