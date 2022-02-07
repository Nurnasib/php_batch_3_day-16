<?php
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Product;
use App\classes\Pattern;
use App\classes\File;

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['pages'] == 'product')
    {
        $product = new Product();
        $products = $product->getAllProduct();
        include 'pages/product.php';
    }
    elseif ($_GET['pages'] == 'detail')
    {
        $product = new Product();
        $result = $product->getProductById($_GET['id']);
        include 'pages/detail.php';
    }
    elseif ($_GET['pages'] == 'pattern')
    {

        include 'pages/pattern.php';
    }
    elseif ($_GET['pages'] == 'file')
    {

        include 'pages/file.php';
    }
}
elseif (isset($_POST['pattern_btn']))
{
    $pattern = new Pattern($_POST);
    $pattern->index();
    include 'pages/pattern.php';
}
elseif (isset($_POST['img_btn']))
{
    $fileUpload = new File($_POST);
    $fileUpload->index();
    include 'pages/file.php';
}