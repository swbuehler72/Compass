<?php

$router->get('/', 'Controller@index');

$router->get('/s/{token:[A-Za-z0-9]+}', 'Share@view');
$router->get('/share/current.json', 'Share@current_location');
$router->get('/share/history.json', 'Share@history');

$router->post('/auth/start', 'IndieAuth@start');
$router->get('/auth/callback', 'IndieAuth@callback');
$router->get('/auth/github', 'IndieAuth@github');
$router->get('/auth/logout', 'IndieAuth@logout');

$router->get('/map/{name:[A-Za-z0-9]+}', 'Controller@map');
$router->get('/settings/{name:[A-Za-z0-9]+}', 'Controller@settings');
$router->post('/settings/{name:[A-Za-z0-9]+}', 'Controller@updateSettings');
$router->post('/settings/{name:[A-Za-z0-9]+}/auth/start', 'Controller@micropubStart');
$router->get('/settings/{name:[A-Za-z0-9]+}/auth/callback', 'Controller@micropubCallback');
$router->get('/settings/{name:[A-Za-z0-9]+}/auth/remove', 'Controller@removeMicropub');
$router->post('/database/create', 'Controller@createDatabase');

$router->get('/api/query', 'Api@query');
$router->get('/api/last', 'Api@last');
$router->get('/api/trip', 'Api@trip');
$router->get('/api/find-from-localtime', 'LocalTime@find');
$router->get('/api/input', 'Api@account');
$router->post('/api/input', 'Api@input');
$router->post('/api/trip-complete', 'Api@trip_complete');
$router->post('/api/share', 'Api@share');
