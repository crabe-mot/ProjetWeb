<?php
  class ProductsController {

    public function __construct(){}

    public function index() {

        require_once('models/product.php');

        $product = new Product();
        $products=$product->get_all_products();
        require_once('views/products/index.php');

    }

    public function show() {

      if (!isset($_GET['id'])) return routing('pages', 'error');
      $product= new Product();
      $myproduct=$product->find($_GET['id']);
      require_once('views/products/show.php');

   }
 }
?>
