<?php

class Product
{
    public $id;
    public $cat_id;
    public $name;
    public $description;
    public $price;
    public $display;

    public function __construct(
        $id = false,
        $cat_id = false,
        $name = false,
        $description = false,
        $price = false,
        $display = false
    ) {
        if ($id === false) return;

        $this->id = $id;
        $this->cat_id = $cat_id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->display = $display;
    } //end construct

    public function get_all_products()
    {
        global $con;
        $list = array();
        //$con = DBConnect::getInstance(); //static method
        $products = $con->query('SELECT * FROM products');

        foreach ($products as $product)
            $list[] = new Product($product['prodid'], $product['catid'], $product['name'], $product['description'], $product['price'], $product['display']);
        return $list;
    }
    public function find($id)
    {
        global $con;
        $id = intval($id);
        $req = $con->prepare('SELECT * FROM products where prodid=:id');
        $req->execute(array('id' => $id));
        $product = $req->fetch();
        return new Product(
            $product['prodid'],
            $product['catid'],
            $product['name'],
            $product['description'],
            $product['price'],
            $product['display']
        );
    }
}//end class Product
