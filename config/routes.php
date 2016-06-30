<?php
/**
 * 路由配置
 */
use Slince\Routing\RouteBuilder;

return function(RouteBuilder $routes) {
    //网站首页
    $routes->http('/', 'Default@PagesController@index');
    //单页
    $routes->http('/documents', 'Default@PagesController@commingSoon');
    $routes->http('/features', 'Default@PagesController@commingSoon');
};