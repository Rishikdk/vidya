<?php


$routes = [
  "/" => "php/index.php",
  "/edit" => "views/edit.php",
  "/blog" => "views/blog.php",
  "/add" => "views/add.php",
  "/delete" => "views/delete.php",
];

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

if (array_key_exists($uri, $routes)) {
  require $routes[$uri];
} else {
  include 'views/404.php';
  http_response_code(404);
}