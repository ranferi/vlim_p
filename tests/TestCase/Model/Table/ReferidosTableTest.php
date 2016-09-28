<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReferidosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReferidosTable Test Case
 */
class ReferidosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ReferidosTable
     */
    public $Referidos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.referidos',
        'app.categoria_referidos',
        'app.pacientes',
        'app.softwares',
        'app.sucursals',
        'app.empresas',
        'app.usuarios',
        'app.tipo_usuarios',
        'app.avisos',
        'app.numero_calzados',
        'app.pedidos',
        'app.tipo_etapas',
        'app.estudios',
        'app.vendedors',
        'app.tipo_productos',
        'app.categoria_productos',
        'app.productos',
        'app.diseniadors',
        'app.disenios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Referidos') ? [] : ['className' => 'App\Model\Table\ReferidosTable'];
        $this->Referidos = TableRegistry::get('Referidos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Referidos);

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
