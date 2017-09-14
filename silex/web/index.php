<?php 

require_once __DIR__.'/../vendor/autoload.php';
date_default_timezone_set('Europe/Paris');
$app = new Silex\Application();

$app['debug'] = true;

$app->get('/', function() {
    $html = '<h1>racine du site</h1>';
    return $html;
});

$app->get('/todo/{id}', function($id) use($app) {
    $todo = [
        'id' => $id,
        'titile' => 'foo bar baz',
        'description' => 'lorem ipsum',
        'deadline' => new DateTime(),
        'done' => true
    ];
    
$html = <<<EOT
    <!DOCTYPE html>
    <html>
     <head>
       <meta charset="utf-8">
       <title></title>
     </head>
     <body>
            id: {$todo['id']}<br />
            title: {$todo['title']}<br />
            description: {$todo['description']}<br />
            deadline: {$todo['deadline']->format('d/m/Y')}<br />
            done: {$todo['done']}<br />
     </body>
     </html>
EOT;
    
    return $html;
});
$app->run();
?>