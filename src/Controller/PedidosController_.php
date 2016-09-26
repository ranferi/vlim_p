<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pedidos Controller
 *
 * @property \App\Model\Table\PedidosTable $Pedidos
 */
class PedidosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pacientes', 'Sucursals', 'Etapas', 'Vendedors', 'TipoProductos', 'NumeroCalzados', 'Diseniadors']
        ];
        $pedidos = $this->paginate($this->Pedidos);

        $this->set(compact('pedidos'));
        $this->set('_serialize', ['pedidos']);
    }

    /**
     * Ver method
     *
     * @param string|null $id Pedido id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function ver($id = null)
    {
        $pedido = $this->Pedidos->get($id, [
            'contain' => ['Pacientes', 'Sucursals', 'Etapas', 'Vendedors', 'TipoProductos', 'NumeroCalzados', 'Diseniadors', 'Estudios', 'Disenios']
        ]);

        $this->set('pedido', $pedido);
        $this->set('_serialize', ['pedido']);
    }

    /**
     * Crear method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function crear()
    {
        $pedido = $this->Pedidos->newEntity();
        if ($this->request->is('post')) {
            $pedido = $this->Pedidos->patchEntity($pedido, $this->request->data);
            if ($this->Pedidos->save($pedido)) {
                $this->Flash->success(__('The pedido has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pedido could not be saved. Please, try again.'));
            }
        }
        $pacientes = $this->Pedidos->Pacientes->find('list', ['limit' => 200]);
        $sucursals = $this->Pedidos->Sucursals->find('list', ['limit' => 200]);
        $etapas = $this->Pedidos->Etapas->find('list', ['limit' => 200]);
        $vendedors = $this->Pedidos->Vendedors->find('list', ['limit' => 200]);
        $tipoProductos = $this->Pedidos->TipoProductos->find('list', ['limit' => 200]);
        $numeroCalzados = $this->Pedidos->NumeroCalzados->find('list', ['limit' => 200]);
        $diseniadors = $this->Pedidos->Diseniadors->find('list', ['limit' => 200]);
        $this->set(compact('pedido', 'pacientes', 'sucursals', 'etapas', 'vendedors', 'tipoProductos', 'numeroCalzados', 'diseniadors'));
        $this->set('_serialize', ['pedido']);
    }

    /**
     * Editar method
     *
     * @param string|null $id Pedido id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function editar($id = null)
    {
        $pedido = $this->Pedidos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pedido = $this->Pedidos->patchEntity($pedido, $this->request->data);
            if ($this->Pedidos->save($pedido)) {
                $this->Flash->success(__('The pedido has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pedido could not be saved. Please, try again.'));
            }
        }
        $pacientes = $this->Pedidos->Pacientes->find('list', ['limit' => 200]);
        $sucursals = $this->Pedidos->Sucursals->find('list', ['limit' => 200]);
        $etapas = $this->Pedidos->Etapas->find('list', ['limit' => 200]);
        $vendedors = $this->Pedidos->Vendedors->find('list', ['limit' => 200]);
        $tipoProductos = $this->Pedidos->TipoProductos->find('list', ['limit' => 200]);
        $numeroCalzados = $this->Pedidos->NumeroCalzados->find('list', ['limit' => 200]);
        $diseniadors = $this->Pedidos->Diseniadors->find('list', ['limit' => 200]);
        $this->set(compact('pedido', 'pacientes', 'sucursals', 'etapas', 'vendedors', 'tipoProductos', 'numeroCalzados', 'diseniadors'));
        $this->set('_serialize', ['pedido']);
    }

    /**
     * Eliminar method
     *
     * @param string|null $id Pedido id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function eliminar($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pedido = $this->Pedidos->get($id);
        if ($this->Pedidos->delete($pedido)) {
            $this->Flash->success(__('El pedido ha sido eliminado.'));
        } else {
            $this->Flash->error(__('El pedido ser eliminado. Por favor, intenta de nuevo.'));
        }


        return $this->redirect(['action' => 'index']);
    }
}
