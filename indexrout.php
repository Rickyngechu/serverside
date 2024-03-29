<?php

require_once './Router.php';
// require_once './css/style.css';
// require_once './css/upload.css';

// require './style.css';
// include 'style.css';

Router::handle(method:'GET',path:'/', filename:'home.php');
Router::handle(method:'GET',path:'/home', filename:'home.php');
Router::handle(method:'GET',path:'/contact', filename:'templates/contact-us.php');
Router::handle(method:'GET',path:'/about-us', filename:'templates/about-us.php');
Router::handle(method:'GET',path:'/upload', filename:'templates/upload.php');
Router::handle(method:'GET',path:'/gallery', filename:'templates/gallery.php');
Router::handle(method:'GET',path:'/tours', filename:'templates/tours.php');
// Router::handle(method:'GET',path:'/about', filename:'./about.php');
// Router::handle(method:'GET',path:'/about', filename:'./about.php');
