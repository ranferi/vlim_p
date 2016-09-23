<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RecubrimientosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RecubrimientosTable Test Case
 */
class RecubrimientosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RecubrimientosTable
     */
    public $Recubrimientos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.recubrimientos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Recubrimientos') ? [] : ['className' => 'App\Model\Table\RecubrimientosTable'];
        $this->Recubrimientos = TableRegistry::get('Recubrimientos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Recubrimientos);

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
