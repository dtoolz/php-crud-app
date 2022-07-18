<?php

namespace app\controllers;

use app\Router;

class ProductController
{
    public function index (Router $router) 
    {
         $search = $_GET['search'] ?? '';
         $products = $router->db->getProducts($search);
         $router->renderView("products/index", [
            'products' => $products,
            'search' => $search
         ]);
    }

    public function create (Router $router) {
        $errors = [];
        $product = [
            'title' => '',
            'description' => '',
            'image' => '',
            'price' => ''
        ];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           
        }

        $router->renderView("products/create", [
            'product' => $product,
            'error' => $errors
         ]);
    }

    public function update () {
        echo "update page";
    }

    public function delete () {
        echo "delete page";
    }
}
