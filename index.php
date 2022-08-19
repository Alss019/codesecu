<?php
session_start();
$url = parse_url($_SERVER['REQUEST_URI']);
//test soit l'url a une route sinon on renvoi à la racine 
$path = isset($url['path']) ? $url['path'] : '/';
//test de la valeur $path dans l'URL et import de la ressource 
switch ($path) {
        //route /routing/addUser -> ./controler/controler_add_user.php 
    case $path === "/codesecu/add":
        include './controller/ctrl_add_article.php';
        break;
    case $path === "/codesecu/allArticle":
        include './controller/ctrl_show_all_article.php';
        break;
    default:
        include './controller/ctrl_home.php';
        break;
}
