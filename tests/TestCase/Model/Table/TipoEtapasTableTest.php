<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoEtapasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoEtapasTable Test Case
 */
class TipoEtapasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoEtapasTable
     */
    public $TipoEtapas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipo_etapas',
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
        $config = TableRegistry::exists('TipoEtapas') ? [] : ['className' => 'App\Model\Table\TipoEtapasTable'];
        $this->TipoEtapas = TableRegistry::get('TipoEtapas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TipoEtapas);

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
