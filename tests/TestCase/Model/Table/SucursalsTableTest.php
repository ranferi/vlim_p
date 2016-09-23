<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SucursalsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SucursalsTable Test Case
 */
class SucursalsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SucursalsTable
     */
    public $Sucursals;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sucursals',
        'app.softwares',
        'app.empresas',
        'app.usuarios',
        'app.tipo_usuarios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Sucursals') ? [] : ['className' => 'App\Model\Table\SucursalsTable'];
        $this->Sucursals = TableRegistry::get('Sucursals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sucursals);

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
