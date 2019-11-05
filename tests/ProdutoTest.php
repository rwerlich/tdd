<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ProdutoTest extends TestCase
{

    private $produto;

    //executado apenas uma vez no inicio da execucao
    public static function setUpBeforeClass(): void
    {
        echo PHP_EOL . 'Inicio testes ' . __CLASS__ . PHP_EOL;
    }

    //executado apenas uma vez no fim da execucao
    public static function tearDownAfterClass(): void
    {
        echo PHP_EOL . 'Fim testes ' . __CLASS__ . PHP_EOL;
    }

    public function setUp(): void
    {
        $this->produto = new Produto();
    }

    public function tearDown(): void
    {
        unset($this->produto);
    }

    public function testSeONomeDoProdutoESestadoCorretamente(){
        $produto = $this->produto;
        $produto->setName('Produto 1');
        $this->assertEquals('Produto 1', $produto->getName());
    }

    public function testSeOPrecoESestadoCorretamente(){
        $produto = $this->produto;
        $produto->setPrice('19.99');
        $this->assertEquals('19.99', $produto->getPrice());
    }

    public function testSeOSlugESestadoCorretamente(){
        $produto = $this->produto;
        $produto->setSlug('produto-1');
        $this->assertEquals('produto-1', $produto->getSlug());
    }


}