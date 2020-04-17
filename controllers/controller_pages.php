<?php
class PagesController
{
    public function __construct()
    {
    }

    public function home()
    {
        require_once('models/product.php');

        $product = new Product();
        $products=$product->get_all_products();
        require_once('views/pages/home.php');

    }
    public function error()
    {
        require_once('views/pages/err.php');
    }
}
