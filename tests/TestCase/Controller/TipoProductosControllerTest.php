<?php
namespace App\Test\TestCase\Controller;

use App\Controller\TipoProductosController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\TipoProductosController Test Case
 */
class TipoProductosControllerTest extends IntegrationTestCase
{

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
