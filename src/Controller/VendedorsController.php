<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Vendedors Controller
 *
 * @property \App\Model\Table\VendedorsTable $Vendedors
 */
class VendedorsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Usuarios', 'Sucursals']
        ];
        $vendedors = $this->paginate($this->Vendedors);

        $this->set(compact('vendedors'));
        $this->set('_serialize', ['vendedors']);
    }

    /**
     * View method
     *
     * @param string|null $id Vendedor id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vendedor = $this->Vendedors->get($id, [
            'contain' => ['Usuarios', 'Sucursals', 'Pedidos']
        ]);

        $this->set('vendedor', $vendedor);
        $this->set('_serialize', ['vendedor']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vendedor = $this->Vendedors->newEntity();
        if ($this->request->is('post')) {
            $vendedor = $this->Vendedors->patchEntity($vendedor, $this->request->data);
            if ($this->Vendedors->save($vendedor)) {
                $this->Flash->success(__('The vendedor has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The vendedor could not be saved. Please, try again.'));
            }
        }
        $usuarios = $this->Vendedors->Usuarios->find('list', ['limit' => 200]);
        $sucursals = $this->Vendedors->Sucursals->find('list', ['limit' => 200]);
        $this->set(compact('vendedor', 'usuarios', 'sucursals'));
        $this->set('_serialize', ['vendedor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Vendedor id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vendedor = $this->Vendedors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vendedor = $this->Vendedors->patchEntity($vendedor, $this->request->data);
            if ($this->Vendedors->save($vendedor)) {
                $this->Flash->success(__('The vendedor has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The vendedor could not be saved. Please, try again.'));
            }
        }
        $usuarios = $this->Vendedors->Usuarios->find('list', ['limit' => 200]);
        $sucursals = $this->Vendedors->Sucursals->find('list', ['limit' => 200]);
        $this->set(compact('vendedor', 'usuarios', 'sucursals'));
        $this->set('_serialize', ['vendedor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Vendedor id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vendedor = $this->Vendedors->get($id);
        if ($this->Vendedors->delete($vendedor)) {
            $this->Flash->success(__('The vendedor has been deleted.'));
        } else {
            $this->Flash->error(__('The vendedor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
