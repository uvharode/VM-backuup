<?php

require_once "vendor/autoload.php";
ini_set('display_errors', 1);

$loader = new \Twig\Loader\FilesystemLoader('./view'); //tell the location of the .twig/.html file
$twig = new \Twig\Environment($loader,['cache'=>'./compilationCache']);
$template = $twig->load('twig_ex.html');//tell the file name which it have to search
echo $template->render( 
[
    'navigation' => 
    [
                    ['href'=>'https://www.cybage.com','caption'=>'Cybage Website'], 
                    ['href'=>'https://www.google.com','caption'=>'Search here'], 
                    ['href'=>'https://www.facebook.com','caption'=>'On Facebook'], 
    ],
    'a_variable' => '<b>hii</b>'
]
);
?>



