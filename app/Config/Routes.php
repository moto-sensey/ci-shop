<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('admin',['namespace' => 'App\Controllers\Admin'], function($routes)
{
    $routes->get('users', 'Users::getUsers');
    $routes->get('user/(:segment)', 'Users::getUser/$1');
});

$routes->get('/', 'Home::index');
$routes->get('product', 'Product::index');
$routes->get('product/(:segment)', 'Product::show/$1');

$routes->get('blog', 'Blog::index');
$routes->get('blog/create', 'Blog::create', ['as' => 'post_create']);
$routes->post('blog/store', 'Blog::store');

$routes->get('blog/edit/(:num)', 'Blog::edit/$1', ['as' => 'post_edit']);
$routes->post('blog/update/(:num)', 'Blog::update/$1', ['as' => 'post_update']);
$routes->get('blog/delete/(:num)', 'Blog::delete/$1', ['as' => 'post_delete']);

$routes->get('blog/(:num)', 'Blog::view/$1');

