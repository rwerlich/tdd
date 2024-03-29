<?php
/**
 * Created by PhpStorm.
 * User: werlich
 * Date: 04/11/19
 * Time: 14:12
 */

namespace App;


use PHPUnit\Framework\TestCase;

class CarrinhoTest extends TestCase
{

    private $carrinho;
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

    //executado antes de cada teste
    public function setUp(): void
    {
        $this->carrinho = new Carrinho();
        $this->produto = new Produto();
    }

    //executado depois de cada teste
    public function tearDown(): void
    {
        unset($this->carrinho);
        unset($this->produto);
    }


    protected function assertPreConditions(): void
    {
        $classe = class_exists('\\App\\Carrinho');
        $this->assertTrue($classe);
    }

    protected function assertPostConditions(): void
    {
        parent::assertPostConditions(); // TODO: Change the autogenerated stub
    }

    public function testAdicaoDeProdutosNoCarrinho()
    {
        $produto = $this->produto;
        $produto->setName('Produto 1');
        $produto->setPrice(19.99);
        $produto->setSlug('produto-1');
        $produto2 = $this->produto;
        $produto2->setName('Produto 2');
        $produto2->setPrice(19.99);
        $produto2->setSlug('produto-2');
        $carrinho = $this->carrinho;
        $carrinho->addProduto($produto);
        $carrinho->addProduto($produto2);
        $this->assertIsArray($carrinho->getProdutos());
        $this->assertInstanceOf('\\App\\Produto', $carrinho->getProdutos()[0]);
        $this->assertInstanceOf('\\App\\Produto', $carrinho->getProdutos()[1]);
    }

    public function testSeValoresDeProdutosNoCarrinhoEstaoCorretosConformePassado()
    {
        $produto = $this->produto;
        $produto->setName('Produto 1');
        $produto->setPrice(19.99);
        $produto->setSlug('produto-1');
        $carrinho = $this->carrinho;
        $carrinho->addProduto($produto);
        $this->assertEquals('Produto 1', $carrinho->getProdutos()[0]->getName());
        $this->assertEquals(19.99, $carrinho->getProdutos()[0]->getPrice());
        $this->assertEquals('produto-1', $carrinho->getProdutos()[0]->getSlug());
    }

    public function testSeTotalDeProdutosEValorDaCompraEstaoCorretos()
    {
        $produto = $this->produto;
        $produto->setName('Produto 1');
        $produto->setPrice(19.99);
        $produto->setSlug('produto-1');
        $produto2 = $this->produto;
        $produto2->setName('Produto 2');
        $produto2->setPrice(19.99);
        $produto2->setSlug('produto-2');
        $carrinho = $this->carrinho;
        $carrinho->addProduto($produto);
        $carrinho->addProduto($produto2);
        $this->assertEquals(2, $carrinho->getTotalProdutos());
        $this->assertEquals(39.98, $carrinho->getTotalCompra());
    }

    //teste incompleto
    public function testIncompleto()
    {
        $this->markTestIncomplete('Teste incompleto');
    }


    /**
     * @requires PHP == 5.3
     */
    public function testSeFeatureEspecificaParaVersaoPhp()
    {
//        if (PHP_VERSION > 7) {
//            $this->markTestSkipped('Este teste s� roda abaixo de php 7');
//        }
        $this->assertTrue(true);
    }

}
