<?php


namespace App\model;


class ProductModel extends DBconnect
{
    public function show()
    {
        $sql = "SELECT * FROM `products`";
        $stmt = $this->connect()->query($sql);
         return  $stmt->fetchAll();
    }

    public function add($product)
    {
        $sql = "INSERT INTO `products`(name, `type`, `price`, `amount`, `date`, `desc`) VALUES (:name,:type,:price,:amount,:date,:desc)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindValue("name",$product->getName());
        $stmt->bindValue("type",$product->getType());
        $stmt->bindValue("price",$product->getPrice());
        $stmt->bindValue("amount",$product->getAmount());
        $stmt->bindValue("date",$product->getDate());
        $stmt->bindValue("desc",$product->getDesc());
        $stmt->execute();
    }

    public function getId($id)
    {
        $sql = "SELECT * FROM `products` WHERE id=:id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam("id",$id);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function edit($product)
    {
        $sql = "UPDATE `products` SET `name`=:name,`type`=:type,`price`=:price,`amount`=:amount,`date`=:date,`desc`=:desc WHERE id=:id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindValue("name",$product->getName());
        $stmt->bindValue("type",$product->getType());
        $stmt->bindValue("price",$product->getPrice());
        $stmt->bindValue("amount",$product->getAmount());
        $stmt->bindValue("date",$product->getDate());
        $stmt->bindValue("desc",$product->getDesc());
        $stmt->bindValue("id",$product->getId());
        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `products` WHERE id=:id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam("id",$id);
        $stmt->execute();
    }

    public function search($name)
    {
        $sql = "SELECT * FROM `products` WHERE name LIKE :name";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindValue("name",$name);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}