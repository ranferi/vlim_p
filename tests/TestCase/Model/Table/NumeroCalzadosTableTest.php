<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NumeroCalzadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NumeroCalzadosTable Test Case
 */
class NumeroCalzadosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NumeroCalzadosTable
     */
    public $NumeroCalzados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.numero_calzados',
        'app.pacientes',
        'app.disenios',
        'app.usuarios',
        'app.tipo_usuarios',
        'app.empresas',
        'app.sucursals',
        'app.softwares',
        'app.avisos',
        'app.pedidos',
        'app.etapas',
        'app.estudios',
        'app.vendedors',
        'app.tipo_productos',
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
        $config = TableRegistry::exists('NumeroCalzados') ? [] : ['className' => 'App\Model\Table\NumeroCalzadosTable'];
        $this->NumeroCalzados = TableRegistry::get('NumeroCalzados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->NumeroCalzados);

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
