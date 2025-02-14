<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::index');
$routes->match(['get','post'], 'login'    , 'Auth::login');
$routes->match(['get','post'], 'register' , 'Auth::register');
$routes->get('logout', 'Auth::logout');
$routes->get('unauthorized', 'Auth::unauthorized');
$routes->get('cron/reminder', 'Cron::reminder');

//admin path
$routes->match(['get','post'], 'dashboard', 'Auth::dashboard',['filter' => 'auth:admin']);
$routes->match(['get','post'], 'userList' , 'User::index'    ,['filter' => 'auth:admin']);
$routes->match(['get','post'], 'createUser','User::createUser',['filter' => 'auth:admin']);
$routes->match(['get','post'], 'addUser'   ,'User::addUser',['filter' => 'auth:admin']);
$routes->match(['get','post'], 'serviceList','Service::index' ,['filter' => 'auth:admin']);
$routes->match(['get','post'], 'serviceDesc','User::serviceDesc' ,['filter' => 'auth:admin']);
$routes->match(['get','post'], 'createService', 'Service::createService' ,['filter' => 'auth:admin']);
$routes->match(['get','post'], 'addService', 'Service::addService' ,['filter' => 'auth:admin']);
$routes->get('editService/(:num)','Service::editService/$1' ,['filter' => 'auth:admin']);
$routes->get('delService/(:num)' ,'Service::delService/$1' ,['filter' => 'auth:admin']);
$routes->get('invoice', 'Home::invoice',['filter' => 'auth:admin']);

//user path
$routes->match(['get','post'], 'Udashboard', 'Home::dashboard',['filter' => 'auth:user']);
$routes->match(['get','post'], 'profile'   , 'Home::profile'  ,['filter' => 'auth:user']);
$routes->get('create', 'Home::create');
$routes->post('store', 'Home::store');


