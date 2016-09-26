<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DiseniadorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DiseniadorsTable Test Case
 */
class DiseniadorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DiseniadorsTable
     */
    public $Diseniadors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.diseniadors',
        'app.usuarios',
        'app.tipo_usuarios',
        'app.empresas',
        'app.sucursals',
        'app.softwares',
        'app.avisos',
        'app.pedidos',
        'app.pacientes',
        'app.numero_calzados',
        'app.disenios',
        'app.estudios',
        'app.tipo_etapas',
        'app.vendedors',
        'app.tipo_productos',
        'app.categoria_productos',
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
        $config = TableRegistry::exists('Diseniadors') ? [] : ['className' => 'App\Model\Table\DiseniadorsTable'];
        $this->Diseniadors = TableRegistry::get('Diseniadors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Diseniadors);

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
