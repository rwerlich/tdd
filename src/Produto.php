<?php

namespace App;


class Produto
{

    private $name;
    private $price;
    private $slug;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Produto
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     * @return Produto
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }


    public function setSlug($slug)
    {
        if(!$slug) {
            throw new \InvalidArgumentException('Parâmetro inválido, informe um slug');
        }
        $this->slug = $slug;
        return $this;
    }



}