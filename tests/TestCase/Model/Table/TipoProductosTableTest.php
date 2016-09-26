<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoProductosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoProductosTable Test Case
 */
class TipoProductosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoProductosTable
     */
    public $TipoProductos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipo_productos',
        'app.categoria_productos',
        'app.productos',
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
        'app.etapas',
        'app.vendedors',
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
        $config = TableRegistry::exists('TipoProductos') ? [] : ['className' => 'App\Model\Table\TipoProductosTable'];
        $this->TipoProductos = TableRegistry::get('TipoProductos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TipoProductos);

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
}
