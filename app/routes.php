<?php

use Slim\App;

return function (App $app) {
    $app->get('/', \App\Action\HomeAction::class);
    $app->get('/home', \App\Action\HomeAction::class);
    $app->any('/contact', \App\Action\ContactAction::class);
    $app->any('/blog', \App\Action\BlogAction::class);
    $app->any('/about', \App\Action\AboutAction::class);
    $app->any('/track', \App\Action\TrackAction::class);
    $app->any('/elements', \App\Action\ElementsAction::class);
    $app->any('/single-blog', \App\Action\SingleBlogAction::class);
    $app->get('/database-{type}', \App\Action\DatabaseAction::class);
};
