<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VendedorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VendedorsTable Test Case
 */
class VendedorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VendedorsTable
     */
    public $Vendedors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.vendedors',
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
        $config = TableRegistry::exists('Vendedors') ? [] : ['className' => 'App\Model\Table\VendedorsTable'];
        $this->Vendedors = TableRegistry::get('Vendedors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Vendedors);

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
