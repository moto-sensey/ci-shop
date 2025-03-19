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
$routes->get('blog/create', 'Blog::create', ['as' => 'blog_create']);
$routes->post('blog/store', 'Blog::store');
$routes->get('blog/(:segment)', 'Blog::view/$1');

