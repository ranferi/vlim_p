<?php
namespace App\Test\TestCase\Controller;

use App\Controller\PacientesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\PacientesController Test Case
 */
class PacientesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pacientes',
        'app.referidos',
        'app.categoria_referidos',
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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
