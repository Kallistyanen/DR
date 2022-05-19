<?php
header('Content-Type: text/html; charset=utf-8');
session_start();


$url = explode('/', $_SERVER['REQUEST_URI']);
require_once("php/User.php");
require_once("php/db.php");

if ($url[1] == "auth") {
    $content = file_get_contents("login.html");
} else if ($url[1] == "reg") {
    $content = file_get_contents("register.html");
} else if ($url[1] == "index") {
    $content = file_get_contents("index.html");
} else if ($url[1] == "ed") {
    $content = file_get_contents("edible.html");
} else if ($url[1] == "in") {
    $content = file_get_contents("inedible.html");
} else if ($url[1] == "users") {
    require_once("index.php");
} else if ($url[1] == "addUser") {
    echo User::addUser($_POST["name"], $_POST["lastname"], $_POST["email"], $_POST["pass"]);
} else if ($url[1] == "authUser") {
    echo User::authUser($_POST["email"], $_POST["pass"]);
} else if ($url[1] == "getUser") {
    echo User::getUser($_SESSION["id"]);
} else if ($url[1] == "getUsers") {
    echo User::getUsers();
} else {
    $content = file_get_contents("index.php");
}

if (!empty($content))
    require_once("template.php");


// if ($url[1] == blog) {
//   require_once("blog.html");
// } else if ($url[1] == cart) {
//   require_once("cart.html");
// }



// $url = $url[0];
// for ($i = 0; $i < count($url); $i++) {
//   echo $url[$i]."<hr>";
// }
