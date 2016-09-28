<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoriaReferidosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoriaReferidosTable Test Case
 */
class CategoriaReferidosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoriaReferidosTable
     */
    public $CategoriaReferidos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.categoria_referidos',
        'app.referidos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CategoriaReferidos') ? [] : ['className' => 'App\Model\Table\CategoriaReferidosTable'];
        $this->CategoriaReferidos = TableRegistry::get('CategoriaReferidos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CategoriaReferidos);

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
