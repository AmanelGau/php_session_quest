<?php 
require_once 'functions.php';
require_once 'data/products.php';
startSession();
if (isset($_GET["function"])) {
    switch ($_GET["function"]) {
        case "login":
            $_SESSION["name"]=$_POST["loginname"];
            break;
        case "disconnect":
            session_destroy();
            break;
        case 'add':
            if (isset($_GET['add_to_cart'])) {
                $id = $_GET['add_to_cart'];
                if (isset($_SESSION[addslashes($catalog[$id]["name"])])) {
                    $_SESSION[addslashes($catalog[$id]["name"])]++;
                } else {
                    $_SESSION[addslashes($catalog[$id]["name"])]=1;
                }
            }
    }
    header("Location: /index.php");
} else {
    header("Location: /index.php");
}
