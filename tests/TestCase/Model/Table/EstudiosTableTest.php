<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstudiosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstudiosTable Test Case
 */
class EstudiosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EstudiosTable
     */
    public $Estudios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.estudios',
        'app.pacientes',
        'app.numero_calzados',
        'app.pedidos',
        'app.disenios',
        'app.usuarios',
        'app.tipo_usuarios',
        'app.empresas',
        'app.sucursals',
        'app.softwares',
        'app.avisos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Estudios') ? [] : ['className' => 'App\Model\Table\EstudiosTable'];
        $this->Estudios = TableRegistry::get('Estudios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Estudios);

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
