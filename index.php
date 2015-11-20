<?php 

include 'route.php';
include 'src/about.php';
include 'src/contact.php';

$route = new Route();

$route->add('/', function(){
	echo "Hey this is home";
});
$route->add('/about', 'about');
$route->add('/contact', 'contact');

echo "<pre>";
print_r($route);
echo "</pre>";

$route->submit();
