<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PedidosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PedidosTable Test Case
 */
class PedidosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PedidosTable
     */
    public $Pedidos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pedidos',
        'app.pacientes',
        'app.numero_calzados',
        'app.disenios',
        'app.usuarios',
        'app.tipo_usuarios',
        'app.empresas',
        'app.sucursals',
        'app.softwares',
        'app.avisos',
        'app.estudios',
        'app.tipo_etapas',
        'app.vendedors',
        'app.tipo_productos',
        'app.categoria_productos',
        'app.productos',
        'app.diseniadors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Pedidos') ? [] : ['className' => 'App\Model\Table\PedidosTable'];
        $this->Pedidos = TableRegistry::get('Pedidos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pedidos);

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
