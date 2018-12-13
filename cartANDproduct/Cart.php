<?php
/**
 * Created by PhpStorm.
 * User: dimax
 * Date: 13.12.2018
 * Time: 10:25
 */

class Cart
{


public $product = [];




    public function setProduct(Product ...$product)
    {
        $this->product = $product;
    }


    public function getProduct()
    {
        return $this->product;
    }


}

