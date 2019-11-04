<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ProdutoTest extends TestCase
{

    public function testSeONomeDoProdutoESestadoCorretamente(){
        $produto = new Produto();
        $produto->setName('Produto 1');
        $this->assertEquals('Produto 1', $produto->getName());
    }

    public function testSeOPrecoESestadoCorretamente(){
        $produto = new Produto();
        $produto->setPrice('19.99');
        $this->assertEquals('19.99', $produto->getPrice());
    }

    public function testSeOSlugESestadoCorretamente(){
        $produto = new Produto();
        $produto->setSlug('produto-1');
        $this->assertEquals('produto-1', $produto->getSlug());
    }


}