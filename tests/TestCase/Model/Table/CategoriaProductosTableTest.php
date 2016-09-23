<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoriaProductosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoriaProductosTable Test Case
 */
class CategoriaProductosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoriaProductosTable
     */
    public $CategoriaProductos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.categoria_productos',
        'app.tipo_productos',
        'app.productos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CategoriaProductos') ? [] : ['className' => 'App\Model\Table\CategoriaProductosTable'];
        $this->CategoriaProductos = TableRegistry::get('CategoriaProductos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CategoriaProductos);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
