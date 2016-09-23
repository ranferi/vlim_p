<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DiseniosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DiseniosTable Test Case
 */
class DiseniosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DiseniosTable
     */
    public $Disenios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.disenios',
        'app.usuarios',
        'app.tipo_usuarios',
        'app.empresas',
        'app.sucursals',
        'app.softwares',
        'app.avisos',
        'app.pacientes',
        'app.numero_calzados',
        'app.pedidos',
        'app.estudios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Disenios') ? [] : ['className' => 'App\Model\Table\DiseniosTable'];
        $this->Disenios = TableRegistry::get('Disenios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Disenios);

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
