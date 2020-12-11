<?php


namespace App\controller;


use App\model\Product;
use App\model\ProductModel;

class ProductController
{
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function show()
    {
        $products = $this->productModel->show();
        include_once "src/view/list.php";
    }
    public function add(){
        if($_SERVER['REQUEST_METHOD']=="GET"){
            include_once "src/view/add.php";
        }
        else{
            $name = $_REQUEST['name'];
            $type = $_REQUEST['type'];
            $price = $_REQUEST['price'];
            $amount = $_REQUEST['amount'];
            $date = $_REQUEST['date'];
            $desc = $_REQUEST['desc'];
            $product = new Product($name,$type,$price,$amount,$date,$desc);
            $this->productModel->add($product);
            header("location:index.php");
        }
    }

    public function edit()
    {
        if($_SERVER['REQUEST_METHOD']=="GET"){
            $id = $_REQUEST['id'];
            $product = $this->productModel->getId($id);
            include_once "src/view/edit.php";
        }
        else{
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $type = $_REQUEST['type'];
            $price = $_REQUEST['price'];
            $amount = $_REQUEST['amount'];
            $date = $_REQUEST['date'];
            $desc = $_REQUEST['desc'];
            $product = new Product($name,$type,$price,$amount,$date,$desc);
            $product->setId($id);
            $this->productModel->edit($product);
            header("location:index.php");
        }
    }
    public function delete(){
        $id= $_REQUEST['id'];
        $this->productModel->delete($id);
        header("location:index.php");
    }
    public function search(){
        $name = "%".$_REQUEST['name']."%";
        $products = $this->productModel->search($name);
        include_once "src/view/list.php";
    }
}